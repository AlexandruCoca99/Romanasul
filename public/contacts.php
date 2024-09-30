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
                    <div class="contact-card">
                        <h2>Contact Information</h2>

                        <div class="contact-details">
                            <p><i class="fa fa-phone"></i> (+40) 0751356714</p>
                            <p><i class="fa fa-envelope"></i> neneaLuci@romanasul.ro</p>
                            <p><i class="fa fa-map-marker"></i> Observator Student Complex, Strada Observatorului 34, Cluj-Napoca</p>
                        </div>

                        <div class="social-icons">
                            <h3>Find us on social media</h3>
                            <a href="https://www.facebook.com/AnsamblulFolcloricRomanasul?locale=ro_RO"><i class="fa-brands fa-facebook fa-lg"></i></a>
                            <a href="https://www.instagram.com/romanasul.utcluj/"><i class="fa-brands fa-instagram fa-lg"></i></a>
                            <a href="https://www.youtube.com/@romanasulutcn853"><i class="fa-brands fa-youtube fa-lg"></i></a>
                            <a href="https://www.tiktok.com/@romanasul.utcluj"><i class="fa-brands fa-tiktok fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include 'footer.php';
    get_footer();
    ?>
</body>