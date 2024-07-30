jQuery(document).ready(function ($) {
  const btnSubmit = document.querySelector(".submit-button");
  const btnReview = document.querySelector(".review-button");
  const post = document.querySelector(".post");
  const widget = document.querySelector(".star-widget");
  const editBtn = document.querySelector(".return-button");
  //   btnSubmit.onclick = () => {
  //     widget.style.display = "none";
  //     post.style.display = "block";
  //     editBtn.onclick = () => {
  //       widget.style.display = "flex";
  //       post.style.display = "none";
  //     };
  //     return false;
  //   };

  $(document).on("click", ".review-button", function () {
    $(".container-reviews").removeClass("hidden");
    $(".review-overview").addClass("hidden");
  });

  $(document).on("click", ".submit-button", function () {
    $(".post").removeClass("hidden");
    $(".star-widget").addClass("hidden");
  });

  $(document).on("click", ".return-button", function () {
    $(".review-overview").removeClass("hidden");
    $(".post").addClass("hidden");
    $(".container-reviews").addClass("hidden");
    $(".star-widget").removeClass("hidden");
  });
});
