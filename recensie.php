<?php
$naam = $_POST['naam'];
$email = $_POST['email'];
$recensie = $_POST['recensie'];


if (empty($naam) || empty($email) || empty($recensie)) {
    echo "Alle velden zijn verplicht!";
    exit;
}


$to = "owen.schepers@gmail.com";
$subject = "Nieuwe recensie van $naam";
$message = "Naam: $naam\nEmail: $email\nRecensie:\n$recensie";
$headers = "From: $email";

if (mail($to, $subject, $message, $headers)) {
    echo "Bedankt voor je recensie!";
} else {
    echo "Er is een fout opgetreden bij het verzenden. Probeer het opnieuw.";
}
?>
