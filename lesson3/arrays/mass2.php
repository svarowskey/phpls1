<?php

$cars = ["Audi" =>
            ["price" => 1000, "color" => "black"],
        "BMW" =>
            ["price" => 1200, "color" => "white"],
        "VW" =>
            ["price" => 900, "color" => "grey"]];
//print_r($cars);

foreach ($cars as $key => $car) {
    echo "Автомобиль $key цвета $car[color] стоит $car[price]" . "<br>";
}

