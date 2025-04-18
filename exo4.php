<!-- login.php -->
<?php session_start(); ?>
<form method="post">
    <input type="text" name="user" placeholder="Identifiant" required><br>
    <input type="password" name="pass" placeholder="Mot de passe" required><br>
    <button type="submit" name="login">Connexion</button>
</form>

<?php
$valid_user = "assia";
$valid_pass = "1234";

if (isset($_POST['login'])) {
    if ($_POST['user'] === $valid_user && $_POST['pass'] === $valid_pass) {
        $_SESSION['user'] = $_POST['user'];
        header("Location: bienvenue.php");
        exit();
    } else {
        echo "Identifiants incorrects.";
    }
}
?>
