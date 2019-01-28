<?php 
    if( isset($_POST['travel']) && !empty($_POST['travel']) &&
        isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['gender']) && !empty($_POST['gender']) &&
        isset($_POST['birth-date']) && !empty($_POST['birth-date']) &&
        isset($_POST['city']) && !empty($_POST['city']) &&
        isset($_POST['country']) && !empty($_POST['country']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['message']) && !empty($_POST['message']) ) {
        $to = 'support@qmill.eu, giugeo85@mac.com, giugeo85@gmail.com, giugeo85@yahoo.it';
        $from = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message']; // AGGIUNGERE I VARI CAMPI AL CORPO DEL MESSAGGIO

        $headers = "From:" . $from;
        mail($to, "Mail from" . " " . $name, $message, $headers);
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
                <p style="color: red;">UNDER MAINTENANCE - for any further query please write to <a class="maintenance" href="mailto:info@surflanguage.com">info@surflanguage.com</a> rather then filling the form.<br>
                We apologise for the inconvenience.</p>
                <h6>Please, select the vacation type and fill the form. </h6>
            
            <div id="contact-form" class="block">

                <form action="../contacts.php#contact-form" method="post" id="contact-form-form"> <!-- LINKARE ALTEZZA GIUSTA DELLA PAGINA -->
                    <select name="travel" placeholder="Request of information for (Select)">
                        <option>Galles 1</option>
                        <option>Galles 2</option>
                        <option>Galles 3</option>
                        <option>Galles 4</option>
                        <option>Galles 5</option>
                        <option>France 1</option>
                        <option>France 2</option>
                        <option>France 3</option>
                        <option>Spain 1</option>
                        <option>Spain 2</option>
                        <option>Spain 3</option>
                        <option>Hawaii</option>
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
