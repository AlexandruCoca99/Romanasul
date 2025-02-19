<?php $page = "videos";
include 'functions.php';
get_header("Ansamblul folcloric Romanașul");
include 'header.php';
?>

<?php
// echo '<center><iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PL6151E748F5BA2275&amp;hl=en_US" frameborder="1" allowfullscreen></iframe></center>';

$countries = [array('id' => 'CA-2022'), array('id' => 'ES-2022'), array('id' => 'AE-2019', 'AE-2023')];
?>




<button id="toggleMap">Ascunde harta</button>


<div id="chartdiv"></div>

<div class="background"></div>
<div class="right-side-pop-up hidden"></div>

<div class="right-side-container ">
  <table>
    <caption>Turnee internaționale</caption>
    <tr>
      <th>An</th>
      <th>Țară</th>
      <th>Oraș/Orașe</th>
    </tr>
    <tr>
      <td data-cell="Year">2023</td>
      <td data-cell="Country"><strong>Canada<strong></td>
      <td data-cell="City">Winnipeg</td>
    </tr>
    <tr>
      <td data-cell="Year">2023</td>
      <td data-cell="Country"><strong>Maroc<strong></td>
      <td data-cell="City">Larache, Tangier, Rabat</td>
    </tr>
    <tr>
      <td data-cell="Year">2023</td>
      <td data-cell="Country"><strong>Dubai<strong></td>
      <td data-cell="City">Sharjah</td>
    </tr>
    <tr>
      <td data-cell="Year">2022</td>
      <td data-cell="Country"><strong>Spania<strong></td>
      <td data-cell="City">Calella</td>
    </tr>
    <tr>
      <td data-cell="Year">2021</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Marsilia</td>
    </tr>
    <tr>
      <td data-cell="Year">2019</td>
      <td data-cell="Country"><strong>Portugalia<strong></td>
      <td data-cell="City">Matosinhos</td>
    </tr>
    <tr>
      <td data-cell="Year">2019</td>
      <td data-cell="Country"><strong>Bosnia<strong></td>
      <td data-cell="City">Milici</td>
    </tr>
    <tr>
      <td data-cell="Year">2019</td>
      <td data-cell="Country"><strong>Dubai<strong></td>
      <td data-cell="City">Sharjah</td>
    </tr>
    <tr>
      <td data-cell="Year">2018</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Montignac</td>
    </tr>
    <tr>
      <td data-cell="Year">2017</td>
      <td data-cell="Country"><strong>Polonia<strong></td>
      <td data-cell="City">Wisla</td>
    </tr>
    <tr>
      <td data-cell="Year">2016</td>
      <td data-cell="Country"><strong>Belga<strong></td>
      <td data-cell="City">Edegem</td>
    </tr>
    <tr>
      <td data-cell="Year">2015</td>
      <td data-cell="Country"><strong>Olanda<strong></td>
      <td data-cell="City">Sivo</td>
    </tr>
    <tr>
      <td data-cell="Year">2014</td>
      <td data-cell="Country"><strong>Polonia<strong></td>
      <td data-cell="City">Katovice</td>
    </tr>
    <tr>
      <td data-cell="Year">2013</td>
      <td data-cell="Country"><strong>Polonia<strong></td>
      <td data-cell="City">Plock</td>
    </tr>
    <tr>
      <td data-cell="Year">2012</td>
      <td data-cell="Country"><strong>Russia<strong></td>
      <td data-cell="City">Moskova, Vladimir</td>
    </tr>
    <tr>
      <td data-cell="Year">2011</td>
      <td data-cell="Country"><strong>Macedonia<strong></td>
      <td data-cell="City">Ohrid</td>
    </tr>
    <tr>
      <td data-cell="Year">2010</td>
      <td data-cell="Country"><strong>Netherlands<strong></td>
      <td data-cell="City">Diepenheim</td>
    </tr>
    <tr>
      <td data-cell="Year">2009</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Argenton sur Creuse, Marcillat-en-Combrailles, Saint-Florent sur Cher, Paizay-le-Sec, Oradour-sur-Vayres</td>
    </tr>
    <tr>
      <td data-cell="Year">2008</td>
      <td data-cell="Country"><strong>Italia<strong></td>
      <td data-cell="City">Cunardo Varese</td>
    </tr>
    <tr>
      <td data-cell="Year">2008</td>
      <td data-cell="Country"><strong>Italia<strong></td>
      <td data-cell="City">Coredo Trentino</td>
    </tr>
    <tr>
      <td data-cell="Year">2007</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Nice</td>
    </tr>
    <tr>
      <td data-cell="Year">2007</td>
      <td data-cell="Country"><strong>Switzerland<strong></td>
      <td data-cell="City">Evolene</td>
    </tr>

    <tr>
      <td data-cell="Year">2006</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Suman, Volvic, Cellule, Gannat</td>
    </tr>
    <tr>
      <td data-cell="Year">2005</td>
      <td data-cell="Country"><strong>Italia<strong></td>
      <td data-cell="City">Parma</td>
    </tr>
    <tr>
      <td data-cell="Year">2005</td>
      <td data-cell="Country"><strong>Serbia - Montenegro<strong></td>
      <td data-cell="City">Loznica</td>
    </tr>
    <tr>
      <td data-cell="Year">2004</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Poitiers, Marseille, Gannat, Bourges</td>
    </tr>
    <tr>
      <td data-cell="Year">2003</td>
      <td data-cell="Country"><strong>Greece<strong></td>
      <td data-cell="City">Chalkida</td>
    </tr>
    <tr>
      <td data-cell="Year">2003</td>
      <td data-cell="Country"><strong>Turkey<strong></td>
      <td data-cell="City">Antakya</td>
    </tr>
    <tr>
      <td data-cell="Year">2002</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Bourgtheroulde, Bourg-Achard, Gannat, Vichy, Montmarault</td>
    </tr>
    <tr>
      <td data-cell="Year">2002</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Rouen</td>
    </tr>
    <tr>
      <td data-cell="Year">2002</td>
      <td data-cell="Country"><strong>Macedonia<strong></td>
      <td data-cell="City">Skopje</td>
    </tr>
    <tr>
      <td data-cell="Year">2001</td>
      <td data-cell="Country"><strong>Italia<strong></td>
      <td data-cell="City">Atina</td>
    </tr>
    <tr>
      <td data-cell="Year">2001</td>
      <td data-cell="Country"><strong>Turkey<strong></td>
      <td data-cell="City">Tasova</td>
    </tr>
    <tr>
      <td data-cell="Year">2000</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Montignac, Concarneau</td>
    </tr>
    <tr>
      <td data-cell="Year">1998</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Montignac</td>
    </tr>
    <tr>
      <td data-cell="Year">1997</td>
      <td data-cell="Country"><strong>Italia<strong></td>
      <td data-cell="City">Alatri</td>
    </tr>
    <tr>
      <td data-cell="Year">1995</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Lir&eacute;</td>
    </tr>
    <tr>
      <td data-cell="Year">1994</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Montignac</td>
    </tr>
    <tr>
      <td data-cell="Year">1993</td>
      <td data-cell="Country"><strong>South Africa<strong></td>
      <td data-cell="City">Johannesburg</td>
    </tr>
    <tr>
      <td data-cell="Year">1992</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Guegnon, Saint Di&eacute; des Vosges</td>
    </tr>
    <tr>
      <td data-cell="Year">1991</td>
      <td data-cell="Country"><strong>USA<strong></td>
      <td data-cell="City">Carolina de Nord</td>
    </tr>
    <tr>
      <td data-cell="Year">1991</td>
      <td data-cell="Country"><strong>Switzerland<strong></td>
      <td data-cell="City">Lausanne</td>
    </tr>
    <tr>
      <td data-cell="Year">1990</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Dijon, Montignac</td>
    </tr>
    <tr>
      <td data-cell="Year">1986</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Thiers, Puy en Vellay, Quimper, Baule</td>
    </tr>
    <tr>
      <td data-cell="Year">1985</td>
      <td data-cell="Country"><strong>Spain<strong></td>
      <td data-cell="City">Rohanda, Barcelona</td>
    </tr>
    <tr>
      <td data-cell="Year">1984</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Montignac, Mont-Blank(Herrault)</td>
    </tr>
    <tr>
      <td data-cell="Year">1984</td>
      <td data-cell="Country"><strong>Spain<strong></td>
      <td data-cell="City">Portugalete-Bilbao</td>
    </tr>
    <tr>
      <td data-cell="Year">1983</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Montignac</td>
    </tr>
    <tr>
      <td data-cell="Year">1983</td>
      <td data-cell="Country"><strong>Spain<strong></td>
      <td data-cell="City">Portugalete</td>
    </tr>
    <tr>
      <td data-cell="Year">1982</td>
      <td data-cell="Country"><strong>Norway<strong></td>
      <td data-cell="City">Oslo</td>
    </tr>
    <tr>
      <td data-cell="Year">1982</td>
      <td data-cell="Country"><strong>Switzerland<strong></td>
      <td data-cell="City">Lausanne</td>
    </tr>
    <tr>
      <td data-cell="Year">1981</td>
      <td data-cell="Country"><strong>Greece<strong></td>
      <td data-cell="City">Atena</td>
    </tr>
    <tr>
      <td data-cell="Year">1980</td>
      <td data-cell="Country"><strong>Switzerland<strong></td>
      <td data-cell="City">Lausanne</td>
    </tr>
    <tr>
      <td data-cell="Year">1980</td>
      <td data-cell="Country"><strong>Franța<strong></td>
      <td data-cell="City">Savoie, Haute Savoie</td>
    </tr>
  </table>
