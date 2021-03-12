"use strict";

const sliderPerView = 4
const sliderSpaceBetween = 40

const swiper = new Swiper('.swiper-container', {
  loop: true,
  navigation: {
    nextEl: '.service__caseSliderButton.-next',
    prevEl: '.service__caseSliderButton.-prev',
  },
  centeredSlides: true,
  slidesPerView: 3.6,
  spaceBetween: sliderSpaceBetween,
});

const airSwiper = new Swiper('#swiper-air-container', {
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-air',
    prevEl: '.price__afterSliderButton.-prev.-air',
  },
  slidesPerView: sliderPerView,
  spaceBetween: sliderSpaceBetween,
});

const entranceSwiper = new Swiper('#swiper-entrance-container', {
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-entrance',
    prevEl: '.price__afterSliderButton.-prev.-entrance',
  },
  slidesPerView: sliderPerView,
  spaceBetween: sliderSpaceBetween,
});

const contactSwiper = new Swiper('#swiper-contact-container', {
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-contact',
    prevEl: '.price__afterSliderButton.-prev.-contact',
  },
  slidesPerView: sliderPerView,
  spaceBetween: sliderSpaceBetween,
});

const splashSwiper = new Swiper('#swiper-splash-container', {
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-splash',
    prevEl: '.price__afterSliderButton.-prev.-splash',
  },
  slidesPerView: sliderPerView,
  spaceBetween: sliderSpaceBetween,
});

const otherSwiper = new Swiper('#swiper-other-container', {
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-other',
    prevEl: '.price__afterSliderButton.-prev.-other',
  },
  slidesPerView: sliderPerView,
  spaceBetween: sliderSpaceBetween,
});
