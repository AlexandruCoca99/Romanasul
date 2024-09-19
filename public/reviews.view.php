<?php $page = "reviews";
include('functions.php');
get_header("Reviews");
include('header.php');
include '../public/reviewSection/mysqldataprovider.class.php'
?>

<?php

$model = new MySqlDataProvider(); // Create an instance of the ReviewModel
$reviews = $model->get_review(); // Fetch all reviews
$ratingStats = $model->fetchRatingStats(); // Fetch rating statistics
$totalRating = 0;
$ratingsCount = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];

foreach ($reviews as $review):
    $count++;
    $rating = htmlspecialchars($review['rating']);
// $totalRating += $rating;
endforeach;



// Initialize statistics variables
$totalReviews = $count;



// Populate the ratings count
foreach ($ratingStats as $stat) {
    $ratingsCount[(int)$stat['rating']] = (int)$stat['count'];
    $totalRating += (int)$stat['rating'] * (int)$stat['count'];
}

// Calculate the average rating
$averageRating = $totalReviews > 0 ? $totalRating / $totalReviews : 0;
$averageRatingFormatted = number_format($averageRating, 1); // Format to one decimal place

// Calculate the percentage for each rating bar
function calculatePercentage($count, $total)
{
    return $total > 0 ? ($count / $total) * 100 : 0;
}

// Function to generate star rating HTML
function generateStarRating($averageRating)
{
    $fullStars = floor($averageRating);  // Number of full stars (e.g., 3 for 3.8)
    $halfStars = ($averageRating - $fullStars) >= 0.5 ? 1 : 0; // One half star if the decimal is 0.5 or more
    $emptyStars = 5 - $fullStars - $halfStars; // Remaining stars are empty

    $starsHtml = '';

    // Add full stars
    for ($i = 0; $i < $fullStars; $i++) {
        $starsHtml .= '<span class="star">&#9733;</span>'; // Filled star (★)
    }

    // Add half star if applicable
    if ($halfStars) {
        $starsHtml .= '<span class="star">&#9734;</span>'; // Half-filled star (★) or use custom CSS for a half star
    }

    // Add empty stars
    for ($i = 0; $i < $emptyStars; $i++) {
        $starsHtml .= '<span class="star">&#9734;</span>'; // Empty star (☆)
    }

    return $starsHtml;
}
?>

<body>

    <div class="reviews-wrapper">
        <div class="review-overview">
            <div class="rating-summary">
                <div class="average-rating">
                    <span class="rating-score"><?php echo $averageRatingFormatted; ?>/5.0</span>
                    <div class="stars-average"><?php echo generateStarRating($averageRating); ?></div>
                </div>
                <div class="rating-distribution">
                    <?php foreach ($ratingsCount as $stars => $count): ?>
                        <div class="rating-bar">
                            <span><?php echo $stars; ?> ★</span>
                            <div class="bar">
                                <div class="fill" style="width: <?php echo calculatePercentage($count, $totalReviews); ?>%"></div>
                            </div>
                            <span>(<?php echo $count; ?>)</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="review-form">
                <button class="review-button">Add Review</button>
            </div>

            <!-- // Display the reviews -->
            <div class="reviews">
                <?php foreach ($reviews as $review): ?>
                    <?php
                    $name = htmlspecialchars($review['name']);
                    $surname = htmlspecialchars($review['surname']);
                    $rating = htmlspecialchars($review['rating']);
                    $comment = htmlspecialchars($review['comment']);
                    $date = htmlspecialchars($review['date']);
                    ?>
                    <div class="review">
                        <p class="review-text"><?php echo $comment; ?></p>
                        <div class="review-header">

                            <div class="stars"><?php echo generateStarRating($rating); ?></div>
                            <span class="review-author">By <?php echo $name . ' ' . $surname; ?> on <?php echo $date; ?></span>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="container-reviews-wrapper hidden">
            <div class="container-reviews ">
                <!-- <div class="post hidden">
                <div class="text">Thanks for rating us!</div>
                <button class="return-button">RETURN</button>
            </div> -->
                <div class="star-widget">

                    <form action="reviewSection\app.php" method="POST">
                        <div class="stars-wrapper">
                            <input class="star-radio" type="radio" name="rating" id="rate-5" value="5" />
                            <label for="rate-5" class=" review-star fa-solid fa-star"> </label>
                            <input class="star-radio" type="radio" name="rating" id="rate-4" value="4" />
                            <label for="rate-4" class="review-star fa-solid fa-star"></label>
                            <input class="star-radio" type="radio" name="rating" id="rate-3" value="3" />
                            <label for="rate-3" class="review-star fa-solid fa-star"></label>
                            <input class="star-radio" type="radio" name="rating" id="rate-2" value="2" />
                            <label for="rate-2" class="review-star fa-solid fa-star"></label>
                            <input class="star-radio" type="radio" name="rating" id="rate-1" value="1" />
                            <label for="rate-1" class="review-star fa-solid fa-star"></label>
                        </div>
                        <div class="description-content"></div>
                        <!-- <div class="input-reviews-row-wrapper"> -->
                        <!-- Input prenume -->
                        <div class="input-reviews">
                            <label class="name-label" for="name">Name</label>
                            <!-- <i class="icon fa-solid fa-address-card"></i> -->
                            <input class="name-input" type="text" name="name" class="contact-input" required>
                        </div>
                        <!-- Input nume -->
                        <div class="input-reviews">
                            <label class="name-label" for="surname">Surname</label>
                            <!-- <i class="icon fa-solid fa-address-card"></i> -->
                            <input class="name-input" type="text" name="surname" class="contact-input" required>
                        </div>
                        <!-- </div> -->
                        <div class="textarea">
                            <textarea name="comment" cols="30" placeholder="Describe your experience.."></textarea>
                        </div>
                        <div class="submit-button">
                            <button type="submit" name="submit-button">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>