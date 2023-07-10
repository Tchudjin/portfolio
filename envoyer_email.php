<?php
ini_set('SMTP', 'localhost');
ini_set('smtp_port', 1025);

// Destinataire et expéditeur
$to = 'tgentianeleslie@gmail.com';
$from = 'expediteur@.com';
$subject = 'Test d\'email en PHP';
$message = 'Ceci est un test d\'email en PHP.';

// Créer l'en-tête de l'e-mail
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoyer l'e-mail
if (mail($to, $subject, $message, $headers)) {
    echo 'Email envoyé avec succès.';
} else {
    echo 'Erreur lors de l\'envoi de l\'email.';
}
