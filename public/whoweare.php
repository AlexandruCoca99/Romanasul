<?php $page = "whoweare";
include 'functions.php';
get_header("Who we are");
include 'header.php';
?>

<body>

    <div class="hero-wrapper">
        <img class="whoweare-bg" src="images/gallery/PozeRemastered/Fundal-who-we-are2.jpg" alt="Background Image">
        <!-- <h1 class = "hero-title">Cine suntem?</h1> -->
    </div>

    <div class="who-we-are-container">

        <div class="mission-wrapper">
            <h2 class="title">Mission:</h2>
            <p>To disseminate and bring Romanian folklore on stage, to cultivate among students the taste for beauty and
                the passion for art.</p>
        </div>
        <div class="history-content-wrapper">
            <div class="short-history-wrapper">
                <h2 class="title">Short history:</h2>
                <p>Founded in 1974, initiated by a group of students from the Polytechnic Institute of Cluj-Napoca,
                    coordinated by prof. Teodor NILAS. Since 1979, we enjoy a fruitful collaboration with Prof. Dumitru
                    POP, with the Language Faculty of the Cluj-Napoca Babes-Bolyai University. We have developed,
                    attained maturity and achieved consecration in student's contests and festivals 'Primavara
                    Studenteasca', 'Festivalul artei si creatiei studentesti', 'Festivalul National Studentesc de
                    Folclor', in shows and tours both in our country and abroad. In 1984, we have starred in a movie, 'O
                    ceata de calusari din Campia Transilvaniei', in 35mm, of certified artistic and documentary value.
                    In 1994 and in 2000, we brought two monographies to print, by Prof. Teodor NILAS. We have made
                    recordings at National Radio and TV stations, and we have recorded a CD.</span>
            </div>

            <div class="short-history-images-container">
                <img src="images/gallery/pozeVechi/1978_nasaud.JPG" alt="Nasaud-1978" class="photo-1">
                <img src="images/gallery/pozeVechi/1978_ceterasi.JPG" alt="Ceterasi-1978" class="photo-2">
            </div>
        </div>
        
            <div class="members-presentation">
                <h2 class="title">Members:</h2>
                <p>Students of the Technical University and other Universities of Cluj-Napoca: each year, more than 80
                    students participate in our activities. Dancers, singers and musicians. Conductors, choreographers,
                    stage directors, referents, artistic counselors.</span>
            </div>
            <div class="members-container">
            <!-- <p>&nbsp;</p> -->
            <div class="flex-direction-row justify-content-space-around members-list ">
                <div class="member-content">
                    <h2 class="title">Choreographers:</h2>
                    <ul type="circle">
                        <li>1. Bacsai Olga (1974 - 1975)</li>
                        <li>2. Onut Alexandru (1975 - 1976)</li>
                        <li>3. Miclaus Octavian (1976 - 1978)</li>
                        <li>4. Prof.Florin Ciobanu (1979 - 1994)</li>
                        <li>5. Ing.Viorel Roman (1994-2016)</li>
                        <li>6. Ing. Nicoara Eugen (2016-now)</li>
                    </ul>
                </div>
                <div class="swiper-members-holder">
                    <div class="swiper-choreographers" id="Choreographers">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images\gallery\Membri\Coregrafi\florin-ciobanu.jpg"
                                        alt="afis" />
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img
                                        src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
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
                        <!-- end swiper-wrapper -->
                        <!-- end swiper -->
                    </div>
                    <div class="swiper-custom-nav-left">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
                                fill="red" />
                        </svg>
                    </div>
                    <div class="swiper-custom-nav-right">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
                                fill="red" />
                        </svg>
                    </div>
                    <!-- end swiper-custom-nav -->
                </div>

            </div>
            <p>&nbsp;</p>
            <div class="flex-direction-row justify-content-space-around members-list ">
                <div class="member-content">
                    <h2 class="title">Conductors:</h2>
                    <ul type="circle">
                        <li>1. Prof. Paul Stoica (1974 - 1975)</li>
                        <li>2. Iuliu Hoca (1975 - 1976)</li>
                        <li>3. Romică Râmbu (1975 - 1976)</li>
                        <li>4. Ştefan Lustig (1976 - 1982)</li>
                        <li>5. Prof. Ioan Crişan (1982 - 1988)</li>
                        <li>6. Prof. Iulian Raţiu (1988 - 1990)</li>
                        <div id="more-conductors" style="height: 0;">
                            <li>7. Prof. Ioan Morar (1990 - 1991)</li>
                            <li>8. Prof. Titus Beşa-Fluieraş (1991 - 2001)</li>
                            <li>9. Traian Covrig</li>
                            <li>10. Ioan Moloca (2001 - 2004)</li>
                            <li>11. Marius Moldovan (2004 - 2009)</li>
                            <li>12. Vasile Moldovan (2009 - 2012)</li>
                            <li>13. Hatfaludi Alexandru (2013-now)</li>
                        </div>
                    </ul>
                    <button id="read-more-conductors" onclick="showMoreConductors()">Read More</button>
                </div>
                <div class="swiper-members-holder">
                    <div class="swiper-conductors" id="Conductors">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg"
                                        alt="afis" />
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img
                                        src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
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
                        <!-- end swiper-wrapper -->
                        <!-- end swiper -->
                    </div>
                    <div class="swiper-custom-nav-left">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left-2" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
                                fill="red" />
                        </svg>
                    </div>
                    <div class="swiper-custom-nav-right">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right-2" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
                                fill="red" />
                        </svg>
                    </div>
                    <!-- end swiper-custom-nav -->
                </div>
            </div>
            <div class="flex-direction-row justify-content-space-around members-list ">
                <div class="member-content">
                    <h2 class="title">Cultural Attaches:</h2>
                    <ul>
                        <li>1. Prof. Ioan Bârsan (1974 - 1981)</li>
                        <li>2. Prof. Mîndru Alexandru (1981 - 2003)</li>
                        <li>3. Prof. Victor Bercea (1982 - 1989; 2002 - now)</li>
                        <li>4. Ing. Marius Moldovan (2004 - now)</li>
                        <li>5. Anghel Mirela (2003 - now)</li>
                    </ul>
                </div>
                <div class="swiper-members-holder">
                    <div class="swiper-cultural-attaches" id="Cultural Attaches:">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg"
                                        alt="afis" />
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img
                                        src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
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
                        <!-- end swiper-wrapper -->
                        <!-- end swiper -->
                    </div>
                    <div class="swiper-custom-nav-left">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left-3" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
                                fill="red" />
                        </svg>
                    </div>
                    <div class="swiper-custom-nav-right">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right-3" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
                                fill="red" />
                        </svg>
                    </div>
                    <!-- end swiper-custom-nav -->
                </div>
            </div>
            <div class="flex-direction-row justify-content-space-around members-list ">
                <div class="member-content">
                    <h2 class="title">Singers:</h2>
                    <ul>
                        <li>1. Mariana Chiorean</li>
                        <li>2. Ioan Dragoş</li>
                        <li>3. Ioan Fechete</li>
                        <li>4. Ionuţ Fulea</li>
                        <li>5. Marius Fulea</li>
                        <li>6. Georgeta Fârţală</li>
                        <li>7. Adriana Irimieş</li>
                        <div id="more-singers" style="height: 0;">
                            <li>8. Felicia Lupu</li>
                            <li>9. Dorina Pentelescu</li>
                            <li>10. Ioan Sîncu</li>
                            <li>11. Crina Varga</li>
                            <li>12. Rozalia Iuga</li>
                            <li>13. Dorina Grad</li>
                            <li>14. Maria Mariş</li>
                            <li>15. Simona Baciu</li>
                            <li>16. Anda Conţiş</li>
                            <li>17. Mircea Sime</li>
                            <li>18. Florin Bota</li>
                            <li>19. Silviu Adrian Popa</li>
                            <li>20. Irinel Popa</li>
                            <li>21. Mirela Suciu</li>
                            <li>22. Camelia Lupaş</li>
                            <li>23. Claudiu Ciotleuş</li>
                        </div>
                    </ul>
                    <button id="read-more-singers" onclick="showMoreSingers()">Read More</button>
                </div>
                <div class="swiper-members-holder">
                    <div class="swiper-singers" id="Singers">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg"
                                        alt="afis" />
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img
                                        src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
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
                        <!-- end swiper-wrapper -->
                        <!-- end swiper -->
                    </div>
                    <div class="swiper-custom-nav-left">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left-4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
                                fill="red" />
                        </svg>
                    </div>
                    <div class="swiper-custom-nav-right">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right-4" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
                                fill="red" />
                        </svg>
                    </div>
                    <!-- end swiper-custom-nav -->
                </div>
            </div>
            <div class="flex-direction-row justify-content-space-around members-list ">
                <div class="member-content">
                    <h2 class="title">Collaborating singers:</h2>
                    <ul>
                        <li>1. Mia Dan</li>
                        <li>2. Dumitru Sopon</li>
                        <li>3. Maria Marcu</li>
                        <li>4. Sava Negrean Brudaşcu</li>
                        <li>5. Veta Biriş</li>
                        <li>6. Nicolae Furdui Iancu</li>
                        <li>7. Ion Pojar</li>
                        <div id="more-collaborating-singers" style="height: 0;" >
                            <li>8. Maria Lobont</li>
                            <li>9. Angela Nistor</li>
                            <li>10. Mariana Morcan</li>
                            <li>11. Maria Dan Golban</li>
                            <li>12. Marius Ciprian Pop</li>
                            <li>13. Adriana Hagău</li>
                            <li>14. Aurel Ciceoan</li>
                            <li>15. Maria Dan Golban</li>
                        </div>
                    </ul>
                    <button id="read-more-collaborating-singers" onclick="showMoreCollaboratingSingers()">Read More</button>
                </div>
                <div class="swiper-members-holder">
                    <div class="swiper-collaborating-singers" id="Collaborating singers">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg"
                                        alt="afis" />
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img
                                        src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
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
                        <!-- end swiper-wrapper -->
                        <!-- end swiper -->
                    </div>
                    <div class="swiper-custom-nav-left">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left-5" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
                                fill="red" />
                        </svg>
                    </div>
                    <div class="swiper-custom-nav-right">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right-5" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
                                fill="red" />
                        </svg>
                    </div>
                    <!-- end swiper-custom-nav -->
                </div>
            </div>
            <div class="flex-direction-row justify-content-space-around members-list ">
                <div class="member-content">
                    <h2 class="title">Collaborating musicians:</h2>
                    <ul>
                        <li>1. Dumitru Fărcaş</li>
                        <li>2. Gheorghe Zamfir</li>
                        <li>3. Gheorghe Palcu</li>
                        <li>4. Ioan Berci</li>
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
                                    <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg"
                                        alt="afis" />
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img
                                        src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
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
                        <!-- end swiper-wrapper -->
                        <!-- end swiper -->
                    </div>
                    <div class="swiper-custom-nav-left">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left-6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
                                fill="red" />
                        </svg>
                    </div>
                    <div class="swiper-custom-nav-right">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right-6" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
                                fill="red" />
                        </svg>
                    </div>
                    <!-- end swiper-custom-nav -->
                </div>
            </div>
            <div class="flex-direction-row justify-content-space-around members-list ">
                <div class="member-content">
                    <h2 class="title">Show hosts:</h2>
                    <ul>
                        <li>1. Vania Atudorei</li>
                        <li>2. Victor Bercea</li>
                    </ul>
                </div>
                <div class="swiper-members-holder">
                    <div class="swiper-show-hosts" id="Show hosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure>
                                    <img src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Afis-Barcelona.jpg"
                                        alt="afis" />
                                </figure>
                            </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide">
                                <figure>
                                    <img
                                        src="images/Poze-romanasul/1.Turnee/Barcelona-2022/Baietii din Romanasul.jpg" />
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
                        <!-- end swiper-wrapper -->
                        <!-- end swiper -->
                    </div>
                    <div class="swiper-custom-nav-left">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-left-7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 2.79753e-06C14.3269 4.34256e-06 -4.34256e-06 14.3269 -2.79753e-06 32C-1.2525e-06 49.6731 14.3269 64 32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 1.2525e-06 32 2.79753e-06ZM28.9334 24.3999C28.6667 24.1333 28.4 23.9999 28 23.9999C27.6 23.9999 27.3334 24.1333 27.0667 24.3999L20.4 31.0666L20.4 31.0667C20.2 31.2667 20.075 31.5041 20.025 31.751C19.9417 32.1624 20.0666 32.6 20.4 32.9333L27.0667 39.6C27.6 40.1333 28.4 40.1333 28.9333 39.6C29.4667 39.0667 29.4667 38.2667 28.9333 37.7333L24.5334 33.3334L42.7222 33.3334C43.4889 33.3334 44 32.8 44 32C44 31.2 43.4889 30.6667 42.7222 30.6667L24.5333 30.6667L28.9334 26.2666C29.4667 25.7333 29.4667 24.9333 28.9334 24.3999Z"
                                fill="red" />
                        </svg>
                    </div>
                    <div class="swiper-custom-nav-right">
                        <svg width="64" height="64" viewBox="0 0 64 64" id="nav-right-7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32 64C49.6731 64 64 49.6731 64 32C64 14.3269 49.6731 0 32 0C14.3269 0 0 14.3269 0 32C0 49.6731 14.3269 64 32 64ZM35.0666 39.6001C35.3333 39.8667 35.6 40.0001 36 40.0001C36.4 40.0001 36.6666 39.8667 36.9333 39.6001L43.6 32.9334L43.6 32.9333C43.8 32.7333 43.925 32.4959 43.975 32.249C44.0583 31.8376 43.9334 31.4 43.6 31.0667L36.9333 24.4C36.4 23.8667 35.6 23.8667 35.0667 24.4C34.5333 24.9333 34.5333 25.7333 35.0667 26.2667L39.4666 30.6666H21.2778C20.5111 30.6666 20 31.2 20 32C20 32.8 20.5111 33.3333 21.2778 33.3333H39.4667L35.0666 37.7334C34.5333 38.2667 34.5333 39.0667 35.0666 39.6001Z"
                                fill="red" />
                        </svg>
                    </div>
                    <!-- end swiper-custom-nav -->
                </div>
            </div>
 
        </div>
    </div>
</body>

<?php

get_footer();
?>