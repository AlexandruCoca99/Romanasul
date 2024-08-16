<?php $page = "home";
include 'functions.php';
include 'header.php';
get_header("Home");
?>

<body>

    <div class="homepage-video-wrapper">
        <video autoplay loop muted plays-inline>
            <source src="Videos/[Românii au talent] Românii au talent 2022： Ansamblul Românașul.mp4" type="video/mp4">
        </video>
    </div>
    <div class="home-content-wrapper">



        <div class="homepage-about-us-wrapper">
            <div class="about-us-short">
                <h1>ABOUT US</h1>
                <p>Founded in 1974, initiated by a group of students from the Polytechnic Institute of Cluj-Napoca, coordinated by prof. Teodor NILAS. Since 1979, we enjoy a fruitful collaboration with Prof. Dumitru POP, with the Language Faculty of the Cluj-Napoca Babes-Bolyai University.</p>
                <button><a href="whoweare.php">Learn more</a></button>
            </div>
            <img class="homepage-about-us-image" src="images\Poze-romanasul\2.Evenimente\1.Spectacole\4.-Zilele-prieteniei\Multumiri.jpg" alt="">
        </div>



        <div class="swiper-homepage-wrapper">
            <h1>Gallery</h1>
            <button><a href="images.php">Learn more</a></button>
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
                        <h3>France 2022</h3>
                    </div>
                    <!-- <p>France text</p> -->
                </div>
                <div class="grid-item">
                    <img src="images\Poze-romanasul\1.Turnee/Finlanda-2022/Afis.jpg" alt="Morocco">
                    <div class="header-container tours-homepage finland">
                        <h3>Finland 2021</h3>
                    </div>
                    <!-- <p>Morocco text</p> -->
                </div>
            </div>
            <div class="tours-short-content">
                <h1>Tours abroad</h1>
                <p>Our ensemble has had the honor of participating in prestigious tours around the world, including in Canada, Dubai, Morocco, and Finland. Since 1979, we have received the title of Laureate in every edition of the student's folkloric festivals that we have taken part in, and of important cultural meanings in Europe, North America, Africa, and Asia. Over the years, we have won 36 First Prizes, 12 Second Prizes, 2 Third Prizes, 3 Gold Medals, 2 Silver Medals, and 1 Bronze Medal, along with numerous Special Prizes, Honorary Plaquettes and Diplomas, Excellence Diplomas, and Merit Diplomas.</p>
                <a href="tours.php" class="explore-button">Explore All →</a>
            </div>
        </div>
        <div class="repertoriu-container">
            <div class="fixed-background-image-container">
                <!-- <div class="overlay"></div> -->
                <h2>În repertoriul ansamblului se regăsesc dansuri populare din Transilvania, Moldova, Oltenia, Muntenia, Banat, Dobrogea</h2>
                <a href="repertoriu.php" class="explore-button">Explore All →</a>
            </div>
        </div>


        <div class="countdown-container-background">
            <div class="countdown-container">
                <h1>COUNTDOWN TO</h1>
                <h2>ROMANASUL'S 50 YEAR ANIVERSARY</h2>
                <div class="countdown">
                    <div class="countdown-element">
                        <span id="days"></span>
                        <p>Days</p>
                    </div>
                    <div class="countdown-element">
                        <span id="hours"></span>
                        <p>Hours</p>
                    </div>
                    <div class="countdown-element">
                        <span id="minutes"></span>
                        <p>Minutes</p>
                    </div>
                    <div class="countdown-element">
                        <span id="seconds"></span>
                        <p>Seconds</p>
                    </div>
                </div>
            </div>
            <script src="app.js"></script>
        </div>

        <div class="homepage-reviews-wrapper">
            <h2 class="section-title">
                Customer's <span class="highlight">Review</span>
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
</body>