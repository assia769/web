<form method="post">
    <input type="number" name="num1" required>
    <select name="operation">
        <option value="+">Addition </option>
        <option value="-">Soustraction </option>
        <option value="*">Multiplication </option>
        <option value="/">division</option>

    </select>
    <input type="number" name="num2" required>
    <button type="Submit" name="submit">Calculer</button>

</form>
<?php
if(isset($_POST['submit'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operation'];
    $res = 0;
    switch($op){
        case '+':$res =$a+$b;break;
        case '-':$res =$a-$b;break;
        case '*':$res =$a*$b;break;
        case '/':$res =($b!=0) ? $a/$b:"division par zero !";
        break;
  
    }
    echo "resultat : $res";

}
?>