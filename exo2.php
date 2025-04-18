<form method="post">
    <input type="text" name="nom" placeholder="nom" required>
    <input type="text" name="email" placeholder="email" required>
    <textarea name="message" placeholder="message" required></textarea><br>
     <button type="submit" name="envoyer">Envoyer</button>
</form>
<?php
if(isset($_POST['envoyer'])){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    if($nom && $email && $message){
        echo "<p>Merci <strong> $nom </strong> Nous avons bien reçu votre message : <br> $message </p>";
    }

}
?>