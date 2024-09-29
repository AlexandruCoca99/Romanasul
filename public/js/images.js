const id = 0;
$(document).on("click", ".time-period-container", function () {
  id = $(this).attr("id");

  //add slider
  $(`.gallery-wrapper.${id}-period`).removeClass("hidden");
  // $(".gallery-container").addClass("hidden");
});
console.log(id);
// $(".gallery-wrapper .close-button-container").on("click", function (e) {
//   e.preventDefault();
//   $(".gallery-wrapper").addClass("hidden");
//   $(".gallery-container").removeClass("hidden");
// });

let currentImageIndex = 0;
let closeButtonIndex = 0;
var images = $(".gallery-image-container img:not(:first)");

function getVisibleGalleryImages() {
  return $(".gallery-wrapper:not(.hidden) .gallery-image-container img");
}

// You can now manipulate the images as needed
images.on("click", function () {
  const visibleImages = getVisibleGalleryImages(); // Get visible images
  currentImageIndex = visibleImages.index(this); // Set the current index

  var imgSrc = $(this).attr("src");
  // currentImageIndex = images.index(this);
  if (imgSrc !== "images/close-red-icon.svg") {
    $(".popup-img .popup-image-content").attr("src", imgSrc); // Change the src of the popup image
    $(".popup-img").css("display", "block");
  }
});

// Bind a click event to the close button to hide the popup image
$(".popup-img .close-button").on("click", function () {
  $(".popup-img").css("display", "none");
});

$(".background").on("click", function () {
  $(".popup-img").css("display", "none");
});

// Function to change slides in the popup
function changeSlide(n) {
  const visibleImages = getVisibleGalleryImages(); // Get visible images
  currentImageIndex += n;
  // If the index exceeds the number of images, loop back

  if (currentImageIndex >= visibleImages.length) {
    currentImageIndex = 0;
  }
  if (currentImageIndex < 0) {
    currentImageIndex = visibleImages.length - 1;
  }

  // Change the popup image to the new one based on currentImageIndex
  const newSrc = $(visibleImages[currentImageIndex]).attr("src");
  if (newSrc !== "images/close-red-icon.svg")
    $(".popup-img .popup-image-content").attr("src", newSrc);
}
