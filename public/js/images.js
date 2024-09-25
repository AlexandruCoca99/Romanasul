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
  let currentImageIndex = 0;
  var images = $(".gallery-image-container img:not(:first)");
  // console.log(images);
  // You can now manipulate the images as needed
  images.on("click", function () {
    var imgSrc = $(this).attr("src"); // Get the src of the clicked image
    currentImageIndex = images.index(this); // Get the index of the clicked image
    if (imgSrc !== "images/close-red-icon.svg") {
      $(".popup-img img").attr("src", imgSrc); // Change the src of the popup image
      $(".popup-img").css("display", "block"); // Display the popup image container
      // $(".prev").css("display", "block");
      // $(".next").css("display", "block");
    }
  });

  // Bind a click event to the close button to hide the popup image
  $(".popup-img ").on("click", function () {
    $(this).css("display", "none"); // Hide the popup image container
    // $(".prev").hide();
    // $(".next").hide();
  });

  // Function to change slides in the popup
  function changeSlide(n) {
    currentImageIndex += n;

    // If the index exceeds the number of images, loop back
    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }
    if (currentImageIndex < 0) {
      currentImageIndex = images.length - 1;
    }

    // Change the popup image to the new one based on currentImageIndex
    const newSrc = $(images[currentImageIndex]).attr("src");
    $(".popup-img img").attr("src", newSrc);
  }
});
