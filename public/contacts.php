<?php $page = "contacts";
include 'functions.php';
get_header("Contact Us");
include 'header.php';
?>


<body>

    <main>
        <section class="contact">
            <div class="container-form">
                <div class="right">
                    <div class="form-wrapper-right">
                        <!-- <div class="contact-heading">
                        <h1>Colaboram <span>!</span></h1>
                        <p class="text">Contactati-ne prin email: <a href="mailto:">revnic2002@yahoo.com</a></p>
                    </div> -->

                        <form action="index.html" method="post" class="contact-form">

                            <!-- Input prenume -->
                            <div class="input-wrap">
                                <input type="text" name="Prenume" class="contact-input" required>
                                <label>Prenume</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>
                            <!-- Input nume -->
                            <div class="input-wrap">
                                <input type="text" name="Nume" class="contact-input" required>
                                <label>Nume</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>
                            <!-- Input email -->
                            <div class="input-wrap w-100">
                                <input type="email" name="Email" class="contact-input" required>
                                <label>Email</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>
                            <!-- Input mesaj -->
                            <div class="input-wrap textarea w-100">
                                <textarea name="Mesaj" class="contact-input" required></textarea>
                                <label>Mesaj</label>
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
                            <div class="icon-holder">
                                <i class="icon fa-solid fa-phone"></i>
                            </div>
                            <div class="button-slide-part"><span>0751356714</span></div>
                        </button>
                        <button class="button">
                            <div class="icon-holder"><i class="icon fa-solid fa-location-dot"></i></div>
                            <div class="button-slide-part"><span>0751356714</span></div>
                        </button>
                        <button class="button">
                            <div class="icon-holder"><i class="icon fa-solid fa-globe"></i></div>
                            <div class="button-slide-part"><span>0751356714</span></div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</body>