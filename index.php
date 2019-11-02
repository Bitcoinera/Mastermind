<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Rock - Paper - Scissors</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>

<body>

<div>
    <h1>MASTERMIND JUEGO DE LOS MUERTOS Y HERIDOS</h1>
    <h2>REGISTRO JUGADAS</h2>
<?php

function gen_rand_number() {
    $rand_number = rand(1000,9999);
    echo "Numero: " . $rand_number;
}

gen_rand_number();
?>

<!-- <form action="welcome.php" method="get"> -->
<form action="#" method="post">
<?php
$message = "";
if(isset($_POST['submitButton'])){ //check if form was submitted
  $input = $_POST['num1']; //get input text
  $message = "Success! You entered: ". $input;
  echo $message;
  echo "<hr>";
}
?>
    <label for="num1">Introduce el número</label>
    <input type="number" name="num1" size="1" maxlength="1" min="0" max="9" value="0">
    <input type="number" name="num2" size="1" maxlength="1" min="0" max="9" value="0">
    <input type="number" name="num3" size="1" maxlength="1" min="0" max="9" value="0">
    <input type="number" name="num4" size="1" maxlength="1" min="0" max="9" value="0">
    <input type="submit" name="submitButton" value="Enviar">
</form>
</div>
</body>