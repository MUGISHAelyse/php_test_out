<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <button type="button" name="addition">+</button>
        <button type="button" name="substration">-</button>
        <button type="button"  name="division">/</button>
        <button type="button" name="multiplication">*</button>
    </form>
</body>
</html>
<?php
    $number1 =56;
    $number2 = 67;

if(isset($_POST['addition'])){
    echo $number1 + $number2; 
}elseif(isset($_POST['substration'])){
    echo $number1-$number2;
}elseif(isset($_POST['division'])){
    echo $number1/$number2;
}elseif(isset($_POST['multiplication'])){
    echo $number1*$number2;
}else{
    echo "enter number";
};
?>