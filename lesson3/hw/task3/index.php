<?php
$arr = ["Московская область" =>
            ["Москва", "Зеленоград", "Клин"],
        "Ленинградская область" =>
            ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
        "Рязанская область" =>
            ["Рязань", "Спасск-Рязанский", "Ряжск", "Касимов"]];

foreach ($arr as $key => $value) {
    echo "<h1>$key</h1> <br>";
    for ($i = 0; $i < count($value); $i++) {
        echo $value[$i] . "<br>";
    }
}