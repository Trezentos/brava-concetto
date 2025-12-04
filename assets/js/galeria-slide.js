jQuery(document).ready(function($) {

    $("[data-fancybox]").fancybox({
        backFocus: false
    });

    const swiper = new Swiper(".swiper-imoveis", {
        slidesPerView: 1,
        spaceBetween: 16,
        speed: 1000,
        observer: true,
        observeParents: true,

        scrollbar: {
            el: ".swiper-scrollbar",
            draggable: true,
        },
        navigation: {
            nextEl: ".slide-imoveis .outer-next",
            prevEl: ".slide-imoveis .outer-prev",
        },


    });


});
