<!-- contact.php -->
<form method="post">
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <textarea name="message" placeholder="Message" required></textarea><br>
    <button type="submit" name="envoyer">Envoyer</button>
</form>

<?php
if (isset($_POST['envoyer'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($nom && $email && $message) {
        echo "<p>Merci <strong>$nom</strong>, nous avons bien reçu votre message :<br>$message</p>";
    }
}
?>
