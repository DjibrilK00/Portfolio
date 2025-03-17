<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // L'adresse email de destination (celle où vous souhaitez recevoir le message)
    $to = "kantedjibril00@gmail.com";

    // Entête de l'email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Corps de l'email (ce qui sera envoyé)
    $body = "<h2>Message de contact</h2>";
    $body .= "<p><strong>Nom:</strong> " . $name . "</p>";
    $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    $body .= "<p><strong>Sujet:</strong> " . $subject . "</p>";
    $body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Email envoyé avec succès !</p>";
    } else {
        echo "<p>Erreur lors de l'envoi de l'email.</p>";
    }
}
?>
