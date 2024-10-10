<?php $page = "home";
include 'functions.php';
get_header("Home");
include 'header.php';
?>


<!-- Loading Spinner -->
<!-- <div id="spinner" class="spinner"></div>
    <div class="content-wrapper" style="display: none;"> -->
<div class="homepage-video-wrapper">
    <video autoplay loop muted plays-inline>
        <source src="Videos/[Românii au talent] Românii au talent 2022： Ansamblul Românașul.mp4" type="video/mp4">
    </video>
</div>
<div class="home-content-wrapper">



    <div class="homepage-about-us-wrapper">
        <div class="about-us-short">
            <h1>DESPRE NOI</h1>
            <p>Ansamblul folcloric studenţesc “Românaşul” a luat fiinţă în primăvara anului 1974 în cadrul Clubului Cultural Studenţesc al Universităţii Tehnice din Cluj-Napoca. Iniţiat de un grup de studenţi (Ioan Dragoş - solist vocal, Octavian Corcheş - solist instrumentist şi dansatorii: Alexa Sînă, Petru Nistor, Vasile Titan, Nicolae Botiza, Alexandru Ortan, Andrei Chima, Susana Neamţu, Aurora Bucur, Cristina Mureşan, Maria Dit şi Florica Bădilă) coordonat de profesorul Teodor NILAŞ.</p>
            <button><a href="whoweare.php">Mai multe →</a></button>
        </div>
        <img class="homepage-about-us-image" src="images\Poze-romanasul\2.Evenimente\1.Spectacole\4.-Zilele-prieteniei\Multumiri.jpg" alt="">
    </div>



    <div class="swiper-homepage-wrapper">
        <h1><a href="images.php">GALERIE</a></h1>
        <div class="swiper-homepage">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <figure>
                        <img src="images/Baieti.jpg" alt="afis" />
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
            </div>
        </div>
        <!-- end swiper-wrapper -->
        <!-- end swiper -->

    </div>

    <div class="homepage-tours-wrapper">

        <div class="tours-grid-container">
            <div class="grid-item">
                <img src="images\Poze-romanasul\1.Turnee\Canada-2023\afis Canada.jpg" alt="Canada">
                <div class="header-container tours-homepage">
                    <h3>Canada 2023</h3>
                </div>
                <!-- <p>Text Canada</p> -->
            </div>
            <div class="grid-item">
                <img src="images\Poze-romanasul\1.Turnee\Dubai\3.2. 2023\Afis Dubai 2023.jpg" alt="Dubai">
                <div class="header-container tours-homepage">
                    <h3>Dubai 2023</h3>
                </div>
                <!-- <p>Dubai text</p> -->
            </div>
            <div class="grid-item">
                <img src="images\Poze-romanasul\1.Turnee\Franta-2021\Afis.jpg" alt="France">
                <div class="header-container tours-homepage">
                    <h3>Franța 2022</h3>
                </div>
                <!-- <p>France text</p> -->
            </div>
            <div class="grid-item">
                <img src="images\Poze-romanasul\1.Turnee/Finlanda-2022/Afis.jpg" alt="Morocco">
                <div class="header-container tours-homepage finland">
                    <h3>Finlanda 2021</h3>
                </div>
                <!-- <p>Morocco text</p> -->
            </div>
        </div>
        <div class="tours-short-content">
            <h1>TURNEE</h1>
            <p>Ansamblul nostru a avut onoarea de a participa la turnee prestigioase în întreaga lume, inclusiv în Canada, Dubai, Maroc și Finlanda. Din 1979, am primit titlul de Laureat la fiecare ediție a festivalurilor folclorice studențești la care am participat, precum și la evenimente culturale importante din Europa, America de Nord, Africa și Asia. De-a lungul anilor, am câștigat 36 de Premii I, 12 Premii II, 2 Premii III, 3 Medalii de Aur, 2 Medalii de Argint și 1 Medalie de Bronz, alături de numeroase Premii Speciale, Plachete și Diplome de Onoare, Diplome de Excelență și Diplome de Merit.</p>
            <button><a href="tours.php" class="explore-button">Mai multe →</a></button>
        </div>
    </div>
    <div class="repertoriu-container">
        <div class="fixed-background-image-container">
            <!-- <div class="overlay"></div> -->
            <h2>În repertoriul ansamblului se regăsesc coregrafii de dans popular din Campia Transilvaniei, Moldova, Oltenia, Banat, Nasaud, Maramures, Bihor</h2>
            <button><a href="repertoriu.php" class="explore-button">Mai multe →</a></button>
        </div>
    </div>


    <div class="countdown-container-background">
        <div class="countdown-container">
            <h1>TIMP RĂMAS</h1>
            <h2>PÂNA LA ANIVERSAREA DE 50 DE ANI A ROMÂNAȘULUI</h2>
            <div class="countdown">
                <div class="countdown-element">
                    <span id="days"></span>
                    <p>Zile</p>
                </div>
                <div class="countdown-element">
                    <span id="hours"></span>
                    <p>Ore</p>
                </div>
                <div class="countdown-element">
                    <span id="minutes"></span>
                    <p>Minute</p>
                </div>
                <div class="countdown-element">
                    <span id="seconds"></span>
                    <p>Secunde</p>
                </div>
            </div>
        </div>

    </div>

    <div class="homepage-reviews-wrapper">
        <h2 class="section-title">
            <span class="highlight"><a href="reviews.view.php">Recenzii</a></span>
        </h2>
        <div class="homepage-reviews-container">
            <div class="review-card">
                <img src="images/Eugen-tanar.png" alt="Customer Photo" class="customer-photo">
                <p>STRIGA!</p>
                <h3>Nicoara Eugen</h3>
                <div class="rating">
                    <span>&#9733;&#9734;&#9734;&#9734;&#9734;</span>
                </div>
            </div>
            <div class="review-card">
                <img src="images/Rares-tanar.png" alt="Customer Photo" class="customer-photo">
                <p>Ati adus tuica?</p>
                <h3>Marginean Rares</h3>
                <div class="rating">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                </div>
            </div>
            <div class="review-card">
                <img src="images/Nenea-Luci-tanar.png" alt="Customer Photo" class="customer-photo">
                <p>EUGEN!<br>COLAJUL!<br>tanganangangang
                </p>
                <h3>Nenea Luci</h3>
                <div class="rating">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>
            <div class="review-card">
                <img src="images/Hatfa-piranda.png" alt="Customer Photo" class="customer-photo">
                <p>No servus!</p>
                <h3>Hatfa Alexandru</h3>
                <div class="rating">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="homeSlogan">
            <div>
                <p><?php echo _("Mankind will find itself again only when it will understand the great lesson of folklore, and will acquire the profound meaning of its splendid unity in folk culture.") ?> <br>
                    Prof.univ.dr. Dumitru POP</p>
            </div>
        </div> -->

</div>

<?php
include 'footer.php';
get_footer();
?>
<!-- </div> -->