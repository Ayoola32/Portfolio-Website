<?php

?>

<section class="contact section" id="contact">
    <h2 class="section__title">Contact Me</h2>
    <span class="section__subtitle">Get in touch</span>

    <div class="contact__container container grid">
        <div>
            <div class="contact__information">
                <i class="uil uil-phone contact__icon"></i>
                <div>
                    <h3 class="contact__title">Call Me</h3>
                    <span class="contact__subtitle">+44 744 283 1743</span>
                </div>
            </div>
            <div class="contact__information">
                <i class="uil uil-envelope contact__icon"></i>
                <div>
                    <h3 class="contact__title">Email</h3>
                    <span class="contact__subtitle">aabubakarsidiqq@gmail.com</span>
                </div>
            </div>
            <div class="contact__information">
                <i class="uil uil-map-marker contact__icon"></i>
                <div>
                    <h3 class="contact__title">Location</h3>
                    <span class="contact__subtitle">Manchester - United Kingdom</span>
                </div>
            </div>
        </div>

        <form action="" method="post" class="contact__form grid">
            <?php echo $message?>
            <div class="contact__inputs grid">
                <div class="contact__content">
                    <label for="" class="contact__label">Name</label>
                    <input type="text" name="name" class="contact__input">
                </div>
                <div class="contact__content">
                    <label for="email" class="contact__label">Email</label>
                    <input type="email" name="email" class="contact__input">
                </div>
            </div>
                <div class="contact__content">
                    <label for="" class="contact__label">Subject</label>
                    <input type="text" name="subject" class="contact__input">
                </div>
                <div class="contact__content">
                    <label for="" class="contact__label">Message</label>
                    <textarea name="message" id="" rows="7" class="contact__input"></textarea>
                </div>

                <!-- <div>
                    <input type="submit" name="submit"  class="button button--flex" value="Send Message">
                    <a href="#contact" class="button button--flex" type="submit" name="submit">
                        Send Message
                        <i class="uil uil-message button__icon"></i>
                    </a>
                </div> -->
                <div>
                    <a href="#contact" type="submit" name="submit" class="button button--flex">
                        Send Message
                        <i class="uil uil-message button__icon"></i>
                    </a>
                </div>

        </form>
    </div>
</section>