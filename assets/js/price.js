"use strict";

const sliderPcPerView = 4
const sliderSpPerView = 1.8
const sliderPcSpaceBetween = 40
const sliderSpSpaceBetween = 24

const swiper = new Swiper('.swiper-container', {
  loop: true,
  navigation: {
    nextEl: '.service__caseSliderButton.-next',
    prevEl: '.service__caseSliderButton.-prev',
  },
  slidesPerView: sliderSpPerView,
  spaceBetween: sliderSpSpaceBetween,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination"
  },
  breakpoints: {
    769: {
      slidesPerView: 3.6,
      spaceBetween: sliderPcSpaceBetween
    }
  },
});

const airSwiper = new Swiper('#swiper-air-container', {
  loop: true,
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-air',
    prevEl: '.price__afterSliderButton.-prev.-air',
  },
  centeredSlides: true,
  slidesPerView: sliderSpPerView,
  spaceBetween: sliderSpSpaceBetween,
  pagination: {
    el: ".swiper-air-pagination"
  },
  breakpoints: {
    769: {
      loop: false,
      centeredSlides: false,
      slidesPerView: sliderPcPerView,
      spaceBetween: sliderPcSpaceBetween
    }
  },
});

const entranceSwiper = new Swiper('#swiper-entrance-container', {
  loop: true,
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-entrance',
    prevEl: '.price__afterSliderButton.-prev.-entrance',
  },
  slidesPerView: sliderSpPerView,
  spaceBetween: sliderSpSpaceBetween,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination"
  },
  pagination: {
    el: ".swiper-entrance-pagination"
  },
  breakpoints: {
    769: {
      loop: false,
      centeredSlides: false,
      slidesPerView: sliderPcPerView,
      spaceBetween: sliderPcSpaceBetween
    }
  },
});

const contactSwiper = new Swiper('#swiper-contact-container', {
  loop: true,
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-contact',
    prevEl: '.price__afterSliderButton.-prev.-contact',
  },
  slidesPerView: sliderSpPerView,
  spaceBetween: sliderSpSpaceBetween,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination"
  },
  pagination: {
    el: ".swiper-contact-pagination"
  },
  breakpoints: {
    769: {
      loop: false,
      centeredSlides: false,
      slidesPerView: sliderPcPerView,
      spaceBetween: sliderPcSpaceBetween
    }
  },
});

const splashSwiper = new Swiper('#swiper-splash-container', {
  loop: true,
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-splash',
    prevEl: '.price__afterSliderButton.-prev.-splash',
  },
  slidesPerView: sliderSpPerView,
  spaceBetween: sliderSpSpaceBetween,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination"
  },
  pagination: {
    el: ".swiper-splash-pagination"
  },
  breakpoints: {
    769: {
      loop: false,
      centeredSlides: false,
      slidesPerView: sliderPcPerView,
      spaceBetween: sliderPcSpaceBetween
    }
  },
});

const otherSwiper = new Swiper('#swiper-other-container', {
  loop: true,
  navigation: {
    nextEl: '.price__afterSliderButton.-next.-other',
    prevEl: '.price__afterSliderButton.-prev.-other',
  },
  slidesPerView: sliderSpPerView,
  spaceBetween: sliderPcSpaceBetween,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination"
  },
  pagination: {
    el: ".swiper-other-pagination"
  },
  breakpoints: {
    769: {
      loop: false,
      centeredSlides: false,
      slidesPerView: sliderPcPerView,
      spaceBetween: sliderSpSpaceBetween
    }
  },
});
