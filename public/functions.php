<?php

function get_includes()
{
  return '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="highslide/highslide-with-gallery.packed.js"/></script>
    <script src="//cdn.amcharts.com/lib/4/core.js"></script>
    <script src="//cdn.amcharts.com/lib/4/maps.js"></script>
    <script src="//cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/plugins/bullets.js"></script>
    
    
    <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />




    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    ';
}

//add local scripts here
function get_local_scripts()
{
  return '       
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/map.js"></script>
    <script type="text/javascript" src="js/highslide_custom.js"/></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/form.js"></script>
    <script src="js/repertoriu.js"></script>
    <script src="js/slider-who-we-are.js"></script>
    <script src="js/images.js"></script>
    <script src="js/reviews.js"></script>
    <script src="js/homepage.js"></script>
    <script src="js/loader.js"></script>
    <script src="app.js"></script>
';
}

function get_header($title = "")
{
  echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/Sigla-noua.png" />
        <meta name="description" content="‘Românașul Cluj-Napoca’, România este grupul tradițional de dans folcloric al Universității Tehnice. Ne place să dansăm și să cântăm, să participăm la festivaluri și să ne răspândim tradițiile, obiceiurile naționale, dansurile și cântecele în întreaga lume." />

        <meta name="keywords" content="Romanasul, Cluj-Napoca, cluj, napoca, cj, romania, utcluj, UT, universitatea, tehnica, dance, dans popular, dansuri populare, traditii, folkloric, folk, festival, traditions, national customs, dancing, singing, music" />
	      <meta name="verify-v1" content="KWriKiOK2JNWAK44Dz2MFU0B/OoblWp+kGv+oZBHPE0=" />
        <title>' . $title . '</title>

        ' . get_includes() . '
    </head>
    <body>
    <!-- Loading Spinner -->
    <div id="spinner" class="spinner"></div>

    <div class="content-wrapper" style="display: none;">';
}

function get_footer()
{

  echo '
     </div> 
  
        ' . get_local_scripts() . '
        
       
    </body>
    </html>';
}

function get_custom_nav($navID)
{
  echo '
          <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left' . $navID . '"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red" />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right' . $navID . '"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red" />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      ';
}
