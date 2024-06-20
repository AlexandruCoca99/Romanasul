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

let conductors = document.getElementById("more-conductors");
let singers = document.getElementById("more-singers");
let collaboratingSingers = document.getElementById(
  "more-collaborating-singers"
);
var btnConductors = document.getElementById("read-more-conductors");
var btnSingers = document.getElementById("read-more-singers");
var btnCollaboratingSingers = document.getElementById(
  "read-more-collaborating-singers"
);

// function showMoreConductors() {
//   if (conductors.classList.contains("hidden")) {
//     conductors.classList.remove("hidden");
//     btnConductors.textContent = "Show Less";
//   } else {
//     conductors.classList.add("hidden");
//     btnConductors.textContent = "Read More";
//   }
// }

// function showMoreSingers() {
//   if (singers.classList.contains("hidden")) {
//     singers.classList.remove("hidden");
//     btnSingers.textContent = "Show Less";
//   } else {
//     singers.classList.add("hidden");
//     btnSingers.textContent = "Read More";
//   }
// }

function showMoreConductors() {
  const conductors = document.getElementById("more-conductors");
  const btnConductors = document.getElementById("read-more-conductors");

  if (conductors.classList.contains("expand")) {
    conductors.style.height = "0";
    conductors.classList.remove("expand");
    btnConductors.textContent = "Read More";
  } else {
    conductors.classList.add("expand");
    let autoHeight = conductors.scrollHeight + "px"; // Get the actual height of the content
    conductors.style.height = autoHeight;
    btnConductors.textContent = "Show Less";
  }
}

function showMoreSingers() {
  const singers = document.getElementById("more-singers");
  const btnSingers = document.getElementById("read-more-singers");

  if (singers.classList.contains("expand")) {
    singers.style.height = "0";
    singers.classList.remove("expand");
    btnSingers.textContent = "Read More";
  } else {
    singers.classList.add("expand");
    let autoHeight = singers.scrollHeight + "px"; // Get the actual height of the content
    singers.style.height = autoHeight;
    btnSingers.textContent = "Show Less";
  }
}

function showMoreCollaboratingSingers() {
  const collaboratingSingers = document.getElementById(
    "more-collaborating-singers"
  );
  const btnCollaboratingSingers = document.getElementById(
    "read-more-collaborating-singers"
  );

  if (collaboratingSingers.classList.contains("expand")) {
    collaboratingSingers.style.height = "0";
    collaboratingSingers.classList.remove("expand");
    btnCollaboratingSingers.textContent = "Read More";
  } else {
    collaboratingSingers.classList.add("expand");
    let autoHeight = collaboratingSingers.scrollHeight + "px"; // Get the actual height of the content
    collaboratingSingers.style.height = autoHeight;
    btnCollaboratingSingers.textContent = "Show Less";
  }
}

// function showMoreCollaboratingSingers() {
//   if (collaboratingSingers.classList.contains("hidden")) {
//     collaboratingSingers.classList.remove("hidden");
//     btnCollaboratingSingers.textContent = "Show Less";
//   } else {
//     collaboratingSingers.classList.add("hidden");
//     btnCollaboratingSingers.textContent = "Read More";
//   }
// }
