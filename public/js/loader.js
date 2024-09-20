jQuery(document).ready(function ($) {
  // Add 'loading' class to the body on document ready
  $("body").addClass("loading");

  // Once the window has fully loaded, hide the spinner and show the content
  $(window).on("load", function () {
    // Hide the spinner
    $("#spinner").fadeOut("slow", function () {
      // Once the spinner is hidden, show the main content
      $(".content-wrapper").fadeIn("slow");
    });

    // Remove the loading class from the body
    $("body").removeClass("loading");
  });
});
