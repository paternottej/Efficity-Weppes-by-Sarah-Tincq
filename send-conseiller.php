<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $message = htmlspecialchars($_POST['message']);

    // Traitement du fichier CV
    $cv = $_FILES['cv'];
    $cv_path = 'uploads/' . basename($cv['name']);
    move_uploaded_file($cv['tmp_name'], $cv_path);

    $to = "votre-email@example.com"; // Remplacez par votre adresse e-mail
    $subject = "Candidature pour Conseiller Immobilier";
    $email_message = "Nom: $nom\nEmail: $email\nTéléphone: $telephone\nMessage: $message\nCV: $cv_path";
    $headers = "From: $email";

    if (mail($to, $subject, $email_message, $headers)) {
        echo "<p>Merci, votre candidature a été envoyée avec succès.</p>";
    } else {
        echo "<p>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
}
?>
