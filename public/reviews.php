<?php $page = "reviews";
include 'functions.php';
get_header("Reviews");
include 'header.php';
include 'reviewSection/connect.php'
?>

<body>

    <div class="reviews-wrapper">
        <div class="review-overview">
            <div class="rating-summary">
                <div class="average-rating">
                    <span class="rating-score">1.5/5.0</span>
                    <div class="stars-average">
                        <span>★</span><span>★</span><span>☆</span><span>☆</span><span>☆</span>
                    </div>
                    <p>No Reviews</p>
                </div>
                <div class="rating-distribution">
                    <div class="rating-bar">
                        <span>5 ★</span>
                        <div class="bar">
                            <div class="fill" style="width: 4%"></div>
                        </div>
                        <span>(1)</span>
                    </div>
                    <div class="rating-bar">
                        <span>4 ★</span>
                        <div class="bar">
                            <div class="fill" style="width: 4%"></div>
                        </div>
                        <span>(1)</span>
                    </div>
                    <div class="rating-bar">
                        <span>3 ★</span>
                        <div class="bar">
                            <div class="fill" style="width: 60%"></div>
                        </div>
                        <span>(15)</span>
                    </div>
                    <div class="rating-bar">
                        <span>2 ★</span>
                        <div class="bar">
                            <div class="fill" style="width: 44%"></div>
                        </div>
                        <span>(11)</span>
                    </div>
                    <div class="rating-bar">
                        <span>1 ★</span>
                        <div class="bar">
                            <div class="fill" style="width: 52%"></div>
                        </div>
                        <span>(13)</span>
                    </div>
                </div>
            </div>
            <div class="review-form">
                <button class="review-button">Add Review</button>
            </div>
            <div class="review">
                <div class="review-header">
                    <div class="stars">
                        <span>★</span><span>★</span><span>★</span><span>☆</span><span>☆</span>
                    </div>
                    <span class="review-author">By Brighton jan 21 2020</span>
                </div>
                <p class="review-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, rerum.
                </p>
            </div>
        </div>
        <div class="container-reviews hidden">
            <div class="post hidden">
                <div class="text">Thanks for rating us!</div>
                <button class="return-button">RETURN</button>
            </div>
            <div class="star-widget">
                <div class="stars-wrapper">
                    <input class="star-radio" type="radio" name="rate" id="rate-5" />
                    <label for="rate-5" class=" review-star fa-solid fa-star"> </label>
                    <input class="star-radio" type="radio" name="rate" id="rate-4" />
                    <label for="rate-4" class="review-star fa-solid fa-star"></label>
                    <input class="star-radio" type="radio" name="rate" id="rate-3" />
                    <label for="rate-3" class="review-star fa-solid fa-star"></label>
                    <input class="star-radio" type="radio" name="rate" id="rate-2" />
                    <label for="rate-2" class="review-star fa-solid fa-star"></label>
                    <input class="star-radio" type="radio" name="rate" id="rate-1" />
                    <label for="rate-1" class="review-star fa-solid fa-star"></label>
                </div>
                <form action="reviewSection\connect.php" method="POST">
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
                        <label class="name-label" for="subject">Subject</label>
                        <!-- <i class="icon fa-solid fa-address-card"></i> -->
                        <input class="name-input" type="text" name="surname" class="contact-input" required>
                    </div>
                    <!-- </div> -->
                    <div class="textarea">
                        <textarea name="comment" cols="30" placeholder="Describe your experience.."></textarea>
                    </div>
                    <div class="submit-button">
                        <button type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
</body>