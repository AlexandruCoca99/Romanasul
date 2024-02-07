<?php $page = "home";
 include 'header.php'; 
 include 'functions.php';
get_header("Home");
?>

<div class="home">
    <div class="parallaxBox">

        <div id="home_bg_div" style="width=98%;  text-align:center;">
            <img id="home_bg" style="position:absolute; top:0px; left:0px;" alt="" src="images/header.png" />
        </div>

        <div class="languageBtn">
            <a href="?lang=en"><img src="images/en.gif" alt="EN" width="30px" height="20px"></a>
            <a href="?lang=ro"><img src="images/ro.gif" alt="RO" width="30px" height="20px"></a>
            <a href="?lang=fr"><img src="images/fr.gif" alt="FR" width="30px" height="20px"></a>
        </div>

        <div id="parallax">

             <div id="baieti" style="height:100%; width:110%">
                    <img style="position:absolute; bottom:0px; right:0px;" alt="" src="images/efect/baieti2.png" />
             </div>
            <div id="ione" style="height:100%; width:110%;">
                <img style="position:absolute; bottom:0px; right:0px;" alt="" src="images/efect/ione2.png" />
            </div>
            <div id="fete" style="height:100%; width:90%;">
                <img style="position:absolute; bottom:0px; right:0px;" alt="" src="images/efect/fete2.png" />
            </div>
            <div id="fete_spate" style="height:100%; width:90%;">
                <img style="position:absolute; bottom:0px; right:0px;" alt="" src="images/efect/fete_spate2.png" />
            </div>

        </div>
    </div>

    <div class="homeSlogan">
        <div>
        <p><?php echo _("Mankind will find itself again only when it will understand the great lesson of folklore, and will acquire the profound meaning of its splendid unity in folk culture.")?> <br>
            Prof.univ.dr. Dumitru POP</p>
        </div>
    </div>

</div>