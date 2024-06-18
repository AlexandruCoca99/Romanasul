// new Swiper(".swiper-members", {
//   slidesPerView: 1.1,
//   autoHeight: true,
//   centeredSlides: true,
//   spaceBetween: 24,
//   grabCursor: true,
//   pagination: {
//     el: ".swiper-members .swiper-custom-pagination",
//     clickable: true,
//     renderBullet: function (index, className) {
//       return `<div class=${className}>
//                 <span class="number">${index + 1}</span>
//                 <span class="line"></span>
//                 </div>`;
//     },
//   },
//   lazyLoading: true,
//   //   loop: true,
//   keyboard: {
//     enabled: true,
//   },
//   navigation: {
//     nextEl: "#nav-right",
//     prevEl: "#nav-left",
//   },
//   breakpoints: {
//     800: {
//       slidesPerView: 1,
//     },
//     1400: {
//       slidesPerView: 1,
//     },
//   },
// });

const swiperConfigs = {
  slidesPerView: 1.1,
  autoHeight: true,
  centeredSlides: true,
  spaceBetween: 24,
  grabCursor: true,
  pagination: {
    el: ".swiper-custom-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<div class=${className}>
                <span class="number">${index + 1}</span>
                <span class="line"></span>
                </div>`;
    },
  },
  lazyLoading: true,
  keyboard: {
    enabled: true,
  },
  breakpoints: {
    800: {
      slidesPerView: 1,
    },
    1400: {
      slidesPerView: 1,
    },
  },
};

// Initialize each swiper instance separately
const swiper1 = new Swiper(".swiper-choreographers", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right",
    prevEl: "#nav-left",
  },
});

const swiper2 = new Swiper(".swiper-conductors", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-2",
    prevEl: "#nav-left-2",
  },
});

const swiper3 = new Swiper(".swiper-cultural-attaches", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-3",
    prevEl: "#nav-left-3",
  },
});

const swiper4 = new Swiper(".swiper-singers", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-4",
    prevEl: "#nav-left-4",
  },
});

const swiper5 = new Swiper(".swiper-collaborating-singers", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-5",
    prevEl: "#nav-left-5",
  },
});

const swiper6 = new Swiper(".swiper-collaborating-musicians", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-6",
    prevEl: "#nav-left-6",
  },
});

const swiper7 = new Swiper(".swiper-show-hosts", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-7",
    prevEl: "#nav-left-7",
  },
});

// Repeat initialization for each swiper

function showMore() {
  var moreText = document.getElementsByClassName("more");
  var btnText = document.getElementsByClassName("read-more");

  if (moreText.classList.contains("hidden")) {
    moreText.classList.remove("hidden");
    btnText.textContent = "Show Less";
  } else {
    moreText.classList.add("hidden");
    btnText.textContent = "Read More";
  }
}
