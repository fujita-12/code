$(function() {
    // 各アンケートカテゴリーの検証ルール
    const validationRules = [
        { selector: 'input[name="q_1[]"]', errorSelector: '.error-message-1', message: '必須' },
        { selector: 'input[name="q_2"]', errorSelector: '.error-message-2', message: '必須' },
        { selector: 'input[name="q_3"]', errorSelector: '.error-message-3', message: '必須' },
        { selector: 'input[name="q_4"]', errorSelector: '.error-message-4', message: '必須' },
        { selector: 'select[name="q_5"]', errorSelector: '.error-message-5', message: '必須' },
        { selector: 'input[name="agree"]', errorSelector: '.error-message-6', message: '必須' }
    ];

    // 各アンケートカテゴリーの選択状態を取得してエラーメッセージを表示
    function checkQuestion(selector, errorSelector, message) {
        var isValid = false;
        // チェック状態や値の存在を確認
        if ($(selector).is(':checkbox') || $(selector).is(':radio')) {
            isValid = $(selector).is(':checked');
        } else if ($(selector).is('select')) {
            isValid = $(selector).val();
        }
        // エラーメッセージを表示
        if(isValid) {
            $(errorSelector).html('');
        }else {
            $(errorSelector).html(message);
        }
        return isValid;
    }

    // チェックした項目にテキスト入力がある場合
    function checkInputText() {
        var check_flag_text_all = [];
        $('[class*="has-text-"]').each(function(index, element) {
            // 選択した要素のクラスから番号を取得
            var allClasses = $(element).attr("class");
            var classArray = allClasses.split(" ");
            var targetClasses = classArray.filter(function(className) {
                return className.includes("has-text-");
            });
            var commonNumber = targetClasses[0].substr(targetClasses[0].indexOf('has-text-') + 'has-text-'.length);

            // 選択した項目のテキストボックスの中身を取得
            var textBox = $('.q-text-' + commonNumber).val();

            if($(element).prop('checked')) {
                $('.q-text-' + commonNumber).removeClass('disabled');
                if(textBox == '') {
                    $('.error-text-' + commonNumber).html('入力してください');
                    check_flag_text_all.push(false);
                }else {
                    $('.error-text-' + commonNumber).html('');
                    check_flag_text_all.push(true);
                }
            }else {
                $('.q-text-' + commonNumber).addClass('disabled');
                $('.error-text-' + commonNumber).html('');
                $('.q-text-' + commonNumber).val('');
                check_flag_text_all.push(true);
            }
        });

        var allTrue = check_flag_text_all.every(value => value === true);
        return allTrue;
    }
    // テキスト入力がある項目がエラーの場合スクロール
    function checkErrorTextScroll() {
        var isValid = true;
        $('[class*="error-text-"]').each(function(index, element) {
            var checkErrorText = $(element).text();

            if (checkErrorText && isValid) {
                // 最初の無効フィールドにスクロール
                const position = $(element).closest('.question').offset().top - 20;
                $('html, body').animate({ scrollTop: position }, 600);
                isValid = false;
            }
        });
    }

    // 各アンケートカテゴリーの選択状態フラグ
    var check_flag1 = false;
    var check_flag2 = false;
    var check_flag3 = false;
    var check_flag4 = false;
    var check_flag5 = false;
    var check_flag6 = false;

    var check_flag_text = true;

    // 各項目の値が変化したら
    $('input[name="q_1[]"], input[name="q_2"], input[name="q_3"], input[name="q_4"], select[name="q_5"], input[name="agree"], [class*="has-text-"], [class*="q-text-"]').on('change', function() {
        if ($(this).attr("data-qNumber") !== undefined) {
            // 変更した値のアンケートカテゴリー番号を取得
            var number = $(this).attr('data-qNumber') - 1;
            // 変更したアンケートカテゴリーの選択状態フラグを更新
            var check_flag = checkQuestion(validationRules[number].selector, validationRules[number].errorSelector, validationRules[number].message);
            if(number == '0') {
                check_flag1 = check_flag ? true : false;
            }else if(number == '1') {
                check_flag2 = check_flag ? true : false;
            }else if(number == '2') {
                check_flag3 = check_flag ? true : false;
            }else if(number == '3') {
                check_flag4 = check_flag ? true : false;
            }else if(number == '4') {
                check_flag5 = check_flag ? true : false;
            }else if(number == '5') {
                check_flag6 = check_flag ? true : false;
            }
        }

        // テキストボックスのある項目のバリデーションとフラグを更新
        check_flag_text = checkInputText();

        // 送信ボタンの活性、非活性を切り替え
        if(check_flag1 && check_flag2 && check_flag3 && check_flag4 && check_flag5 && check_flag6 && check_flag_text) {
            $('.submit-button').removeClass('disabled');
        }else {
            $('.submit-button').addClass('disabled');
        }
    });

    // 送信ボタンのクリック時に全体を検証
    $('.submit-wrap').on('click', function() {
        let isAllValid = true;

        validationRules.forEach(rule => {
            var errorElement = $(rule.errorSelector);

            // 各フィールドを個別に検証
            var fieldIsValid  = checkQuestion(rule.selector, rule.errorSelector, rule.message);

            if (!fieldIsValid && isAllValid) {
                // 最初の無効フィールドにスクロール
                const position = errorElement.closest('.question').offset().top - 20;
                $('html, body').animate({ scrollTop: position }, 600);
                isAllValid = false;
            }
        });

        // テキスト入力項目がエラーの場合スクロール
        if(isAllValid) {
            checkErrorTextScroll();
        }
    });
});


