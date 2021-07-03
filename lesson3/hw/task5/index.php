<?php
$str = "Написать функцию, которая заменяет в строке на подчеркивания и возвращает видоизмененную строчку.";

echo changeStr($str);

/**Функция заменяет в строке пробелы на подчеркивания
 * @param $str
 * @return string Возвращает видоизмененную строку
 */
function changeStr($str) {
    $newStr = str_ireplace(" ", "_", $str);
    return $newStr;
}