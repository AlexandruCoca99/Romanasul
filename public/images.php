<?php $page = "images";
include 'header.php';
include 'functions.php';
get_header("Images");
?>


<body>
    <div class="gallery-container">
        <div class="time-period-container" id="old">
            <img src="images\gallery\pozeVechi\1978_nasaud4.jpg" class="time-period-background" alt="Background Old">
            <div class="header-container">
                <h2>Photos from 1974-2000</h2>
            </div>

        </div>

        <div class="time-period-container" id="mid">
            <img src="images\gallery\pozeMijloc\nasaudGrup_00.JPG" class="time-period-background" alt="Background Mid">
            <div class="header-container">
                <h2>Photos from 2000-2010</h2>
            </div>
            <!-- <img src="photo3.jpg" alt="Mid Photo 1">
            <img src="photo4.jpg" alt="Mid Photo 2"> -->
        </div>

        <div class="time-period-container" id="recent">
            <img src="images\Baieti.jpg" class="time-period-background" alt="Background Recent">
            <div class="header-container">
                <h2>Photos from 2010-2024</h2>
            </div>
            <!-- <img src="photo5.jpg" alt="Recent Photo 1">
            <img src="photo6.jpg" alt="Recent Photo 2"> -->
        </div>
    </div>
    <div class="gallery-wrapper old-period hidden">

        <div class="gallery-image-container">
            <a href="#" class="close-button"><img src="images/close-red-icon.svg" /></a>
            <div class="image1">
                <img src="images\gallery\pozeVechi\1986_ceterasi3.jpg" alt="" />
            </div>
            <div class="image2"><img src="images\gallery\pozeVechi\1978_all.jpg" alt="" /></div>
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
        <div class="popup-img">
            <img src="" alt="">
        </div>
    </div>

    <div class="gallery-wrapper mid-period hidden">
        <div class="gallery-image-container">
            <a href="#" class="close-button"><img src="images/close-red-icon.svg" /></a>
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
        <div class="popup-img">
            <img src="" alt="">
        </div>
    </div>

    <div class="gallery-wrapper recent-period hidden">
        <div class="gallery-image-container">
            <a href="#" class="close-button"><img src="images/close-red-icon.svg" /></a>
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
        <div class="popup-img">
            <img src="" alt="">
        </div>
    </div>

</body>
<?php

get_footer();
?>
<!-- 
<section>
<table>
<tr>
    <td width="80px">
    </td>
    <td>
    <div class="highslide-gallery">
        <a id="thumb1" href="images/gallery/pozeVechi/Tomy-SOLO.jpg" class="highslide" onclick="return hs.expand(this, { slideshowGroup: 1 } )">
            <img src="images/gallery/pozeVechi/thumb.jpg" alt="Highslide JS" title="Click to enlarge" />
        </a>
        <div class="hidden-container">
            <a href="images/gallery/pozeVechi/1978_all.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1978_ceterasi.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1978_crihalma.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1978_nasaud.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1978_nasaud2.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1978_nasaud3.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1978_nasaud4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1978_some.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1980_ceterasi2.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1980_maramures.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1980_nasaud5.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1983_3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1983_4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1983_5.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1984_festivalScena.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1985_nasaud6.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
            <a href="images/gallery/pozeVechi/1986_ceterasi3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1', slideshowGroup: 1 })"></a>
        </div>
    </div>
    </td>
    <td style="vertical-align:middle; padding:10px;">
        <section><div class="homeSlogan"><p><?php echo _("The birth of Romanasul (1974-1989)") ?>
            <br /><br />
        </p></div></section>
    </td>
</tr>
<tr valign=middle>
    <td></td>
    <td>
        <div class="highslide-gallery">
            <a id="thumb2" href="images/gallery/pozeMijloc/banatGrup_93.jpg" class="highslide" onclick="return hs.expand(this, { slideshowGroup: 2 } )">
                <img src="images/gallery/pozeMijloc/thumb.jpg" alt="Highslide JS" title="Click to enlarge" />
            </a>
            <div class="hidden-container">
                <a href="images/gallery/pozeMijloc/adevarul_98 Montignac.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/banat2_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/banat3_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/banat4_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/banatGrup_93.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/banat_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/berches_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/calusari_91.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/colaj_01.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/crihalma1_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/crihalma2_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/crihalma_91.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/Franta_00.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/mures_91.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/mures_98.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/nasaudGrup_00.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/nasaud_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/oas2_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/oas3_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/oas4_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/oas5_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/oas6_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/oas_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/orchestra2_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/orchestra3_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/orchestra_02.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/random_atina_02.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/spectacol 25 ani.JPG" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
                <a href="images/gallery/pozeMijloc/ziar_25ani.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb2', slideshowGroup: 2 })"></a>
            </div>
    </div>
    </td>
    <td style="vertical-align:middle">
        <section><div class="homeSlogan"><p><?php echo _("Romanasul some time ago (1990-2002)") ?>
            <br /><br />
        </p></div></section>
    </td>
</tr>
<tr>
    <td></td>
    <td>
        <div class="highslide-gallery">
            <a id="thumb3" href="images/gallery/pozeNoi/nasaud_09 franta 4.jpg" class="highslide" onclick="return hs.expand(this, { slideshowGroup: 3 } )">
                <img src="images/gallery/pozeNoi/thumb.jpg" alt="Highslide JS" title="Click to enlarge" />
            </a>
            <div class="hidden-container">
                <a href="images/gallery/pozeNoi/berches_06 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_09 franta 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_09 franta 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_10 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_10 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_10 5.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_10 6.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/berches_10 7.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/codru_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/codru_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/crihalma_09 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/crihalma_09 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/crihalma_09 franta repetitii.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/crihalma_09.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/grup_06 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/grup_07 (White Space Conflict).jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a
                <a href="images/gallery/pozeNoi/grup_07 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/grup_07 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/grup_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/grup_10.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/grup_11 ohrid.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_09 franta 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_09 franta 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_09 franta 5.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_10 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_10 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_10 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/maramures_10.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta 5.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta repetitii 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta repetitii 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta repetitii.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/moldova_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/mures_09 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/mures_09 franta repetitii.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/mures_09.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_03 berches.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 5.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 6.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 franta 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 franta 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 franta repetitii 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 franta repetitii 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 franta repetitii.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/nasaud_09.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_06 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 1.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 4 cif.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 1.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 4.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 5.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 6.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 7.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 8.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta 9.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/obicei_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/orchestra_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/orchestra_09 franta 3.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/orchestra_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/orchestra_09.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/parada_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/scena_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/scena_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/taraba_09 franta 2.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
                <a href="images/gallery/pozeNoi/taraba_09 franta.jpg" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb3', slideshowGroup: 3 })"></a>
            </div>
        </div>
    </td>
    <td style="vertical-align:middle">
        <section><div class="homeSlogan"><p><?php echo _("Romanasul today (2003-now"); ?>)
            <br /><br />
        </p></div></section>
    </td>
</tr>
</table>
</section> -->