<?php $page = "whoweare"; 
 include 'functions.php';
get_header("Who we are");
include 'header.php';
?>

        <div class="hero-wrapper" style = "">
            <img class="whoweare-bg"  src="images/gallery/PozeRemastered/Fundal-who-we-are.jpg" />
        </div>

<section>

  <p class="title">
    <?php echo _("Mission:") ?>
  </p>
  <span>
    <?php echo _("To disseminate and bring Romanian folklore on stage, to cultivate among students the taste for beauty and the passion for art.") ?>
  </span>

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Short history:") ?>
  </p>
  <span>
    <?php echo _("Founded in 1974, initiated by a group of students from the Polytechnic Institute of Cluj-Napoca, coordinated by prof. Teodor NILAS. Since 1979, we enjoy a fruitful collaboration with Prof. Dumitru POP, with the Language Faculty of the Cluj-Napoca Babes-Bolyai University. We have developed, attained maturity and achieved consecration in student's contests and festivals 'Primavara Studenteasca', 'Festivalul artei si creatiei studentesti', 'Festivalul National Studentesc de Folclor', in shows and tours both in our country and abroad. In 1984, we have starred in a movie, 'O ceata de calusari din Campia Transilvaniei', in 35mm, of certified artistic and documentary value. In 1994 and in 2000, we brought two monographies to print, by Prof. Teodor NILAS. We have made recordings at National Radio and TV stations, and we have recorded a CD.") ?>
  </span>

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Members:") ?>
  </p>
  <span>
    <?php echo _("Students of the Technical University and other Universities of Cluj-Napoca: each year, more than 80 students participate in our activities. Dancers, singers and musicians. Conductors, choreographers, stage directors, referents, artistic counselors.") ?>
  </span>

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Choreographers:") ?>
  </p>
  <span>
    <ul type="circle">
      <li>
        1. Bacsai Olga (1974 - 1975)
      </li>
      <li>
        2. Onut Alexandru (1975 - 1976)
      </li>
      <li>
        3. Miclaus Octavian (1976 - 1978)
      </li>
      <li>
        4. Prof.Florin Ciobanu (1979 - 1994)
      </li>
      <li>
        5. Ing.Viorel Roman (1994-
        <?php echo _("now") ?>)
      </li>
    </ul>
  </span>

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Conductors:") ?>
  </p>
  <span>1. Prof.Paul Stoica (1974 - 1975)<br />
    2. Iuliu Hoca (1975 - 1976)<br />
    3. Romică Râmbu (1975 - 1976)<br />
    4. Ştefan Lustig (1976 - 1982)<br />
    5. Prof.Ioan Crişan (1982 - 1988)<br />
    6. Prof.Iulian Raţiu (1988 - 1990)<br />
    7. Prof.Ioan Morar (1990 - 1991)<br />
    8. Prof.Titus Beşa-Fluieraş (1991 - 2001)<br />
    9. Traian Covrig<br />
    10. Ioan Moloca (2001 - 2004)<br />
    11. Marius Moldovan (2004 - 2009) <br />
    12. Vasile Moldova(2009 - 2012) <br />
    13. Hatfaludi Alexandru (2013 -
    <?php echo _("now") ?>)
  </span>

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Cultural Attaches:") ?>
  </p>

  <span class="cultural-attaches-array">
  <?php
  $CulturalAttaches = ["Prof.Ioan Bârsan (1974 - 1981)", "Prof.Mîndru Alexandru (1981 - 2003)", "Prof.Victor Bercea (1982 - 1989; 2002 - " . _("now") . ")", "Ing.Marius Moldovan (2004 - " . _("now") . ")", "Anghel Mirela (2003 - " . _("now") . ")"];

  foreach ($CulturalAttaches as $key => $element) {
    echo '<p class="cultural-attaches-item">' . ($key + 1) . '. ' . $element . '</p>';
  }
  ?>
</span>

  <!-- <span>1. Prof.Ioan Bârsan (1974 - 1981)<br />
    2. Prof.Mîndru Alexandru (1981 - 2003)<br />
    3. Prof.Victor Bercea (1982 - 1989; 2002 -
    <?php echo _("now") ?>)<br />
    4. Ing.Marius Moldovan (2004 -
    <?php echo _("now") ?>)<br />
    5. Anghel Mirela (2003 -
    <?php echo _("now") ?>)
  </span> -->

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Singers:") ?>
  </p>
  <span class="solisti-array">
    <?php
    $solisti = ["Mariana Chiorean", " Ioan Dragoş", "Ioan Fechete","Ionuţ Fulea","Marius Fulea","Georgeta Fârţală", " Adriana Irimieş", "Felicia Lupu","Dorina Pentelescu","Ioan Sîncu","Crina Varga", " Rozalia Iuga", "Dorina Grad","Maria Mariş","Simona Baciu","Anda Conţiş", " Mircea Sime", "Florin Bota","Silviu Adrian Popa","Irinel Popa","Mirela Suciu","Camelia Lupaş","Claudiu Ciotleuş"];

    foreach ($solisti as $key => $element) {
      echo '<p class="solisti-item">' . ($key + 1) . '. ' . $element . '</p>';
    }

    ?>
    <!-- <p class="solist">1. Mariana Chiorean</p><br />
    2. Ioan Dragoş<br />
    3. Ioan Fechete<br />
    4. Ionuţ Fulea<br />
    5. Marius Fulea<br />
    6. Georgeta Fârţală<br />
    7. Alina Ianchiş<br />
    8. Adriana Irimieş<br />
    9. Felicia Lupu<br />
    10. Dorina Pentelescu<br />
    11. Ioan Sîncu<br />
    12. Crina Varga<br />
    13. Rozalia Iuga<br />
    14. Dorina Grad<br />
    15. Maria Mariş<br />
    16. Simona Baciu<br />
    17. Anda Conţiş<br />
    18. Mircea Sime<br />
    19. Florin Bota<br />
    20. Silviu Adrian Popa<br />
    21. Irinel Popa<br />
    22. Mirela Suciu<br />
    23. Camelia Lupaş<br />
    24. Claudiu Ciotleuş</p> -->
  </span>
  <p class="a">
    <?php echo _("THE STAR OF THE SINGER GROUP, AND ARTISTIC COUNSELOR OF THE") ?> &quot;Românaşul&quot; : IONUŢ
    FULEA
  </p>

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Collaborating singers:") ?>
  </p>
  <span>
    1. Mia Dan<br />
    2. Dumitru Sopon<br />
    3. Maria Marcu<br />
    4. Sava Negrean Brudaşcu<br />
    5. Veta Biriş<br />
    6. Nicolae Furdui Iancu<br />
    7. Ion Pojar<br />
    8. Maria Lobont<br />
    9. Angela Nistor<br />
    10 .Mariana Morcan<br />
    11 .Maria Dan Golban<br />
    12. Marius Ciprian Pop<br />
    13. Adriana Hagău<br />
    14. Aurel Ciceoan<br />
    15. Maria Dan Golban</span>

  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Collaborating musicians:") ?>
  </p>
  <span>1. Dumitru Fărcaş<br />
    2. Gheorghe Zamfir<br />
    3. Gheorghe Palcu<br />
    4. Ioan Berci<br />
    5. Dan Gâdea<br />
    6. Constantin Istici<br />
    7. Mircea Câmpeanu
  </span>


  <p>&nbsp;</p>
  <p class="title">
    <?php echo _("Show hosts:") ?>
  </p>
  <span>1. Vania Atudorei<br />
    2. Victor Bercea
    </p>
  </span>
</section>

<?php

get_footer();
?>