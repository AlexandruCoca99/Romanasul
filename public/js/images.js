jQuery(document).ready(function ($) {
  $(document).on("click", ".time-period-container", function () {
    const id = $(this).attr("id");
    console.log(id);
    //add slider
    $(`.gallery-wrapper.${id}-period`).removeClass("hidden");
    $(".gallery-container").addClass("hidden");
  });

  $(".gallery-wrapper .close-button").on("click", function (e) {
    e.preventDefault();
    $(".gallery-wrapper").addClass("hidden");
    $(".gallery-container").removeClass("hidden");
  });

  var images = $(".gallery-image-container img:not(:first)");
  // console.log(images);
  // You can now manipulate the images as needed
  images.on("click", function () {
    var imgSrc = $(this).attr("src"); // Get the src of the clicked image
    console.log(imgSrc);
    if (imgSrc !== "images/close-red-icon.svg") {
      $(".popup-img img").attr("src", imgSrc); // Change the src of the popup image
      $(".popup-img").css("display", "block"); // Display the popup image container
    }
  });

  // Bind a click event to the close button to hide the popup image
  $(".popup-img ").on("click", function () {
    $(".popup-img").css("display", "none"); // Hide the popup image container
  });
});
