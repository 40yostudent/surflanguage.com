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
                $mail->Username = 'phpmailer@surflanguage.com';       // SMTP username
                $mail->Password = 'nikzyT-cegfeb-2wejde';             // SMTP password
                $mail->SMTPAutoTLS = false;                           // Required to work, for now
                $mail->SMTPSecure = 'false';                          // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 25;                                     // TCP port to connect to

                // Recipients
                // $mail->setFrom($_POST['email'], $_POST['name']);
                $mail->setFrom('mailer@surflanguage.com', 'Form di contatto');
                $mail->addAddress('support@qmill.eu');
                $mail->addReplyTo($_POST['email'], $_POST['name']);
                $mail->addBCC('support@qmill.eu');

                // Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                     // Set email format to HTML
                $mail->Subject  = 'Form inviato da '.$_POST['name'];
                $mail->Body     = 'Nome: <b>'.$_POST['name'].'</b><br>';
                $mail->Body    .= 'Viaggio: <b>'.$_POST['travel'].'</b><br>';
                $mail->Body    .= 'Genere: <b>'.$_POST['gender'].'</b><br>';
                $mail->Body    .= 'Data di nascita: <b>'.$_POST['birth-date'].'</b><br>';
                $mail->Body    .= 'Città: <b>'.$_POST['city'].'</b><br>';
                $mail->Body    .= 'Paese: <b>'.$_POST['country'].'</b><br><br>';
                $mail->Body    .= 'Messaggio: '.$_POST['message'];
                $mail->AltBody  = 'Nome: '.$_POST['name'].PHP_EOL;
                $mail->AltBody .= 'Viaggio: '.$_POST['travel'].PHP_EOL;
                $mail->AltBody .= 'Genere: '.$_POST['gender'].PHP_EOL;
                $mail->AltBody .= 'Data di nascita: '.$_POST['birth-date'].PHP_EOL;
                $mail->AltBody .= 'Città: '.$_POST['city'].PHP_EOL;
                $mail->AltBody .= 'Paese: '.$_POST['country'].PHP_EOL;
                $mail->AltBody .= PHP_EOL;
                $mail->AltBody .= 'Messaggio:'.PHP_EOL.$_POST['message'];

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