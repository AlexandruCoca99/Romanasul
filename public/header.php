<header>
    <div class="navbar">
        <ul class="links">
         <li><a href="home.php" class="scrollBtn <?php if ($page=='home') echo 'selected';?>"><?php echo _("Home")?></a> </li>
         <li><a href="whoweare.php" class="scrollBtn <?php if ($page=='whoweare') echo 'selected';?>"><?php echo _("Who we are")?></a> </li>
         <li><a href="images.php" class="scrollBtn <?php if ($page=='images') echo 'selected';?>"><?php echo _("Images")?></a> </li>
         <li><a href="videos.php" class="scrollBtn <?php if ($page=='videos') echo 'selected';?>"><?php echo _("Music & Videos")?></a> </li>
         <li><a href="competitions.php" class="scrollBtn <?php if ($page=='competitions') echo 'selected';?>"><?php echo _("Competitions")?></a></li>
         <li><a href="contacts.php" class="scrollBtn <?php if ($page=='contacts') echo 'selected';?>"><?php echo _("Contact Us")?></a></li>
        </ul>

        <div class="logo scrollBtn" title="Romanasul Cluj-Napoca"></div>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>
