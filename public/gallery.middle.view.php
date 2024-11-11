<?php include 'functions.php';
get_header("2000-2010");
?>

<div class="gallery-wrapper mid-period ">
    <div class="gallery-image-wrapper">
        <div class="gallery-image-container">
            <a href="Imagini" class="close-button-container"><img src="images/close-red-icon.svg" /></a>
            <div class="image1">
                <img src="images\gallery\pozeMijloc\banat_02.jpg" alt="" />
            </div>
            <div class="image2"><img src="images\gallery\pozeMijloc\banat2_02.jpg" alt="" /></div>
            <div class="image3"><img src="images\gallery\pozeMijloc\banat3_02.JPG" alt="" /></div>
            <div class="image4"><img src="images\gallery\pozeMijloc\banat4_02.JPG" alt="" /></div>
            <div class="image5"><img src="images\gallery\pozeMijloc\banatGrup_93.JPG" alt="" /></div>
            <div class="image6"><img src="images\gallery\pozeMijloc\berches_02.jpg" alt="" /></div>
            <div class="image7">
                <img src="images\gallery\pozeMijloc\calusari_91.JPG" alt="" />
            </div>
            <div class="image8">
                <img src="images\gallery\pozeMijloc\1978_nasaud4.jpg" alt="" />
            </div>
            <div class="image9">
                <img src="images\gallery\pozeMijloc\1978_some.JPG" alt="" />
            </div>
            <div class="image10">
                <img src="images\gallery\pozeMijloc\1980_ceterasi2.JPG" alt="" />
            </div>
            <div class="image11">
                <img src="images\gallery\pozeMijloc\1980_maramures.JPG" alt="" />
            </div>
            <div class="image12">
                <img src="images\gallery\pozeMijloc\1980_nasaud5.JPG" alt="" />
            </div>
            <div class="image13">
                <img src="images\gallery\pozeMijloc\1983_3.jpg" alt="" />
            </div>
            <div class="image14">
                <img src="images\gallery\pozeMijloc\1983_4.jpg" alt="" />
            </div>
            <div class="image15">
                <img src="images\gallery\pozeMijloc\1983_5.jpg" alt="" />
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