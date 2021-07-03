<?php
$day = date("w");
if ($day == 6 || $day == 0) {
    echo "Выходной день";
} elseif ($day > 0 && $day < 6) {
    echo "Будний день";
} else {
    echo "Введен некорректный день недели";
}

$x = 10;
if (true) {
    if ($x > 10) {
        $x++;
    }
    else {
        if ($x < 15) {
            $x*=2;
            if ($x < 20) {
                $x++;
            }
            $x+=2;
        }
        if (10) {
            $x++;
        }
    }
    $x++;
}