<?php include 'functions.php';
get_header("Old galley");
?>

<div class="gallery-wrapper old-period ">
    <div class="gallery-image-wrapper">
        <div class="gallery-image-container">
            <a href="images.php" class="close-button-container"><img src="images/close-red-icon.svg" /></a>


            <div class="image">
                <img src="images\gallery\pozeVechi\1986_ceterasi3.jpg" alt="" />
            </div>
            <div class="image"><img src="images\gallery\pozeVechi\1978_all.jpg" alt="" /></div>
            <div class="image"><img src="images\gallery\pozeVechi\1978_ceterasi.JPG" alt="" /></div>
            <div class="image"><img src="images\gallery\pozeVechi\1978_crihalma.JPG" alt="" /></div>
            <div class="image"><img src="images\gallery\pozeVechi\1978_nasaud.JPG" alt="" /></div>
            <div class="image"><img src="images\gallery\pozeVechi\1978_nasaud2.JPG" alt="" /></div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1978_nasaud3.JPG" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1978_nasaud4.jpg" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1978_some.JPG" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1980_ceterasi2.JPG" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1980_maramures.JPG" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1980_nasaud5.JPG" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1983_3.jpg" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1983_4.jpg" alt="" />
            </div>
            <div class="image">
                <img src="images\gallery\pozeVechi\1983_5.jpg" alt="" />
            </div>
        </div>
    </div>
    <div class="popup-img">
        <div class="background"></div>
        <a href="#" class="close-button"><img src="images/close-red-icon.svg" /></a>
        <a class="prev " onclick="changeSlide(-1)">&#10094;</a>
        <img src="" class="popup-image-content" alt="Popup Image" />
        <a class="next " onclick="changeSlide(1)">&#10095;</a>
    </div>
</div>

<?php
// include 'footer.php';
get_footer();
?>