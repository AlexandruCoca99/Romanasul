var choreographers = [
  "Prof.Florin Ciobanu",
  "Ing.Viorel Roman",
  "Ing. Nicoara Eugen",
];

var dirijori = [
  "Hatfaludi Alexandru",
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

var directori = [
  "Prof. Ioan Bârsan",
  "Prof. Mîndru Alexandru",
  "Prof. Victor Bercea",
  "Ing. Marius Moldovan",
  "Anghel Mirela",
];

var artists = [
  "Mia Dan",
  "Dumitru Sopon",
  "Maria Marcu",
  "Sava Negrean Brudaşcu",
  "Veta Biriş",
  "Nicolae Furdui Iancu",
  "Ion Pojar",
  "Maria Lobont",
  "Angela Nistor",
  "Mariana Morcan",
  "Maria Dan Golban",
  "Marius Ciprian Pop",
  "Adriana Hagău",
  "Aurel Ciceoan",
  "Maria Dan Golban",
];

var musicians = [
  "Dumitru Fărcaş",
  "Gheorghe Zamfir",
  "Gheorghe Palcu",
  "Ioan Berci",
  "Dan Gâdea",
  "Constantin Istici",
  "Mircea Câmpeanu",
];

var individuals = ["Vania Atudorei", "Victor Bercea"];

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
    el: ".swiper-pagination",
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
    el: ".swiper-pagination",
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
    el: ".swiper-pagination",
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
    el: ".swiper-pagination",
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
    el: ".swiper-pagination",
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
    el: ".swiper-pagination",
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
var btnConductors = document.getElementById("read-more-conductors");
var btnSingers = document.getElementById("read-more-singers");
var btnCollaboratingSingers = document.getElementById(
  "read-more-collaborating-singers"
);

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
