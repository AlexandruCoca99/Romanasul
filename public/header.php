<header class="header">
    <!-- <div class="border"> -->
    <div class="hamburger">
        <i class="fa-solid fa-bars"></i>
    </div>
    <nav>
        <ul>
            <li> <a href="home.php" class="scrollBtn <?php if ($page == 'home') echo 'selected'; ?> nav-link"><?php echo _("ACASA") ?></a></li>
            <li> <a href="whoweare.php" class="scrollBtn <?php if ($page == 'whoweare') echo 'selected'; ?> nav-link"><?php echo _("CINE SUNTEM") ?></a></li>
            <li> <a href="images.php" class="scrollBtn <?php if ($page == 'images') echo 'selected'; ?> nav-link"><?php echo _("IMAGINI") ?></a></li>
            <li> <a href="tours.php" class="scrollBtn <?php if ($page == 'tours') echo 'selected'; ?> nav-link"><?php echo _("TURNEE") ?></a></li>
            <li> <a href="repertoriu.php" class="scrollBtn <?php if ($page == 'repertoriu') echo 'selected'; ?> nav-link"><?php echo _("REPERTORIU") ?></a></li>
            <!-- <li> <a href="reviews.view.php" class="scrollBtn <?php if ($page == 'reviews') echo 'selected'; ?> nav-link"><?php echo _("RECENZII") ?></a></li> -->
            <li> <a href="contacts.php" class="scrollBtn <?php if ($page == 'contacts') echo 'selected'; ?> nav-link"><?php echo _("CONTACT") ?></a></li>
        </ul>
    </nav>
    <a class="logo-img" href="home.php">
        <div class="logo " title="Romanasul Cluj-Napoca">
        </div>
    </a>
    <!-- </div> -->
</header>