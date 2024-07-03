jQuery(document).ready(function ($) {
  const $timePeriodContainers = $(".time-period-container");
  const $galleries = $(".gallery-wrapper");

  $(document).on("click", ".time-period-container", function () {
    const id = $(this).attr("id");
    console.log(id);
    //add slider
  });
});
