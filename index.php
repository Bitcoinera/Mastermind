<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Rock - Paper - Scissors</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
</head>

<body>

<div>
    <h1 class="title">MASTERMIND:</h1>
    <h2 class="title">UN JUEGO DE MUERTOS Y HERIDOS</h1>
    <h3>REGISTRO DE JUGADAS</h3>
    <?php

    function gen_rand_number() {
        $GLOBALS['rand_number'] = rand(1000,9999);
        echo "Numero: " . $GLOBALS['rand_number'];
    }

    gen_rand_number();
    ?>

    <form action="#" method="post">
    <?php

    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    $message = "";
    if (isset($_POST['submitButton'])){ //check if form was submitted
        $num1 = $_POST['num1']; 
        $num2 = $_POST['num2']; 
        $num3 = $_POST['num3'];
        $num4 = $_POST['num4'];
        $message = "Success! You entered: ". $num1 . $num2 . $num3 . $num4;
        echo $message;
        echo "<hr>";
        $rand_num_str = strval($GLOBALS['rand_number']);

        $num_arr = array($num1, $num2, $num3, $num4);
        $hurts = 0; // number of 'heridos'
        $deads = 0; // number of 'muertos'
        $rand_num_arr = str_split($rand_num_str);

        foreach ($num_arr as &$value) {
            if (strpos($rand_num_str, $value) !== false) {
                $hurts++;

                $key = array_search($value, $rand_num_arr);

                if ($num_arr[$key] === $value) {
                    $deads++;
                }
            } 
        }

        echo "Heridos hay " . $hurts . "<br>";
        echo "Muertos hay " . $deads . "<br>";
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