$(document).ready(function () {
  $("img").each(function () {
    $(this).attr("loading", "lazy");
  });
});

$(document).on("click", ".hamburger ", function () {
  $("nav").toggleClass("active");
});

new Swiper(".swiper-homepage", {
  effect: "fade",
  autoHeight: true,
  centeredSlides: true,
  spaceBetween: 24,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-homepage .swiper-custom-pagination",
    clickable: true,
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

$(document).ready(function () {
  $(window).scroll(function () {
    const header = $(".header");

    if ($(window).scrollTop() > 300) {
      // Adjust the scroll value as needed
      header.addClass("header-scrolled");
    } else {
      header.removeClass("header-scrolled");
    }
  });

  const pagesToChange = ["/tours", "/Imagini"];
  console.log(window.location.pathname);

  if (pagesToChange.some((page) => window.location.pathname.includes(page))) {
    $(".header").css("background-color", "#000000"); // Black background
  }
});
