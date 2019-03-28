<?php

function getResult() {
    $result = 'Результат: ';
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    switch ($_POST['operation']) {
        case "*":
            $result .= $num1 * $num2;
            break;
        case "/":
            if ($num1 === 0 || $num2 ===0) {
                $result = "Деление на ноль!";
                break;
            }
            $result .= $num1 / $num2;
            break;
        case "-":
            $result .= $num1 - $num2;
            break;
        case "+":
            $result .= $num1 + $num2;
            break;
    }
    return $result;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <label for="num1">Число 1</label>
    <input type="text" name="num1" id="num1">

    <label for="num1">Число 2</label>
    <input type="text" name="num2" id="num2">
    <br>
    <br>
    <input type="submit" name="operation" value="*" style="padding: 0 20px">
    <input type="submit" name="operation" value="/" style="padding: 0 20px">
    <input type="submit" name="operation" value="-" style="padding: 0 20px">
    <input type="submit" name="operation" value="+" style="padding: 0 20px">

    <br>
    <hr>
    <?echo getResult()?>

</form>
</body>
</html>