// アンケートカテゴリー1の選択状態を取得
// function checkQ1() {
//     var check = $('input[name="q_1[]"]').is(':checked');
//     if(check) {
//         $('.error-message-1').html('');
//     }else {
//         $('.error-message-1').html('必須');
//     }
//     return check;
// }

// // アンケートカテゴリー2の選択状態を取得
// function checkQ2() {
//     var check = $('input[name="q_2"]').is(':checked');
//     if(check) {
//         $('.error-message-2').html('');
//     }else {
//         $('.error-message-2').html('必須');
//     }
//     return check;
// }

// // アンケートカテゴリー3の選択状態を取得
// function checkQ3() {
//     var check = $('input[name="q_3"]').is(':checked');
//     if(check) {
//         $('.error-message-3').html('');
//     }else {
//         $('.error-message-3').html('必須');
//     }
//     return check;
// }

// // アンケートカテゴリー4の選択状態を取得
// function checkQ4() {
//     var check = $('input[name="q_4"]').is(':checked');
//     if(check) {
//         $('.error-message-4').html('');
//     }else {
//         $('.error-message-4').html('必須');
//     }
//     return check;
// }

// // アンケートカテゴリー5の選択状態を取得
// function checkQ5() {
//     var check = $('select[name="q_5"]').val();
//     if(check) {
//         $('.error-message-5').html('');
//     }else {
//         $('.error-message-5').html('必須');
//     }
//     return check;
// }

// // 同意ボタンの選択状態を取得
// function checkAgree() {
//     var check = $('input[name="agree"]').is(':checked');
//     if(check) {
//         $('.error-message-6').html('');
//     }else {
//         $('.error-message-6').html('必須');
//     }
//     return check;
// }

// $(function() {
//     var check_flag1;
//     var check_flag2;
//     var check_flag3;
//     var check_flag4;
//     var check_flag5;
//     var check_flag6;

//     $('input[name="q_1[]"]').on('change', function() {
//         check_flag1 = checkQ1();
//     });

//     $('input[name="q_2"]').on('change', function() {
//         check_flag2 = checkQ2();
//     });

//     $('input[name="q_3"]').on('change', function() {
//         check_flag3 = checkQ3();
//     });

//     $('input[name="q_4"]').on('change', function() {
//         check_flag4 = checkQ4();
//     });

//     $('select[name="q_5"]').on('change', function() {
//         check_flag5 = checkQ5();
//     });

//     $('input[name="agree"]').on('change', function() {
//         check_flag6 = checkAgree();
//     });

