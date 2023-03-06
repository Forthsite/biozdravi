<?php

if(isset($_POST['submit'])) {

    // Get the form data
    $name = $_POST['uzivatel'];
    $email = $_POST['email'];
    $message = $_POST['zprava'];

    // Create the email message
    $to = "produkceforthsite@email.cz";
    $subject = "Nová objednávka (test webu bioanalyza)";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    if(mail($to, $subject, $body)) {
        echo "Thank you for your message!";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }

}
?>