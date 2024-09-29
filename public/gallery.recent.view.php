<?php include 'functions.php';
get_header("Recent galley");
?>

<div class="gallery-wrapper recent-period ">
    <div class="gallery-image-wrapper">
        <div class="gallery-image-container">
            <a href="images.php" class="close-button-container"><img src="images/close-red-icon.svg" /></a>
            <div class="image1 tall">
                <img src="images\gallery\pozeVechi\1986_ceterasi3.jpg" alt="" />
            </div>
            <div class="image2 wide"><img src="images\gallery\pozeVechi\1978_all.jpg" alt="" /></div>
            <div class="image3"><img src="images\gallery\pozeVechi\1978_ceterasi.JPG" alt="" /></div>
            <div class="image4"><img src="images\gallery\pozeVechi\1978_crihalma.JPG" alt="" /></div>
            <div class="image5"><img src="images\gallery\pozeVechi\1978_nasaud.JPG" alt="" /></div>
            <div class="image6"><img src="images\gallery\pozeVechi\1978_nasaud2.JPG" alt="" /></div>
            <div class="image7">
                <img src="images\gallery\pozeVechi\1978_nasaud3.JPG" alt="" />
            </div>
            <div class="image8">
                <img src="images\gallery\pozeVechi\1978_nasaud4.jpg" alt="" />
            </div>
            <div class="image9">
                <img src="images\gallery\pozeVechi\1978_some.JPG" alt="" />
            </div>
            <div class="image10">
                <img src="images\gallery\pozeVechi\1980_ceterasi2.JPG" alt="" />
            </div>
            <div class="image11">
                <img src="images\gallery\pozeVechi\1980_maramures.JPG" alt="" />
            </div>
            <div class="image12">
                <img src="images\gallery\pozeVechi\1980_nasaud5.JPG" alt="" />
            </div>
            <div class="image13">
                <img src="images\gallery\pozeVechi\1983_3.jpg" alt="" />
            </div>
            <div class="image14">
                <img src="images\gallery\pozeVechi\1983_4.jpg" alt="" />
            </div>
            <div class="image15">
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