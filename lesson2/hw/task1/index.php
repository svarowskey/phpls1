<?php
$a = 3;
$b = -6;

if ($a >= 0 && $b >= 0) {
    echo $a - $b;                   //Если $a и $b положительные, выводим разность переменных
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;                   //Если $a и $b отрицательные, выводим произведение переменных
} else {
    echo $a + $b;                   //Если $a и $b разных знаков, выводим сумму переменных
}