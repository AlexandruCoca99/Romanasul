const choreographers = [
  "Prof.Florin Ciobanu",
  "Ing.Viorel Roman",
  "Ing. Nicoara Eugen",
];

const dirijori = [
  "Hatfa Alexandru",
  "Vasile Moldovan",
  "Marius Moldovan",
  "Ioan Moloca",
  "Traian Covrig",
  "Prof. Titus Beşa-Fluieraş",
  "Prof. Ioan Morar",
  "Prof. Iulian Raţiu",
  "Prof. Ioan Crişan",
  "Ştefan Lustig",
  "Romică Râmbu",
  "Iuliu Hoca",
  "Prof. Paul Stoica",
];

const directori = [
  "Lucian Revnic",
  "Anghel Mirela",
  "Ing. Marius Moldovan",
  "Prof. Victor Bercea",
  "Prof. Mîndru Alexandru",
  "Prof. Ioan Bârsan",
];

const artists = [
  "Sava Negrean Brudaşcu",
  "Marius Ciprian Pop",
  "Ionut Fulea",
  "Maria Marcu",
  "Mia Dan",
  "Veta Biriş",
  "Nicolae Furdui Iancu",
  "Ion Pojar",
  "Maria Lobont",
  "Angela Nistor",
  "Mariana Morcan",
  "Maria Dan Golban",
  "Dumitru Sopon",
  "Adriana Hagău",
  "Aurel Ciceoan",
  "Maria Dan Golban",
];

const musicians = [
  "Dumitru Fărcaş",
  "Gheorghe Zamfir",
  "Ioan Berci",
  "Gheorghe Palcu",
  "Dan Gâdea",
  "Constantin Istici",
  "Mircea Câmpeanu",
];

const individuals = ["Vania Atudorei", "Victor Bercea", "Oana Camelia Bara"];

const swiperConfigs = {
  slidesPerView: 1.1,
  autoHeight: true,
  centeredSlides: true,
  spaceBetween: 24,
  grabCursor: true,

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
  pagination: {
    el: ".choreographers-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return (
        `<span class="` + className + `">` + choreographers[index] + `</span>`
      );
    },
  },
});

const swiper2 = new Swiper(".swiper-conductors", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-2",
    prevEl: "#nav-left-2",
  },
  pagination: {
    el: ".conductors-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<span class="` + className + `">` + dirijori[index] + `</span>`;
    },
  },
});

const swiper3 = new Swiper(".swiper-cultural-attaches", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-3",
    prevEl: "#nav-left-3",
  },
  pagination: {
    el: ".cultural-attaches-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<span class="` + className + `">` + directori[index] + `</span>`;
    },
  },
});

// const swiper4 = new Swiper(".swiper-singers", {
//   ...swiperConfigs,
//   navigation: {
//     nextEl: "#nav-right-4",
//     prevEl: "#nav-left-4",
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//     renderBullet: function (index, className) {
//       return `<span class="` + className + `">` + artists[index] + `</span>`;
//     },
//   },
// });

const swiper5 = new Swiper(".swiper-collaborating-singers", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-5",
    prevEl: "#nav-left-5",
  },
  pagination: {
    el: ".collaborating-singers-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<span class="` + className + `">` + artists[index] + `</span>`;
    },
  },
});

const swiper6 = new Swiper(".swiper-collaborating-musicians", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-6",
    prevEl: "#nav-left-6",
  },
  pagination: {
    el: ".collaborating-musicians-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<span class="` + className + `">` + musicians[index] + `</span>`;
    },
  },
});

const swiper7 = new Swiper(".swiper-show-hosts", {
  ...swiperConfigs,
  navigation: {
    nextEl: "#nav-right-7",
    prevEl: "#nav-left-7",
  },
  pagination: {
    el: ".show-hosts-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return (
        `<span class="` + className + `">` + individuals[index] + `</span>`
      );
    },
  },
});

// Repeat initialization for each swiper

let conductors = document.getElementById("more-conductors");
let singers = document.getElementById("more-singers");
let collaboratingSingers = document.getElementById(
  "more-collaborating-singers"
);
let btnConductors = document.getElementById("read-more-conductors");
let btnSingers = document.getElementById("read-more-singers");
let btnCollaboratingSingers = document.getElementById(
  "read-more-collaborating-singers"
);

function showMore(occupation, btn) {
  if (occupation.classList.contains("expand")) {
    occupation.style.height = "0";
    occupation.classList.remove("expand");
    btn.textContent = "Mai mult";
  } else {
    occupation.classList.add("expand");
    let autoHeight = occupation.scrollHeight + "px"; // Get the actual height of the content
    occupation.style.height = autoHeight;
    btn.textContent = "Mai putin";
  }
}

function showMoreConductors() {
  showMore(conductors, btnConductors);
}

function showMoreCollaboratingSingers() {
  showMore(collaboratingSingers, btnCollaboratingSingers);
}

const createObserver = (effect, thd) =>
  (observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add(effect);
        }
      });
    },
    {
      threshold: thd,
    }
  ));

document.addEventListener("DOMContentLoaded", function () {
  const photos = document.querySelectorAll(".photo-1, .photo-2 ");
  const members = document.querySelectorAll(
    ".member-content, .swiper-members-holder "
  );

  function isMobile() {
    return window.matchMedia("(max-width: 767px)").matches;
  }

  // Function to set observers based on screen size
  function setObservers() {
    // On mobile, you might want to change thresholds or behavior
    const photoThreshold = isMobile() ? 0.3 : 0.5;
    const memberThreshold = isMobile() ? 0.3 : 0.6;

    const observerPhotos = createObserver("active", photoThreshold);
    const observerMembers = createObserver("fade-in", memberThreshold);

    photos.forEach((photo) => {
      observerPhotos.observe(photo);
    });

    members.forEach((member) => {
      observerMembers.observe(member);
    });
  }

  setObservers();

  // Recheck if window is resized (to handle resize from desktop to mobile or vice versa)
  window.addEventListener("resize", function () {
    setObservers();
  });
});
