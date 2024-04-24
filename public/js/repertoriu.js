jQuery(document).ready(function ($) {
  $(document).on("click", ".left-side", function () {
    const id = $(this).attr("id");
    console.log(id);
    //add slider
    $(".swiper-main").removeClass("hidden");
    $(`.swiper.${id}`).removeClass("hidden");
  });

  $(".swiper-main .close-button").on("click", function (e) {
    e.preventDefault();
    $(".swiper-main").addClass("hidden");
    $(".swiper-main .swiper").addClass("hidden");
  });

  $(".right-side").on("click", function () {
    window.open("https://www.youtube.com/watch?v=CUcJ6SjzesM", "_blank");
  });
});
