<?php
$num1 = ($_POST["number1"]);
$num2 = ($_POST["number2"]);
if(isset($_POST['add'])) {
    $sum = $num1 + $num2;
    echo "Addition:" ."$num1"."+"."$num2"."=".$sum;
}
elseif(isset($_POST['sb'])) {
       $sb = $num1 - $num2;
    echo "Substraction:". "$num1"."-"."$num2"."=". $sb;
}
elseif(isset($_POST['mult'])) {
       $mult = $num1 * $num2;
    echo "Multiplication:". "$num1"."*"."$num2" ."=". $mult;
}
elseif(isset($_POST['div'])) {
      $div = $num1 / $num2;
    echo "Division:"."$num1"."/"."$num2"."=". $div;
}
elseif(isset($_POST['mod'])) {
       $mod = $num1 % $num2;
    echo "Modulus:". "$num1"."%"."$num2"."=". $mod;
}
else {
    echo "choose Operator";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="number1" placeholder="Enter number 1"> <br>
        <input type="number" name="number2" placeholder="Enter number 2"> <br>
        <button type="submit" name="add">+</button>
        <button type="submit" name="sb">-</button>
        <button type="submit" name="mult">*</button>
        <button type="submit" name="div">/</button>
        <button type="submit" name="mod">%</button>
    </form>
</body>
</html>