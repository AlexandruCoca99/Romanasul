<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="images/withoutBlueSpecific.png" />
    <meta name="description" content="'Romanasul Cluj-Napoca', Romania is the traditional folkloric dance group from the Technical University. We love to dance and sing, participate to festivals and spread our traditions, national customs, dances and songs to everyone in this world." />
    <meta name="keywords" content="Romanasul, Cluj-Napoca, cluj, napoca, cj, romania, utcluj, UT, universitatea, tehnica, dance, dans popular, dansuri populare, traditii, folkloric, folk, festival, traditions, national customs, dancing, singing, music" />
    <meta name="verify-v1" content="KWriKiOK2JNWAK44Dz2MFU0B/OoblWp+kGv+oZBHPE0=" />


    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-10746837-1");
            pageTracker._trackPageview();
        } catch (err) {}
    </script>
    <?php
    header("Location: /home.php");
    exit;
    ?>
    <?php include 'include.php' ?>
    <?php include 'include-locale.php' ?>

    <title>Romanasul Cluj-Napoca</title>


    <!--[if IE]>
    <script>
        document.createElement("header");
        document.createElement("footer");
        document.createElement("nav");
        document.createElement("section");
    </script>
    <![endif]-->
</head>

<body>
    <div class="content">
        <noscript>
            <h1>Romanasul Dance Group, Technical University, Cluj - Napoca, Romania</h1>
        </noscript>

        <!-- Home -->
        <div id="home">
            <?php include 'home.php' ?>
        </div>
        <!-- Who we are  -->
        <div id="whoweare">
            <?php include 'whoweare.php' ?>
        </div>
        <!-- Images -->
        <div id="images">
            <?php include 'images.php'; ?>
        </div>

        <!-- Music -->
        <div id="musicvideo">
            <?php include 'music.php'; ?>
            <br /><br />
            <?php include 'videos.php'; ?>
        </div>

        <!-- Videos -->
        <!--    <div id="videos">-->
        <!--        --><?php //include 'videos.php';
                        ?>
        <!--    </div> -->

        <!-- Competitions -->
        <div id="competitions">
            <?php include 'competitions.php'; ?>
        </div>



        <!-- Contacts -->
        <footer id="contacts">
            <?php include 'contacts.php' ?>
        </footer>
    </div>
</body>

</html>