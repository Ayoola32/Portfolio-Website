<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require "includes/db.php";
// require "includes/header.php";
// require "includes/navigation.php";
require "vendor/autoload.php";
// require "classes/config.php";

$message = '';
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<h4 class='alert alert-danger text-center'>Invalid email format</h4>";
    } else {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'aabubakarsidiqq@gmail.com';
            $mail->Password = 'ynsq yqtr qyix tbtd';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addReplyTo($email, $name);
            $mail->addAddress('aabubakarsidiqq@gmail.com'); //enter you email address

            //Content
            $mail->isHTML(true);
            $mail->Subject = "$email ($subject)" . " From: Portfolio-Contact";
            $mail->Body = $message;
            $mail->AltBody = strip_tags($message);

            $mail->send();
            $message = "<h4 class='alert alert-success text-center'>Message Sent Successfully</h4>";
            header("Location: " . $_SERVER['PHP_SELF'] . "#contact");
            exit;
        } catch (Exception $e) {
            $message = "<h4 class='alert alert-danger text-center'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h4>";
        }
    }
}



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

        <form action="#contact" method="post" class="contact__form grid">
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
                    <!-- Correct submit button -->
                <button type="submit" name="submit" class="button button--flex">
                    Send Message
                    <i class="uil uil-message button__icon"></i>
                </button>

                </div>

        </form>
    </div>
</section>