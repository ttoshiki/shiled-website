"use strict";

const swiper = new Swiper('.swiper-container', {
  loop: true,
  navigation: {
    nextEl: '.service__caseSliderButton.-next',
    prevEl: '.service__caseSliderButton.-prev',
  },
  centeredSlides: true,
  slidesPerView: 3.6,
  spaceBetween: 40,
});

const airSwiper = new Swiper('#swiper-air-container', {
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-air',
    prevEl: '.price__afterSliderButton.-prev.-air',
  },
  slidesPerView: 4,
  spaceBetween: 40,
});
