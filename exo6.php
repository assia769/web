<!-- quiz.php -->
<form method="post">
    <p>1. La capitale du Maroc ?<br>
        <input type="radio" name="q1" value="Rabat" required> Rabat
        <input type="radio" name="q1" value="Casablanca"> Casablanca
    </p>
    <p>2. 2 + 2 = ?<br>
        <input type="radio" name="q2" value="3" required> 3
        <input type="radio" name="q2" value="4"> 4
    </p>
    <p>3. Langage web côté serveur ?<br>
        <input type="radio" name="q3" value="PHP" required> PHP
        <input type="radio" name="q3" value="HTML"> HTML
    </p>
    <button type="submit" name="valider">Valider</button>
</form>

<?php
if (isset($_POST['valider'])) {
    $score = 0;
    $reponses = [
        'q1' => 'Rabat',
        'q2' => '4',
        'q3' => 'PHP'
    ];
    foreach ($reponses as $question => $bonneReponse) {
        if (isset($_POST[$question]) && $_POST[$question] == $bonneReponse) {
            $score++;
        }
    }
    echo "<p>Score : $score / " . count($reponses) . "</p>";
}
?>
