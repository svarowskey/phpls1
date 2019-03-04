<?php

/**Функция возводит число $val в степень $pow
 * @param $val
 * @param $pow
 * @return int возвращает результат возведения числа $val в степень $pow
 */
function power($val, $pow) {
    if (!$pow) return 1;
    else return $val * power($val, $pow - 1);
}

echo power(2, 8);