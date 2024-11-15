<?php
// Ontvang de data uit het formulier
$naam = $_POST['naam'];
$email = $_POST['email'];
$recensie = $_POST['recensie'];

// Valideer de gegevens (optioneel)
if (empty($naam) || empty($email) || empty($recensie)) {
    echo "Alle velden zijn verplicht!";
    exit;
}

// Stuur de gegevens via e-mail
$to = "jouw_email@voorbeeld.com"; // Vervang met je eigen e-mailadres
$subject = "Nieuwe recensie van $naam";
$message = "Naam: $naam\nEmail: $email\nRecensie:\n$recensie";
$headers = "From: $email";

if (mail($to, $subject, $message, $headers)) {
    echo "Bedankt voor je recensie!";
} else {
    echo "Er is een fout opgetreden bij het verzenden. Probeer het opnieuw.";
}
?>
