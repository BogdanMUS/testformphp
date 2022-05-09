$(document).ready(function () {
    $(".header__burger").click(function (event) {
        $(".header__burger,.header__menu").toggleClass("active");
    });
});

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        disabledClass: ".swiper-button-disabled",
        clickable: true,
    },

    spaceBetween: 70,
    slidesPerView: 1,
    slidesPerGroup: 1,

    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // when window width is >= 640px
        1100: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },

    // And if we need scrollbar
});

$(document).ready(function () {
    $("#menu").on("click", "a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr("href"),
            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $("body,html").animate({ scrollTop: top }, 1500);
    });
});
