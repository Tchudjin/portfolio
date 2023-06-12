<?php
if(isset($_POST['email'])) {

    // variables pour le message
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = "Nouveau message de formulaire de contact";
    $message = $_POST['message'];

    // headers pour l'e-mail
    $headers = "From: $nom <$email> \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-type: text/plain; charset=utf-8 \r\n";

    // envoi de l'e-mail
    $to = "tgentianeleslie@gmail.com"; // remplacer par votre adresse e-mail
    mail($to, $sujet, $message, $headers);

    // message de confirmation
    echo "Merci de nous avoir contacté. Nous vous répondrons dans les plus brefs délais.";
}
?>
