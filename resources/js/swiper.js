// import Swiper JS
import Swiper from 'swiper';
// import 'swiper/swiper-bundle.css;
import 'swiper/swiper-bundle.css';

// core version * navigation, pagination modules:
import SwiperCore, { Navigation, Pagination,Autoplay } from 'swiper/core';
SwiperCore.use([Navigation,Pagination,Autoplay]);

const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    autoplay: {
        delay: 3000//自動再生のスピード
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  var swiper2 = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
