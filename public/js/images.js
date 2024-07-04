jQuery(document).ready(function ($) {
  const $timePeriodContainers = $(".time-period-container");
  const $galleries = $(".gallery-wrapper");

  $(document).on("click", ".time-period-container", function () {
    const id = $(this).attr("id");
    console.log(id);
    //add slider
    $(`.gallery-wrapper.${id}-period`).removeClass("hidden");
  });

  $(".gallery-wrapper .close-button").on("click", function (e) {
    e.preventDefault();
    $(".gallery-wrapper").addClass("hidden");
  });
});
