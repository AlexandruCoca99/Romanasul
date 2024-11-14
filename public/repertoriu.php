<?php $page = "repertoriu";
include 'functions.php';
get_header("Ansamblul folcloric Romanașul");
include 'header.php';
?>
<?php
// Check if we're NOT on the page where the script should be excluded
if ($_SERVER['REQUEST_URI'] !== '/repertoriu.php') {
  echo '<script src="https://cdn.amcharts.com/lib/4/core.js"></script>';
}
?>



<body>

  <div class="repertoriu">
    <div class="hero-wrapper">
      <img class="repertoriu-bg" src="images/Poze-romanasul/4.Galerie/2010-prezent/Colaj 4.jpg" alt="Background Image">
      <h1 class="hero-title">Repertoriu</h1>
    </div>
    <div class="background"></div>

    <div class="container-repertoriu">

      <div class="dans " id="banat">
        <div class="dance-yt-video-container-banat hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/CUcJ6SjzesM?si=QqO2ntbIHc4mhBSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>BANAT</h2>
        </div>
      </div>

      <div class="dans " id="maramures">
        <div class="dance-yt-video-container-maramures hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/X3pjy1rcb9I" title="Ansamblul Folcloric Romanasul - Dans din Maramures" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>MARAMURES</h2>
        </div>
      </div>

      <div class="dans" id="nasaud">
        <div class="dance-yt-video-container-nasaud hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/BwPlQ0nch0w" title="Ansamblul Folcloric Romanasul - Cantec si dans din Nasaud" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>NASAUD</h2>
        </div>
      </div>
      <div class="dans" id="moldova">
        <div class="dance-yt-video-container-moldova hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/D2nR31-v3Mw" title="Ansamblul Folcloric Romanasul - Cantec si dans din Moldova" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>MOLDOVA</h2>
        </div>
      </div>
      <div class="dans" id="campia-transilvaniei">
        <div class="dance-yt-video-container-campia-transilvaniei hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/HeNc5Fnq99I" title="Ansamblul Romanasul - Dans din Transilvania" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name" style="transform: translateY(20%);">
          <h2>CAMPIA <br> TRANSILVANIEI</h2>
        </div>
      </div>
      <div class="dans" id="fagaras">
        <div class="dance-yt-video-container-fagaras hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/CkVh8z6ijUc" title="Ansamblul Folcloric Romanasul - Dans din Fagaras" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>FAGARAS</h2>
        </div>
      </div>
      <div class="dans" id="codru">
        <div class="dance-yt-video-container-codru hidden">
          <img src="images/backgroundTurnee.png" alt="">
        </div>
        <div class="dance-name">
          <h2>CODRU</h2>
        </div>
      </div>
      <div class="dans" id="calus">
        <div class="dance-yt-video-container-calus hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/Ag81FgRqi_o" title="Ansamblul Folcloric Romanasul - Calus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>CALUS</h2>
        </div>
      </div>
      <div class="dans" id="fecioresc">
        <div class="dance-yt-video-container-fecioresc hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/bkeTImkpfKo?list=PL8-8E_OPpSPK11gh2B1GYn9qBY2YJL_tN" title="ANSAMBLUL FOLCLORIC ROMANASUL" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>FECIORESC</h2>
        </div>
      </div>
      <div class="dans" id="crihalma">
        <div class="dance-yt-video-container-crihalma hidden">
          <iframe class="dance-yt-video" src="https://www.youtube.com/embed/4H_VaIPmrRM" title="Ansamblul Folcloric Romanasul - Crihalma" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="dance-name">
          <h2>CRIHALMA</h2>
        </div>
      </div>
      <div class="dans" id="oas">
        <div class="dance-yt-video-container-oas hidden">
          <img src="images/backgroundTurnee.png" alt="">
        </div>
        <div class="dance-name">
          <h2>OAS</h2>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'footer.php';
  get_footer(); ?>
</body>