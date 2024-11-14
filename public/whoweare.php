<?php $page = "whoweare";
include 'functions.php';
get_header("Ansamblul folcloric Romanașul");
include 'header.php';
?>

<body>
    <div class="who-we-are-wrapper">
        <div class="hero-wrapper">
            <img class="whoweare-bg" src="images/gallery/PozeRemastered/Fundal-who-we-are2.jpg" alt="Background Image">
            <h1 class="hero-title">Cine suntem?</h1>
        </div>

        <div class="who-we-are-container">

            <div class="mission-wrapper">
                <h2 class="title">Misiune:</h2>
                <p>Pentru a răspândi și a aduce pe scenă folclorul românesc, pentru a cultiva în rândul studenților gustul pentru frumos și pasiunea pentru artă.</p>
            </div>
            <div class="history-content-wrapper">
                <div class="short-history-wrapper">
                    <h2 class="title">Scurt Istoric:</h2>
                    <p>
                        Fondat în 1974, la inițiativa unui grup de studenți de la Institutul Politehnic din Cluj-Napoca, coordonat de prof. Teodor NILAS. Din 1979, ne bucurăm de o colaborare fructuoasă cu prof. Dumitru POP, de la Facultatea de Litere a Universității Babeș-Bolyai din Cluj-Napoca. Ne-am dezvoltat, am atins maturitatea și am obținut consacrarea în concursurile și festivalurile studențești „Primăvara Studențească”, „Festivalul Artei și Creației Studențești”, „Festivalul Național Studențesc de Folclor”, în spectacole și turnee atât în țară, cât și în străinătate.</span>
                </div>

                <div class="short-history-images-container">
                    <img src="images/gallery/pozeVechi/1978_nasaud.JPG" alt="Nasaud-1978" class="photo-1">
                    <img src="images/gallery/pozeVechi/1978_ceterasi.JPG" alt="Ceterasi-1978" class="photo-2">
                </div>
            </div>

            <div class="members-presentation">
                <!-- <h2 class="title">Membri:</h2> -->
                <!-- <p>Students of the Technical University and other Universities of Cluj-Napoca: each year, more than 80
                    students participate in our activities. Dancers, singers and musicians. Conductors, choreographers,
                    stage directors, referents, artistic counselors.</span> -->
            </div>
            <div class="members-container">
                <!-- <p>&nbsp;</p> -->
                <div class="members-list ">
                    <div class="member-content choreographers-list">
                        <h2 class="title">Coregrafi:</h2>
                        <ul type="circle">
                            <li>1. Ing. Nicoara Eugen (2016-prezent)</li>
                            <li>2. Ing.Viorel Roman (1994-2016)</li>
                            <li>3. Prof.Florin Ciobanu (1979 - 1994)</li>
                            <li>4. Miclaus Octavian (1976 - 1978)</li>
                            <li>5. Onut Alexandru (1975 - 1976)</li>
                            <li>6. Bacsai Olga (1974 - 1975)</li>

                        </ul>
                    </div>
                    <div class="swiper-members-holder ">
                        <div class="swiper-choreographers" id="Choreographers">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- <figure> -->
                                    <img src="images\gallery\Membri\Coregrafi\florin-ciobanu.jpg" alt="afis" />
                                    <!-- </figure> -->
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <!-- <figure> -->
                                    <img src="images/gallery/Membri/Coregrafi/RV.jpg" />
                                    <!-- </figure> -->
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <!-- <figure> -->
                                    <img src="images/gallery/Membri/Coregrafi/Eugen.png" />
                                    <!-- </figure> -->
                                </div>
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                            <div class="choreographers-pagination"></div>
                            <!-- end swiper -->
                        </div>
                        <?php get_custom_nav(null) ?>
                        <!-- end swiper-custom-nav -->

                    </div>
                </div>
                <p>&nbsp;</p>
                <div class=" members-list" style="transform: translateX(50px);">
                    <div class="member-content">
                        <h2 class="title">Dirijori:</h2>
                        <ul type="circle">
                            <li>1.Hatfa Alexandru (2013-prezent)</li>
                            <li>2.Vasile Moldovan (2009 - 2012)</li>
                            <li>3.Marius Moldovan (2004 - 2009)</li>
                            <li>4.Ioan Moloca (2001 - 2004)</li>
                            <li>5.Traian Covrig</li>
                            <li>Prof. Titus Beşa-Fluieraş (1991 - 2001)</li>
                            <div id="more-conductors" style="height: 0;">
                                <li>6.Prof. Ioan Morar (1990 - 1991)</li>
                                <li>7.Prof. Iulian Raţiu (1988 - 1990)</li>
                                <li>8.Prof. Ioan Crişan (1982 - 1988)</li>
                                <li>9.Ştefan Lustig (1976 - 1982)</li>
                                <li>10.Romică Râmbu (1975 - 1976)</li>
                                <li>11.Iuliu Hoca (1975 - 1976)</li>
                                <li>12.Prof. Paul Stoica (1974 - 1975)</li>
                            </div>
                        </ul>
                        <button id="read-more-conductors" onclick="showMoreConductors()">Mai mult</button>
                    </div>
                    <div class="swiper-members-holder">
                        <div class="swiper-conductors" id="Conductors">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/Poze-romanasul/2.Evenimente/1.Spectacole/4.-Zilele-prieteniei/Orchestra spectacol 2.jpg" alt="Alex Hatfa" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/backgroundTurnee.png" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <!-- <div class="swiper-slide"> -->
                                <!-- <figure> -->
                                <!-- <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Dans de Codru.jpg" /> -->
                                <!-- </figure> -->
                                <!-- </div> -->
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                            <div class="conductors-pagination"></div>
                            <!-- end swiper -->
                        </div>
                        <?php get_custom_nav("-2") ?>
                        <!-- end swiper-custom-nav -->
                    </div>
                </div>
                <div class="members-list " style="transform: translateX(35px);">
                    <div class="member-content">
                        <h2 class="title">Directori artistici</h2>
                        <ul>
                            <li>1. Lucian Revnic (2013 - prezent)</li>
                            <li>2. Ing. Marius Moldovan (2004 - 2013)</li>
                            <li>3. Anghel Mirela (2003 - 2004)</li>
                            <li>4. Prof. Victor Bercea (1982 - 1989; 2002 - 2003)</li>
                            <li>5. Prof. Mîndru Alexandru (1981 - 2003)</li>
                            <li>6. Prof. Ioan Bârsan (1974 - 1981)</li>

                        </ul>
                    </div>
                    <div class="swiper-members-holder">
                        <div class="swiper-cultural-attaches" id="Cultural Attaches:">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/gallery/Membri/Directori/Nenea Luci.png" alt="afis" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/backgroundTurnee.png" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <!-- <div class="swiper-slide">
                                    <figure>
                                        <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Dans de Codru.jpg" />
                                    </figure>
                                </div> -->
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                            <div class="cultural-attaches-pagination"></div>
                            <!-- end swiper -->
                        </div>
                        <?php get_custom_nav("-3") ?>
                        <!-- end swiper-custom-nav -->
                    </div>
                </div>
                <div class="members-list ">
                    <div class="member-content">
                        <h2 class="title">Solisti:</h2>
                        <table>
                            <tr>
                                <td>1. Mariana Chiorean</td>
                                <td>2. Ioan Dragoş</td>
                                <td>3. Ioan Fechete</td>
                            </tr>
                            <tr>
                                <td>4. Ionuţ Fulea</td>
                                <td>5. Marius Fulea</td>
                                <td>6. Georgeta Fârţală</td>
                            </tr>
                            <tr>
                                <td>7. Adriana Irimieş</td>
                                <td>8. Felicia Lupu</td>
                                <td>9. Dorina Pentelescu</td>
                            </tr>
                            <tr>
                                <td>10. Ioan Sîncu</td>
                                <td>11. Crina Varga</td>
                                <td>12. Rozalia Iuga</td>
                            </tr>
                            <tr>
                                <td>13. Dorina Grad</td>
                                <td>14. Maria Mariş</td>
                                <td>15. Simona Baciu</td>
                            </tr>
                            <tr>
                                <td>16. Anda Conţiş</td>
                                <td>17. Mircea Sime</td>
                                <td>18. Florin Bota</td>
                            </tr>
                            <tr>
                                <td>19. Silviu Adrian Popa</td>
                                <td>20. Irinel Popa</td>
                                <td>21. Mirela Suciu</td>
                            </tr>
                            <tr>
                                <td>22. Camelia Lupaş</td>
                                <td>23. Claudiu Ciotleuş</td>
                                <td>24. Ioana Bucuria</td>
                            </tr>
                        </table>
                        <!-- <button id="read-more-singers" onclick="showMoreSingers()">Mai mult</button> -->
                    </div>

                </div>
                <!-- end swiper-custom-nav -->


                <div class="members-list" id="Collaborating-singers">
                    <div class="member-content">
                        <h2 class="title">Solisti colaboratori:</h2>
                        <table>
                            <tr>
                                <td>1. Sava Negrean Brudaşcu</td>
                                <td>2. Marius Ciprian Pop</td>
                            </tr>
                            <tr>
                                <td>3. Ionut Fulea</td>
                                <td>4. Mia Dan</td>
                            </tr>
                            <tr>
                                <td>5. Veta Biriş</td>
                                <td>6. Nicolae Furdui Iancu</td>
                            </tr>
                            <tr>
                                <td>7. Ion Pojar</td>
                                <td>8. Maria Lobont</td>
                            </tr>
                            <tr>
                                <td>9. Angela Nistor</td>
                                <td>10. Mariana Morcan</td>
                            </tr>
                            <tr>
                                <td>11. Maria Dan Golban</td>
                                <td>12. Dumitru Sopon</td>

                            </tr>
                            <tr>
                                <td>13. Adriana Hagău</td>
                                <td>14. Aurel Ciceoan</td>
                            </tr>
                            <tr>
                                <td>15. Maria Dan Golban</td>
                                <td>16. Maria Marcu</td>
                            </tr>
                        </table>

                    </div>
                    <div class="swiper-members-holder">
                        <div class="swiper-collaborating-singers" id="Collaborating singers">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/gallery/Membri/Artisti colaboratori/Comment SAVA.jpg" alt="afis" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/gallery/Membri/Artisti colaboratori/Marius Ciprian Pop.jpg" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/gallery/Membri/Artisti colaboratori/Ionut Fulea.jpg" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                            <div class="collaborating-singers-pagination"></div>
                            <!-- end swiper -->
                        </div>
                        <?php get_custom_nav("-5") ?>
                        <!-- end swiper-custom-nav -->
                    </div>
                </div>
                <div class="members-list ">
                    <div class="member-content">
                        <h2 class="title">Solisti instrumentisti <br> colaboratori:</h2>
                        <ul>
                            <li>1. Dumitru Fărcaş</li>
                            <li>2. Gheorghe Zamfir</li>
                            <li>3. Ioan Berci</li>
                            <li>4. Gheorghe Palcu</li>
                            <li>5. Dan Gâdea</li>
                            <li>6. Constantin Istici</li>
                            <li>7. Mircea Câmpeanu</li>
                        </ul>
                    </div>
                    <div class="swiper-members-holder">
                        <div class="swiper-collaborating-musicians" id="Collaborating musicians">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/gallery/Membri/Instrumentisti colaboratori/Dumitru Farcas.jpg" alt="afis" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/gallery/Membri/Instrumentisti colaboratori/Gheorghe Zamfir.jpg" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/gallery/Membri/Instrumentisti colaboratori/Ioan Berci.jpg" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                            <div class="collaborating-musicians-pagination"></div>
                            <!-- end swiper -->
                        </div>
                        <?php get_custom_nav("-6") ?>
                        <!-- end swiper-custom-nav -->
                    </div>
                </div>
                <div class="members-list ">
                    <div class="member-content">
                        <h2 class="title">Prezentatori de spectacole:</h2>
                        <ul>
                            <li>1. Vania Atudorei</li>
                            <li>2. Victor Bercea</li>
                            <li>3. Oana Camelia Bara</li>
                        </ul>
                    </div>
                    <div class="swiper-members-holder">
                        <div class="swiper-show-hosts" id="Show hosts">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/backgroundTurnee.png" alt=" afis" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/backgroundTurnee.png" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure>
                                        <img src="images/backgroundTurnee.png" />
                                    </figure>
                                </div>
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                            <div class="show-hosts-pagination"></div>
                            <!-- end swiper -->
                        </div>
                        <?php get_custom_nav("-7") ?>
                        <!-- end swiper-custom-nav -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    get_footer();
    ?>
</body>