<?php $page = "contacts";
include 'functions.php';
get_header("Contact Us");
include 'header.php';
?>


<body>

    <main>
        <!-- <div class="hero-wrapper" style = "">
            <img class="whoweare-bg"  src="images/Poze-romanasul/2.Evenimente/1.Spectacole/4.-Zilele-prieteniei/Poza-misto-alb-negru.jpg" />
        </div> -->
        <section class="contact">
            <div class="container-form">
                <div class="right">
                    <div class="form-wrapper-right">

                        <form method="post" action="send-email.php" enctype="multipart/form-data" class="contact-form">

                            <!-- Input prenume -->
                            <div class="input-wrap">
                                <input type="text" name="name" class="contact-input" required>
                                <label for="name">Name</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>
                            <!-- Input nume -->
                            <div class="input-wrap">
                                <input type="text" name="subject" class="contact-input" required>
                                <label for="subject">Subject</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>
                            <!-- Input email -->
                            <div class="input-wrap w-100">
                                <input type="email" name="email" class="contact-input" required>
                                <label for="email">Email</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>
                            <!-- Input mesaj -->
                            <div class="input-wrap textarea w-100">
                                <textarea name="message" class="contact-input" required></textarea>
                                <label for="message">Mesaj</label>
                                <i class="icon fa-solid fa-inbox"></i>
                            </div>

                            <!-- Buton send -->
                            <div class="contact-buttons">
                                <button class="btn upload">
                                    <span>
                                        <i class="fa-solid fa-paperclip"></i>Add attachment
                                    </span>
                                    <input type="file" name="attachment">
                                </button>
                                <input type="submit" value="Send message" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="left">
                    <div class="form-wrapper-left">
                        <button class="button">
                            <div class="icon-holder phone ">
                                <i class="icon-phone fa-solid fa-phone "></i>
                            </div>
                            <div class="button-slide-part"><span>0751356714</span></div>
                        </button>
                        <button class="button">
                            <div class="icon-holder dot">
                                <a href="https://www.google.com/maps/place/Club+Studen%C8%9Besc+Observator/@46.7573198,23.5914802,15.5z/data=!4m6!3m5!1s0x47490dd2962f95b7:0x5d0e80ba58cb06fe!8m2!3d46.7560631!4d23.5932852!16s%2Fg%2F11hb84yxfv?entry=ttu"><i class="icon-dot fa-solid fa-location-dot"></i></a>
                            </div>
                            <div class="button-slide-part"></div>
                        </button>
                        <div class="button-globe">
                            <input type="checkbox" id="check" />
                            <label class="button-media globe" for="check">
                                <i class="icon-globe fa-solid fa-globe"></i>
                            </label>
                            <div class="media-icons">
                                <a href="https://www.facebook.com/AnsamblulFolcloricRomanasul"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</body>