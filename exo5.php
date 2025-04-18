<!-- guestbook.php -->
<form method="post">
    <input type="text" name="nom" placeholder="Nom" required><br>
    <textarea name="message" placeholder="Message" required></textarea><br>
    <button type="submit" name="envoyer">Envoyer</button>
</form>

<?php
$filename = "livredor.txt";

if (isset($_POST['envoyer'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $msg = htmlspecialchars($_POST['message']);
    $date = date("Y-m-d H:i:s");
    $entry = "$date | $nom : $msg\n";
    file_put_contents($filename, $entry, FILE_APPEND);
}

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        echo "<p>$line</p>";
    }
}
?>
