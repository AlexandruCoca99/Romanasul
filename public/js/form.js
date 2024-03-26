const inputs = document.querySelectorAll(".contact-input");
const icons = document.querySelectorAll(".icon-phone");
var flag;
inputs.forEach((input) => {
  input.addEventListener("focus", () => {
    input.parentNode.classList.add("focus");
    input.parentNode.classList.add("not-empty");
  });
  input.addEventListener("blur", () => {
    if (input.value == "") {
      input.parentNode.classList.remove("not-empty");
    }
    input.parentNode.classList.remove("focus");
  });
});

jQuery(document).ready(function ($) {
  $(document).on("click", ".phone ", function () {
    $(".icon-phone").addClass("fa-shake");
    $(".button").toggleClass("clicked");
    $(".icon-dot").removeClass("fa-bounce");
    $(".icon-globe").removeClass("fa-flip");
  });
  $(document).on("click", ".dot", function () {
    $(".icon-dot").addClass("fa-bounce");
    $(".icon-phone").removeClass("fa-shake");
    $(".icon-globe").removeClass("fa-flip");
  });
  $(document).on("click", ".globe", function () {
    $(".icon-globe").addClass("fa-flip");
    $(".icon-phone").removeClass("fa-shake");
    $(".icon-dot").removeClass("fa-bounce");
  });
  $(".contact").on("click", function () {
    $(".icon-globe").removeClass("fa-flip");
    $(".icon-phone").removeClass("fa-shake");
    $(".icon-dot").removeClass("fa-bounce");
  });
});
