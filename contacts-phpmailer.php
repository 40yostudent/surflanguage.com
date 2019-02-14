<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    if( isset($_POST['travel']) && !empty($_POST['travel']) &&
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['gender']) && !empty($_POST['gender']) &&
        isset($_POST['birth-date']) && !empty($_POST['birth-date']) &&
        isset($_POST['city']) && !empty($_POST['city']) &&
        isset($_POST['country']) && !empty($_POST['country']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['message']) && !empty($_POST['message']) ) {

            // -------------- PHPMailer() ----------------------//
            // -------------------------------------------------//

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'localhost';                            // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'mailer@surflanguage.com';          // SMTP username
                $mail->Password = 'nikzyT-cegfeb-2wejde';             // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                // Recipients
                // $mail->setFrom($_POST['email'], $_POST['name']);
                $mail->setFrom('mailer@surflanguage.com');
                $mail->addAddress('support@qmill.eu');
                $mail->addAddress('giugeo85@mac.com');
                $mail->addAddress('giugeo85@gmail.com');
                $mail->addAddress('giugeo85@yahoo.it');
                $mail->addReplyTo('support@qmill.eu', 'QMill Support');
                $mail->addCC('giugeo85@gmail.com');
                $mail->addBCC('giugeo85@yahoo.it');

                // Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        // $to = 'support@qmill.eu, giugeo85@mac.com, giugeo85@gmail.com, giugeo85@yahoo.it';
        // $from = $_POST['email'];
        // $name = $_POST['name'];
        // $message = $_POST['message']; // AGGIUNGERE I VARI CAMPI AL CORPO DEL MESSAGGIO

        $form_button_label = "Mail Sent!";
    } else {
        $form_button_label = "Submit";
    }
?>

<?php include("first.php"); ?>

<main>

    <div id="contact-us">

        <?php include("header.php"); ?>
        
        <div id="contact-text" class="block">
           
                <h2>Contact Us</h2>
                <p>If you are interested in receiving more information or booking a vacation, please fill the form.</p>
                <p style="color: red;">UNDER MAINTENANCE - for any further query please write to <a class="maintenance" href="mailto:info@surflanguage.com">info@surflanguage.com</a></p>
            
            <div id="contact-form" class="block">

                <form action="../contacts-phpmailer.php#contact-form" method="post" id="contact-form-form"> <!-- LINKARE ALTEZZA GIUSTA DELLA PAGINA -->
                    <select name="travel" placeholder="Request of information for (Select)">
                        <option>Galles 1</option>
                        <option>Galles 2</option>
                        <option>Galles 3</option>
                        <option>Galles 4</option>
                        <option>Galles 5</option>
                        <option>Arcachon 1</option>
                        <option>Arcachon 2</option>
                        <option>Arcachon 3</option>
                        <option>Somo 1</option>
                        <option>Somo 2</option>
                        <option>Somo 3</option>
                        <option>Honolulu</option>
                    </select>
                    <input type="text" name="name" placeholder="Name" required><br>
                    <input type="text" name="gender" placeholder="Gender" required><br>
                    <input type="text" name="birth-date" placeholder="Date of birth" required><br>
                    <input type="text" name="city" placeholder="City" required><br>
                    <input type="text" name="country" placeholder="Country" required><br>
                    <input type="text" name="email" placeholder="E-mail" required><br>
                    <textarea name="message" placeholder="Your message..." required></textarea>
                    <button type="submit" form="contact-form-form" value="submit"><?php echo $form_button_label ?></button>
                </form>

            </div>

        </div>

    </div>

</main>

<?php include("footer.php"); ?>