// 1-1
// inputにフォーカスが当たったら特定の要素を出現させる（jsバージョン）
// const myInput = document.querySelector('input[name="sample1-1"]');
// const hiddenElement = document.querySelector('.show-input-focus');

// myInput.addEventListener('focus', function () {
//     hiddenElement.style.display = 'block';
// });

// myInput.addEventListener('input', function () {
//     if (myInput.value.trim() !== '') {
//         hiddenElement.style.display = 'block';
//     }
// });

// myInput.addEventListener('blur', function () {
//     if (myInput.value.trim() === '') {
//         hiddenElement.style.display = 'none';
//     }
// });

// inputにフォーカスが当たったら特定の要素を出現させる（jqueryバージョン）
$(function(){
    $("input[name='sample1-1']").on('focus', function(){
        $(".show-input-focus").show();
    });
    $("input[name='sample1-1']").on('input', function(){
        if($(this).val() !== '') {
            $(".show-input-focus").show();
        }
    });
    $("input[name='sample1-1']").on('blur', function(){
        if($(this).val() == '') {
            $(".show-input-focus").hide();
        }
    });
});
// 1-1ここまで

// 1-2
// 指定したインプット要素のdata属性に「number+数値」が振ってある場合最大値にチェックを入れる（jsバージョン）
// document.addEventListener('DOMContentLoaded', function(){
//     let radioButtons = document.querySelectorAll('input[name="sample1-2"]');

//     checkLargestNumber();

//     function checkLargestNumber() {
//         let maxNumberCheckbox = null;
//         let maxNumber = -Infinity;

//         radioButtons.forEach(function (radioButton){
//             let numberString = radioButton.getAttribute('data-number');
//             let match = numberString.match(/number(\d+)/);
//             console.log(match[1])
//             if(match) {
//                 let number = parseInt(match[1], 10);
//                 if(!isNaN(number) && number > maxNumber) {
//                     maxNumber = number;
//                     maxNumberCheckbox = radioButton;
//                 }
//             }
//         });

//         radioButtons.forEach(function (radioButton){
//             radioButton.checked = false;
//         });
//         if(maxNumberCheckbox) {
//             maxNumberCheckbox.checked = true;
//         }
//     }
// });

// 指定したインプット要素のdata属性に「number+数値」が振ってある場合最大値にチェックを入れる（jqueryバージョン）
$(function(){
    radioButtons = $("input[name='sample1-2']");

    checkLargestNumber();

    function checkLargestNumber() {
        let maxNumberCheckbox = null;
        let maxNumber = -Infinity;

        radioButtons.each(function () {
            // data-number 属性の値を取得して"number"の後の数値だけを取り出す
            var numberString = $(this).data('number');
            var match = numberString.match(/number(\d+)/);

            if (match) {
                var number = parseInt(match[1], 10);
                if (!isNaN(number) && number > maxNumber) {
                    maxNumber = number;
                    maxNumberCheckbox = $(this);
                }
            }
        });

        // 最大の番号を持つ checkbox にチェックを入れる
        radioButtons.prop('checked', false); // まず全てのチェックを外す
        if (maxNumberCheckbox) {
            maxNumberCheckbox.prop('checked', true);
        }
    }
});

// 指定したインプット要素のvalue属性に単純に数値が振ってある場合最大値にチェックを入れる（jqueryバージョン）
// $(function(){
//     radioButtans = $("input[name='sample1-2']");

//     checkLargestNumber();

//     function checkLargestNumber() {
//         let maxNumberCheckbox = null;
//         let maxNumber = -Infinity;

//         radioButtans.each(function(){
//             let valueNumber = $(this).val();
//             if(!isNaN(valueNumber) && valueNumber > maxNumber) {
//                 maxNumber = valueNumber;
//                 maxNumberCheckbox = $(this);
//             }
//         });

//         radioButtans.prop('checked', false);
//         if(maxNumberCheckbox) {
//             maxNumberCheckbox.prop('checked', true);
//         }
//     }
// });
// 1-2ここまで