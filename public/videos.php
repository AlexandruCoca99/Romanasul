<?php $page = "videos";
include 'functions.php';
get_header("Videos");
include 'header.php';
?>

<?php
// echo '<center><iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PL6151E748F5BA2275&amp;hl=en_US" frameborder="1" allowfullscreen></iframe></center>';

$countries = [array('id' => 'CA-2022'), array('id' => 'ES-2022'),array('id' => 'AE-2019','AE-2023' )];
?>



<div id="chartdiv"></div>

<div class="background"></div>
<div class="right-side-pop-up"></div>

<!-- SLIDER -->
<!-- <header id="main-header"></header> -->

<section class="swiper-main hidden" id="">
  <a href="#" class="close-button"><img src="./images/close_icon.svg"/></a>
  <div class="container wide">

        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- CANADA SWIPER -->

    <div class="swiper hidden" id="CA-2023">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Canada-2023/afis Canada.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Canada-2023/Colaj.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Canada-2023/Dans de fete.jpeg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Canada-2023/Mall Dans de Moldova.jpg"
              alt="Mall Dans de Moldova"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Canada-2023/Maramures Baieti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Canada-2023/Saritura baieti colaj.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Canada-2023/Spectacol Mall.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Canada-2023/Ioana happy.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->

      <!-- //////////////////////////////////////////////////////////////// -->
      <!-- BARCELONA SWIPER -->

    <div class="swiper hidden" id="ES-2022">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Dans de Codru.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Dans din Nasaud.jpg"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Obicei Maramures masti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Orchestra Barcelona.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Parada Barcelona.jpg" />
          </figure>
        </div>

        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Reprezentanti Romanasul.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->

        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Romansul cu unul dintre organizatori +coregraf.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->

        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Sagrada Familia.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->

        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Sarba Moldova.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->

      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->

      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->

    <!-- //////////////////////////////////////////////////////////////// -->
      <!-- DUBAI 2019 SWIPER -->

      <div class="swiper hidden" id="AE-2019">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/Afis Dubai.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/Dubai 2019.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/"
              alt="Mall Dans de Moldova"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->

        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- DUBAI 2023 SWIPER -->

      <div class="swiper hidden" id="AE-2023">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Afis Dubai 2023.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Alaturi de Presedinte.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2013/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/"
              alt="Mall Dans de Moldova"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
    
        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- Morocco 2023 SWIPER -->

      <div class="swiper hidden" id="MA-2023">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Afis Tanger.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/afis Maroc Larache.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/afis Rabat.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Maroc2023/Colaj Larache.jpg"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Dans din Nasaud-Rabat.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/larache festival.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/PARADA 2.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Parada Tnager.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Poza Grup Larache.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Poza Medina Tanger.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Poze de grup cu sardinele.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Pregatirea sardinelor.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Sardine.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Traditia sardinelor.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Primarul din Tanger si organizatorul festivalului impreuna cu coregraful Romanasul.jpeg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Romanasul cu ambasadorul Romaniei din Maroc.png" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/show Tangier 2.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Spectacol final Tanger.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/spectacol gara.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Maroc2023/Workshop mozaic.png" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
    
        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- Portugal 2023 SWIPER -->

      <div class="swiper hidden" id="PT-2019">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Afis-Portugalia.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Baieti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Colaj.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Dans din Fagaras.jpg"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Hora.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Matosinhos show 2019.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Orchestra Portugalia.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Porto final turneu.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Poza de grup in civil.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Poza de grup.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Romanasii impreuna cu oficialitatile si organizatorul.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Schema smechera Fagaras.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
    
        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- FRANCE 2021 SWIPER -->

      <div class="swiper hidden" id="FR-2021">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Afis.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
    
        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- FINLAND 2022 SWIPER -->

      <div class="swiper hidden" id="FI-2022">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Afis.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Boju 1.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Colaj 2 fete.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Colaj.jpg"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Dans din Fagaras.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Fagaras 1.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Fetele din Romanasul.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Hai echipa.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Hora.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Nasaud 1.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Orchestra 1.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Parada.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Piruete.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Poza pe scari.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Workshop cu dans.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
    
        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- NETHERLANDS 2023 SWIPER -->

      <div class="swiper hidden" id="NL-2015">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Afis.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Baieti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Baieti 2.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Olanda-2015/Codru.jpg"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Crihalma fetelor.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Dans din Banat.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Dans din Bnata.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Fecioresc.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Nasaud.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Orchestra Olanda.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Parada.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Piruete.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Poza de grup.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Socacite.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Olanda-2015/Workshop.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
    
        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- BELGIUM 2023 SWIPER -->

      <div class="swiper hidden" id="BE-2016">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Afis-Belgia.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Alaturi de Presedinte.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2013/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/"
              alt="Mall Dans de Moldova"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
    
        <!-- //////////////////////////////////////////////////////////////// -->
      <!-- DUBAI 2023 SWIPER -->

      <div class="swiper hidden" id="AE-2023">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Afis Dubai 2023.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Alaturi de Presedinte.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2013/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/"
              alt="Mall Dans de Moldova"
            />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1.2019/" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <div class="swiper-custom-nav-left">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-left"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
            fill="red"
          />
        </svg>
      </div>
      <div class="swiper-custom-nav-right">
        <svg
          width="64"
          height="64"
          viewBox="0 0 64 64"
          id="nav-right"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
            fill="red"
          />
        </svg>
      </div>
      <!-- end swiper-custom-nav -->
      <div class="swiper-custom-pagination"></div>
    </div>
    <!-- end swiper -->
  </div>
  <!-- end container -->
</section>

<footer></footer>
<!-- 

<!-- END SLIDER -->
<?php
array_map(function ($country) {
    echo '<div id="' . $country['id'] . '" class="slider"></div>';
}, $countries);
    ?>

    
<?php get_footer(); ?> -->