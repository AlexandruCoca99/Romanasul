jQuery(document).ready(function ($) {
  $(document).on("click", ".time-period-container", function () {
    const id = $(this).attr("id");
    console.log(id);
    //add slider
    $(`.gallery-wrapper.${id}-period`).addClass("show");
  });

  $(".gallery-wrapper .close-button").on("click", function (e) {
    e.preventDefault();
    $(".gallery-wrapper").removeClass("show");
  });
});
