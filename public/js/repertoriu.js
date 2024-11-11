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

  // $(".right-side").on("click", function () {
  //   window.open("https://www.youtube.com/watch?v=CUcJ6SjzesM", "_blank");
  // });

  $(".dans").click(function () {
    // Clone the video container and create an overlay
    let id = this.id;
    const videoContainer = $(`.dance-yt-video-container-${id}`)
      .clone()
      .removeClass("hidden")
      .wrap(`<div class="video-overlay"></div>`)
      .parent();
    $("body").append(videoContainer);

    // Close the video when clicking outside of it
    $(`.video-overlay`).click(function () {
      $(this).remove();
    });

    // Prevent closing the video when clicking on the video itself
    $(".dance-yt-video-container").click(function (event) {
      event.stopPropagation();
    });
  });
});
