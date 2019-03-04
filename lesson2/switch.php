<?php
$day = date("w");

switch ($day) {
    case 0:
    case 6:
        echo "Выходной день";
        break;
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Будний день";
        break;
    default:
        echo "Введён некорректный день";
        break;
}