</div>

<!-- SLIDER -->
<!-- <header id="main-header"></header> -->

<section class="swiper-main hidden" id="">
  <a href="#" class="close-button"><img src="./images/close-red-icon.svg" /></a>
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
              alt="Mall Dans de Moldova" />
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
      <?php get_custom_nav(null) ?>

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
              src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Dans din Nasaud.jpg" />
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
      <?php get_custom_nav(null) ?>
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
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/Dubai desert 2019.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/Dubai Mall 2019.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/dubal hotel.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/Poza pe nisip.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/Poze spectacol +afis+ steag.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.1. 2019/Premii Dubai 2019.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>

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
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Colaj Bosnia.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Dans din Maramures.jpg"
              alt="Mall Dans de Moldova" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Fecioresc.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Poza cu ghizi.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Poza la turnuri.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Poza pe plaja.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Poza spectacol.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Romanasul la standul romanesc.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Dubai/3.2. 2023/Safari.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>

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
              src="images/Poze-romanasul/1.Turnee/Maroc2023/Colaj Larache.jpg" />
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
      <?php get_custom_nav(null) ?>

    </div>
    <!-- end swiper -->

    <!-- //////////////////////////////////////////////////////////////// -->
    <!-- Portugal 2019 SWIPER -->

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
              src="images/Poze-romanasul/1.Turnee/Portugalia-2019/Dans din Fagaras.jpg" />
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
      <?php get_custom_nav(null) ?>

    </div>
    <!-- end swiper -->

    <!-- //////////////////////////////////////////////////////////////// -->
    <!-- Portugalia 2024 SWIPER -->

    <div class="swiper hidden" id="PT-2024">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia 2024/afis portugalia.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia 2024/Colaj baieti.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia 2024/colaj baieti +fete.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia 2024/poza la mare.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Portugalia 2024/poza de grup la statuie.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>

      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>
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
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Colaj 2.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Colaj.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Franta-2021/Dans din Moldova.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Inceput dans din Moldova.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Lyubliana -autocar.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Marsilia 1.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/marsseille.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Orchestra +Dansatori -Poza de grup la repetitii.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/Orchestra Franta.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Franta-2021/poza chateau-gombert.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>

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
              src="images/Poze-romanasul/1.Turnee/Finlanda-2022/Colaj.jpg" />
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
      <?php get_custom_nav(null) ?>

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
              src="images/Poze-romanasul/1.Turnee/Olanda-2015/Codru.jpg" />
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
      <?php get_custom_nav(null) ?>

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
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Boju.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class=" swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Calus 2.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Belgia-2016/Calus 3.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Codru.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Colaj.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/crihalma.jpg" />
          </figure>
        </div>
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Dans din Banat fete+baieti.jpeg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Dans din Codru.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Dans din maramures traditie cu masti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Dans din Moldova.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Dans din Nasaud.jpeg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Dans in biserica.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Fecioresc Baieti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Masti 2.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Orchestra Belgia.jpeg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Poza de grup.jpeg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Premiere.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Romanasii cu alti dansatori.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Romanasul cu steagul.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Sakut.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Saritura Baieti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Sarituri Baieti.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Belgia-2016/Workshop.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>


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
              alt="Mall Dans de Moldova" />
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
      <?php get_custom_nav(null) ?>


    </div>
    <!-- end swiper -->

    <!-- //////////////////////////////////////////////////////////////// -->
    <!-- POLAND 2013 SWIPER -->

    <div class="swiper hidden" id="PL-2013">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia2013/Banat.JPG" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia2013/Crihalma.JPG" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia2013/Dans din Banat.JPG" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Polonia2013/Fagaras.JPG"
              alt="Dans Boju" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia2013/Fecioresc.JPG" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>


    </div>
    <!-- end swiper -->

    <!-- //////////////////////////////////////////////////////////////// -->
    <!-- Poland 2014 SWIPER -->

    <div class="swiper hidden" id="PL-2014">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Baieti.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Boju.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Colaj.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img
              src="images/Poze-romanasul/1.Turnee/Polonia-2014/Dans de baieti.jpg"
              alt="Mall Dans de Moldova" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Dans din Maramures.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Fecioresc.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Fete Maramures.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Obicei Maramures.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Poza cu dansatori din indonesia.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Poza de grup in civil.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Poza de grup.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Polonia-2014/Spectacol.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>


    </div>
    <!-- end swiper -->

    <!-- //////////////////////////////////////////////////////////////// -->
    <!-- RUSSIA 2012 SWIPER -->

    <div class="swiper hidden" id="RU-2012">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Rusia-2012/Dans din Nasaud.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Rusia-2012/Poza de grup.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Rusia-2012/Poza de grup 2.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->

      <?php get_custom_nav(null) ?>
    </div>
    <!-- end swiper -->


    <!-- //////////////////////////////////////////////////////////////// -->
    <!-- Albania SWIPER -->

    <div class="swiper hidden" id="AL-2024">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Afis.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Ariana si Andrei.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Colaj.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Inmanarea trofeului.jpg" alt="afis" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Parada.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Poza de grup cu coordonatorii.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Poza la statuie.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure>
            <img src="images/Poze-romanasul/1.Turnee/Albania 2024/Sergiu rade.jpg" />
          </figure>
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <?php get_custom_nav(null) ?>
    </div>


    <!-- end swiper -->

    <!-- end container -->
</section>


<footer></footer>


<!-- END SLIDER -->
<?php
array_map(function ($country) {
  echo '<div id="' . $country['id'] . '" class="slider"></div>';
}, $countries);
?>


<?php include 'footer.php';
get_footer(); ?>