<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $description = htmlspecialchars($_POST['description']);

    $to = "votre-email@example.com"; // Remplacez par votre adresse e-mail
    $subject = "Demande d'estimation de bien";
    $message = "Nom: $nom\nEmail: $email\nTéléphone: $telephone\nAdresse du bien: $adresse\nDescription: $description";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Merci, votre demande a été envoyée avec succès.</p>";
    } else {
        echo "<p>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
}
?>
