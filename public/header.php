<header>
    <!-- <div class="border"> -->
    <nav>
        <a href="home.php" class="scrollBtn <?php if ($page == 'home')
                                                echo 'selected'; ?>">
            <?php echo _("Home") ?>
        </a> |

        <!-- stilizat fain -->
        <a href="whoweare.php" class="scrollBtn <?php if ($page == 'whoweare')
                                                    echo 'selected'; ?>">
            <?php echo _("Who we are") ?>
        </a> |

        <!-- galerie impartita pe perioade de ani -->
        <a href="images.php" class="scrollBtn <?php if ($page == 'images')
                                                    echo 'selected'; ?>">
            <?php echo _("Images") ?>
        </a> |
        <!-- 3 sectiuni -> playlist muzica, carusel videoclipuri, carusel spectacole -->
        <a href="tours.php" class="scrollBtn <?php if ($page == 'tours')
                                                    echo 'selected'; ?>">
            <?php echo _("Tours") ?>
        </a> |
        <!-- harta (festivaluri) -->
        <a href="../competitions.php" class="scrollBtn <?php if ($page == 'competitions')
                                                            echo 'selected'; ?>">
            <?php echo _("Competitions") ?>
        </a> |

        <!-- pt Vincze si EU -->
        <!-- Evenimente/Events (dropdown -> nunti/majorate, petreceri, spectacole, corporate events ) -->
        <!-- galerie cu poze de la fiecare tip de eveniment cu float  de contact -->

        <a href="repertoriu.php" class="scrollBtn <?php if ($page == 'repertoriu')
                                                        echo 'selected'; ?>">
            <?php echo _("Repertoriu") ?>
        </a> |

        <a href="reviews.view.php" class="scrollBtn <?php if ($page == 'reviews')
                                                        echo 'selected'; ?>">
            <?php echo _("Reviews") ?>
        </a> |

        <!-- Pt Nenea Luci -->
        <a href="contacts.php" class="scrollBtn <?php if ($page == 'contacts')
                                                    echo 'selected'; ?>">
            <?php echo _("Contact Us") ?>
        </a>



    </nav>
    <div class="logo scrollBtn" title="Romanasul Cluj-Napoca"></div>
    <!-- </div> -->
</header>