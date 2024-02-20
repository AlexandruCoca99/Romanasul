<?php $page = "videos";

include 'functions.php';
get_header("Videos");
include 'header.php';
?>

<!-- <?php
echo '<center><iframe width="853" height="480" src="https://www.youtube.com/embed/videoseries?list=PL6151E748F5BA2275&amp;hl=en_US" frameborder="1" allowfullscreen></iframe></center>';

$countries = [array('id' => 'CA-2016'), array('id' => 'ES-2022')];
?> -->



<div id="chartdiv"></div>

<div class="background"></div>
<div class="right-side-pop-up"></div>


<?php
array_map(function ($country) {
    echo '<div id="' . $country['id'] . '" class="slider"></div>';
}, $countries);
    ?>

<?php get_footer(); ?>