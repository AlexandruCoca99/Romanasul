new Swiper(".swiper-homepage", {
  slidesPerView: 1,
  autoHeight: true,
  centeredSlides: true,
  spaceBetween: 24,
  grabCursor: true,
  pagination: {
    el: ".swiper-homepage .swiper-custom-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return `<div class=${className}>
                <span class="number">${index + 1}</span>
                <span class="line"></span>
                </div>`;
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
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
      slidesPerView: 1,
    },
  },
});

const countdown = () => {
  const countDate = new Date("November 17, 2024 20:00:00").getTime();
  const now = new Date().getTime();
  const gap = countDate - now;

  const second = 1000;
  const minute = second * 60;
  const hour = minute * 60;
  const day = hour * 24;

  const textDay = Math.floor(gap / day);
  const textHour = Math.floor((gap % day) / hour);
  const textMinute = Math.floor((gap % hour) / minute);
  const textSecond = Math.floor((gap % minute) / second);

  document.getElementById("days").innerText = textDay;
  document.getElementById("hours").innerText = textHour;
  document.getElementById("minutes").innerText = textMinute;
  document.getElementById("seconds").innerText = textSecond;
};

setInterval(countdown, 1000);
