<header class="header">
    <!-- <div class="border"> -->
    <div class="hamburger">
        <i class="fa-solid fa-bars"></i>
    </div>
    <nav>
        <ul>
            <li> <a href="index.php" class="scrollBtn <?php if ($page == 'index') echo 'selected'; ?> nav-link"><?php echo ("ACASĂ") ?></a></li>
            <li> <a href="whoweare.php" class="scrollBtn <?php if ($page == 'whoweare') echo 'selected'; ?> nav-link"><?php echo ("CINE SUNTEM") ?></a></li>
            <li> <a href="Imagini" class="scrollBtn <?php if ($page == 'Imagini') echo 'selected'; ?> nav-link"><?php echo ("IMAGINI") ?></a></li>
            <li> <a href="tours.php" class="scrollBtn <?php if ($page == 'tours') echo 'selected'; ?> nav-link"><?php echo ("TURNEE") ?></a></li>
            <li> <a href="repertoriu.php" class="scrollBtn <?php if ($page == 'repertoriu') echo 'selected'; ?> nav-link"><?php echo ("REPERTORIU") ?></a></li>
            <!-- <li> <a href="reviews.view.php" class="scrollBtn <?php if ($page == 'reviews') echo 'selected'; ?> nav-link"><?php echo ("RECENZII") ?></a></li> -->
            <li> <a href="contacts.php" class="scrollBtn <?php if ($page == 'contacts') echo 'selected'; ?> nav-link"><?php echo ("CONTACT") ?></a></li>
        </ul>
    </nav>
    <a class="logo-img" href="index.php">
        <div class="logo " title="Romanasul Cluj-Napoca">
        </div>
    </a>
    <!-- </div> -->
</header>