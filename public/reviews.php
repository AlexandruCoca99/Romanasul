<?php $page = "contacts";
include 'functions.php';
get_header("Contact Us");
include 'header.php';
?>

<body>
    
<div class="review-container">
        <h2>Recenziile noastre</h2>
        <div id="reviews">
            <!-- Recenziile vor fi afișate aici -->
        </div>
        <h3>Lasa o recenzie:</h3>
        <textarea class="reviewInput" placeholder="Scrie recenzia ta aici..."></textarea>
        <button class="submit-review" onclick="submitReview()">Trimite Recenzia</button>
</div>

<?php get_footer(); ?>
</body>