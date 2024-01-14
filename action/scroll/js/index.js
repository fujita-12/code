$(function() {
    $('.content-area dl dt').on('click', function() {
        $(this).next().slideToggle(300);
        $(this).toggleClass('open', 300);
    });
});

$(function() {
    $('.bc-a-middle-category, .bc-a-mc-a-content').show();
    $('.b-category').on('click', function(){
        $('.middle-category-list').hide();
        let target = $(this).data('mc');
        $('.' + target).show();
        $('.m-category').removeClass("select");
        $('.' + target + ' .mc-a').addClass("select");
        $('.' + target + ' .qa-content').removeClass("active");
        $('.' + target + ' .first-content').addClass("active");
        $('.b-category').removeClass("select");
        $(this).addClass("select");
        $('.' + target).addClass("select");
    });
    $('.m-category').on('click', function(){
        $('.qa-content').removeClass("active");
        let target = $(this).data('qa');
        $('.' + target).addClass("active");
        $('.m-category').removeClass("select");
        $(this).addClass("select");
    });
});

function scrollLink(bcClass, mcClass, qaClass) {
    $('.b-category').removeClass("select");
    $('.' + bcClass).addClass("select");
    $('.m-category').removeClass("select");
    $('.' + mcClass).addClass("select");
    $('.middle-category-list').hide();
    $('.' + bcClass + '-middle-category').show();
    $('.qa-content').removeClass("active");
    $('.' + bcClass + '-' + mcClass + '-content').addClass("active");

    $('.' + qaClass).next().slideDown(300);
    $('.' + qaClass).addClass('open', 300);

    let pos = $('.' + qaClass).offset().top;
    $('body,html').animate({scrollTop: pos}, 500);  
}

