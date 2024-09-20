<header>
    <!-- <div class="border"> -->
    <div class="hamburger">
        <i class="fa-solid fa-bars"></i>
    </div>
    <nav>
        <ul>
            <li> <a href="home.php" class="scrollBtn <?php if ($page == 'home') echo 'selected'; ?>"><?php echo _("Home") ?></a></li>
            <li> <a href="whoweare.php" class="scrollBtn <?php if ($page == 'whoweare') echo 'selected'; ?>"><?php echo _("Who we are") ?></a></li>
            <li> <a href="images.php" class="scrollBtn <?php if ($page == 'images') echo 'selected'; ?>"><?php echo _("Images") ?></a></li>
            <li> <a href="tours.php" class="scrollBtn <?php if ($page == 'tours') echo 'selected'; ?>"><?php echo _("Tours") ?></a></li>
            <li> <a href="repertoriu.php" class="scrollBtn <?php if ($page == 'repertoriu') echo 'selected'; ?>"><?php echo _("Repertoriu") ?></a></li>
            <li> <a href="reviews.view.php" class="scrollBtn <?php if ($page == 'reviews') echo 'selected'; ?>"><?php echo _("Reviews") ?></a></li>
            <li> <a href="contacts.php" class="scrollBtn <?php if ($page == 'contacts') echo 'selected'; ?>"><?php echo _("Contact Us") ?></a></li>
        </ul>
    </nav>
    <a class="logo-img" href="home.php">
        <div class="logo " title="Romanasul Cluj-Napoca">
        </div>
    </a>
    <!-- </div> -->
</header>