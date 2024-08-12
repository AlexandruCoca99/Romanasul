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
            <button><a href="gallery.php">Learn more</a></button>
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

            <!-- <div class="swiper-custom-nav-left">
                <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z" fill="red" />
                </svg>
            </div>
            <div class="swiper-custom-nav-right">
                <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z" fill="red" />
                </svg>
            </div>
            end swiper-custom-nav -->

        </div>

        <div class="homepage-tours-wrapper">

            <div class="tours-grid-container">
                <div class="grid-item">
                    <img src="images\Poze-romanasul\1.Turnee\Canada-2023\afis Canada.jpg" alt="Canada">
                    <div class="header-container">
                        <h3>Canada 2023</h3>
                    </div>
                    <!-- <p>Text Canada</p> -->
                </div>
                <div class="grid-item">
                    <img src="images\Poze-romanasul\1.Turnee\Dubai\3.2. 2023\Afis Dubai 2023.jpg" alt="Dubai">
                    <div class="header-container">
                        <h3>Dubai 2023</h3>
                    </div>
                    <!-- <p>Dubai text</p> -->
                </div>
                <div class="grid-item">
                    <img src="images\Poze-romanasul\1.Turnee\Franta-2021\Afis.jpg" alt="France">
                    <div class="header-container">
                        <h3>France 2022</h3>
                    </div>
                    <p>France text</p>
                </div>
                <div class="grid-item">
                    <img src="images\Poze-romanasul\1.Turnee/Finlanda-2022/Afis.jpg" alt="Morocco">
                    <div class="header-container finland">
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

        <div class="fixed-background-image-container">
            <!-- <div class="overlay"></div> -->
            <h2>În repertoriul ansamblului se regăsesc dansuri populare din Transilvania, Moldova, Oltenia, Muntenia, Banat, Dobrogea</h2>
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
        <!-- <div class="homeSlogan">
            <div>
                <p><?php echo _("Mankind will find itself again only when it will understand the great lesson of folklore, and will acquire the profound meaning of its splendid unity in folk culture.") ?> <br>
                    Prof.univ.dr. Dumitru POP</p>
            </div>
        </div> -->

    </div>
    <?php
    get_footer();
    ?>
</body>