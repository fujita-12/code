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