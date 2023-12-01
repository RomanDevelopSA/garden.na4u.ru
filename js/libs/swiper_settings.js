let arrayGallery = document.querySelectorAll(".gallery_products");
let arrayNextButton = document.querySelectorAll(".swiper-button-next");
let arrayPrevButton = document.querySelectorAll(".swiper-button-prev");

for (let i = 0; i < arrayGallery.length; i++) {

    let swiperParams = {
        slidesPerView: "auto",
        spaceBetween: 20,
        freeMode: {
            enabled: true,
            momentum: false,
        },
    }

    swiperParams.navigation = {};
    swiperParams.navigation.nextEl = arrayNextButton[i];
    swiperParams.navigation.prevEl = arrayPrevButton[i];

    new Swiper(arrayGallery[i], swiperParams);
}
