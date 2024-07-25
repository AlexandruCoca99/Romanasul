<?php $page = "reviews";
include 'functions.php';
get_header("Reviews");
include 'header.php';
?>

<body>

    <div class="reviews-wrapper">
        <div class="container-reviews">
            <div class="post">
                <div class="text">Thanks for rating us!</div>
                <div class="edit">EDIT</div>
            </div>
            <div class="star-widget">
                <div class="stars-wrapper">
                    <input type="radio" name="rate" id="rate-5" />
                    <label for="rate-5" <i class="fa-solid fa-star"></i> </label>
                    <input type="radio" name="rate" id="rate-4" />
                    <label for="rate-4" class="fa-solid fa-star"></label>
                    <input type="radio" name="rate" id="rate-3" />
                    <label for="rate-3" class="fa-solid fa-star"></label>
                    <input type="radio" name="rate" id="rate-2" />
                    <label for="rate-2" class="fa-solid fa-star"></label>
                    <input type="radio" name="rate" id="rate-1" />
                    <label for="rate-1" class="fa-solid fa-star"></label>
                </div>
                <form action="#">
                    <div class="description-content"></div>
                    <div class="input-reviews-row-wrapper">
                        <!-- Input prenume -->
                        <div class="input-reviews">
                            <input class="name-input" type="text" name="name" class="contact-input" required>
                            <label class="name-label" for="name">Name</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>
                        <!-- Input nume -->
                        <div class="input-reviews">
                            <input class="name-input" type="text" name="subject" class="contact-input" required>
                            <label class="name-label" for="subject">Subject</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>
                    </div>
                    <div class="textarea">
                        <textarea cols="30" placeholder="Describe your experience.."></textarea>
                    </div>
                    <div class="submit-btn">
                        <button type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
        btn.onclick = () => {
            widget.style.display = "none";
            post.style.display = "block";
            editBtn.onclick = () => {
                widget.style.display = "block";
                post.style.display = "none";
            }
            return false;
        }
    </script>

    <?php get_footer(); ?>
</body>