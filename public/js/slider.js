new Swiper(".swiper", {
  slidesPerView: 1.1,
  autoHeight: true,
  centeredSlides: true,
  spaceBetween: 24,
  grabCursor: true,
  pagination: {
    el: ".swiper .swiper-custom-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<div class=${className}>
              <span class="number">${index + 1}</span>
              <span class="line"></span>
              </div>`;
    },
  },
  lazyLoading: true,
  loop: true,
  keyboard: {
    enabled: true,
  },
  navigation: {
    nextEl: "#nav-right",
    prevEl: "#nav-left",
  },
  breakpoints: {
    800: {
      slidesPerView: 1,
    },
    1400: {
      slidesPerView: 1.3,
    },
  },
});
