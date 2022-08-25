import Swiper, { Navigation, Pagination } from 'swiper';

Swiper.use([Navigation, Pagination]);

const swiper = new Swiper('.portfolio__slider', {
    grabCursor: true,
    loop: true,
    navigation: {
        prevEl: '.portfolio__nav--prev',
        nextEl: '.portfolio__nav--next',
    },
    pagination: {
        el: '.portfolio__pagination'
    },
    on: {
       autoHeight: true,
    },
    breakpoints: {
        1360: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 60,
        },
        720: {
            slidesPerView: 2.5,
            spaceBetween: 60,
        },
        450: {
            slidesPerView: 1.5,            
            spaceBetween: 25,
        },
        320: {
            slidesPerView: 1.2,            
            spaceBetween: 25,
        }
    }
});