// メニューをボタンとスワイプで横スライド(jsバージョン)
// document.addEventListener("DOMContentLoaded", function() {
//     const menu = document.getElementById("menu");
//     const menuItems = document.querySelectorAll(".menu-item");
//     const itemCount = menuItems.length;
//     const itemWidth = menuItems[0].offsetWidth + parseInt(getComputedStyle(menuItems[0]).marginRight);
//     const scrollLeftButton = document.getElementById("scroll-left");
//     const scrollRightButton = document.getElementById("scroll-right");

//     let currentPosition = 0;
//     let touchStartX = 0;

//     function updateButtonsVisibility() {
//         scrollLeftButton.style.display = currentPosition > 0 ? "block" : "none";
//         scrollRightButton.style.display = currentPosition < itemCount - 3 ? "block" : "none";
//     }

//     function scrollToPosition(position) {
//         currentPosition = position;
//         const translateXValue = -position * itemWidth;
//         menu.style.transform = `translateX(${translateXValue}px)`;
//         updateButtonsVisibility();
//     }

//     function handleSwipe(startX, endX) {
//         const threshold = 50;

//         if (startX - endX > threshold && currentPosition + 3 < itemCount) {
//             scrollToPosition(currentPosition + 3);
//         }else if (endX - startX > threshold && currentPosition - 3 >= 0) {
//             scrollToPosition(currentPosition - 3);
//         }
//     }

//     menu.addEventListener("touchstart", function(event) {
//         touchStartX = event.touches[0].clientX;
//     });

//     menu.addEventListener("touchend", function(event) {
//         const touchEndX = event.changedTouches[0].clientX;
//         handleSwipe(touchStartX, touchEndX);
//     });

//     scrollLeftButton.addEventListener("click", function () {
//         if (currentPosition - 3 >= 0) {
//         scrollToPosition(currentPosition - 3);
//         }
//     });

//     scrollRightButton.addEventListener("click", function () {
//         if (currentPosition + 3 < itemCount) {
//         scrollToPosition(currentPosition + 3);
//         }
//     });
//     updateButtonsVisibility();
// });

// メニューをボタンとスワイプで横スライド(jQueryバージョン)
$(function(){
    const menu = $("#menu");
    const menuItems = $(".menu-item");
    const itemCount = menuItems.length;
    const itemWidth = menuItems.eq(0).outerWidth(true);
    const scrollLeftButton = $("#scroll-left");
    const scrollRightButton = $("#scroll-right");

    let currentPosition = 0;
    let touchStartX = 0;

    function updateButtonsVisibility() {
        scrollLeftButton.toggle(currentPosition > 0);
        scrollRightButton.toggle(currentPosition < itemCount - 3);
    }

    function scrollToPosition(position) {
        currentPosition = position;
        const translateXValue = -position * itemWidth;
        menu.css("transform", `translateX(${translateXValue}px)`);
        updateButtonsVisibility();
    }

    function handleSwipe(startX, endX) {
        const threshold = 50;

        if(startX - endX > threshold && currentPosition + 3 < itemCount) {
            scrollToPosition(currentPosition + 3);
        }else if (endX - startX > threshold && currentPosition - 3 >= 0) {
            scrollToPosition(currentPosition - 3);
        }
    }

    menu.on("touchstart", function(event){
        touchStartX = event.originalEvent.touches[0].clientX;
    });

    menu.on("touchend", function(event){
        const touchEndX = event.originalEvent.changedTouches[0].clientX;
        handleSwipe(touchStartX, touchEndX);
    });

    scrollLeftButton.on("click", function(){
        if(currentPosition - 3 >= 0) {
            scrollToPosition(currentPosition - 3);
        }
    });

    scrollRightButton.on("click", function(){
        if(currentPosition + 3 < itemCount) {
            scrollToPosition(currentPosition + 3);
        }
    });

    updateButtonsVisibility();
});
  