//     $('input[name="q_1[]"], input[name="q_2"], input[name="q_3"], input[name="q_4"], select[name="q_5"], input[name="agree"]').on('change', function() {
//         if(check_flag1 && check_flag2 && check_flag3 && check_flag4 && check_flag5 && check_flag6) {
//             $('.submit-button').removeClass('disabled');
//         }else {
//             $('.submit-button').addClass('disabled');
//         }
//     });

//     $('.submit-wrap').on('click', function() {
//         checkQ1();
//         checkQ2();
//         checkQ3();
//         checkQ4();
//         checkQ5();
//         checkAgree();

//         if(!check_flag1) {
//             var position = $('.question-1').offset().top - 20;
//             var speed = 600;
//             $("html,body").animate({scrollTop:position},speed);
//         }else if(!check_flag2) {
//             var position = $('.question-2').offset().top -20;
//             $("html,body").animate({scrollTop:position},speed);
//         }else if(!check_flag3) {
//             var position = $('.question-3').offset().top -20;
//             $("html,body").animate({scrollTop:position},speed);
//         }else if(!check_flag4) {
//             var position = $('.question-4').offset().top -20;
//             $("html,body").animate({scrollTop:position},speed);
//         }else if(!check_flag5) {
//             var position = $('.question-5').offset().top -20;
//             $("html,body").animate({scrollTop:position},speed);
//         }
//     });
// });


// $(function() {
//     // 特定のフィールドのみ検証
//     function validateField($field, $errorElement, message) {
//         let isValid = false;

//         // チェック状態や値の存在を確認
//         if ($field.is(':checkbox') || $field.is(':radio')) {
//             isValid = $field.is(':checked');
//         } else if ($field.is('select')) {
//             isValid = $field.val() !== '';
//         } else {
//             isValid = $field.val().trim() !== '';
//         }

//         // エラーメッセージの更新
//         $errorElement.text(isValid ? '' : message);
//         return isValid;
//     }

//     // 全体の検証状態を確認して送信ボタンの有効/無効を切り替え
//     function updateSubmitButtonState() {
//         const isAllValid = validationRules.every(rule =>
//             validateField($(rule.selector), $(rule.errorSelector), rule.message)
//         );
//         $('.submit-button').toggleClass('disabled', !isAllValid);
//     }

//     // 各アンケートカテゴリーの検証ルール
//     const validationRules = [
//         { selector: 'input[name="q_1[]"]', errorSelector: '.error-message-1', message: '必須' },
//         { selector: 'input[name="q_2"]', errorSelector: '.error-message-2', message: '必須' },
//         { selector: 'input[name="q_3"]', errorSelector: '.error-message-3', message: '必須' },
//         { selector: 'input[name="q_4"]', errorSelector: '.error-message-4', message: '必須' },
//         { selector: 'select[name="q_5"]', errorSelector: '.error-message-5', message: '必須' },
//         { selector: 'input[name="agree"]', errorSelector: '.error-message-6', message: '必須' }
//     ];

//     // 各フィールドに検証処理を登録
//     validationRules.forEach(rule => {
//         $(rule.selector).on('change', function() {
//             const $field = $(rule.selector);
//             const $errorElement = $(rule.errorSelector);

//             // 選択されたフィールドのみを検証
//             validateField($field, $errorElement, rule.message);
//             updateSubmitButtonState(); // ボタン状態を更新
//         });
//     });

//     // 送信ボタンのクリック時に全体を検証
//     $('.submit-wrap').on('click', function() {
//         let isAllValid = true;

//         validationRules.forEach(rule => {
//             const $field = $(rule.selector);
//             const $errorElement = $(rule.errorSelector);

//             // 各フィールドを個別に検証
//             const fieldIsValid = validateField($field, $errorElement, rule.message);
//             if (!fieldIsValid && isAllValid) {
//                 // 最初の無効フィールドにスクロール
//                 const position = $errorElement.closest('.question').offset().top - 20;
//                 $('html, body').animate({ scrollTop: position }, 600);
//                 isAllValid = false;
//             }
//         });

//         return isAllValid; // 無効なフィールドがあれば送信をキャンセル
//     });
// });
