<?php
/**Функция суммирует две переменные
 * @param $a int
 * @param $b int
 * @return int возвращает сумму двух переменных
 */
function plus($a, $b) {
    return $a + $b;
}

/**Функция вычитает разность двух переменных
 * @param $a int
 * @param $b int
 * @return int возвращает разность двух переменных
 */
function minus($a, $b) {
    return $a - $b;
}

/**Функция считает произведение двух переменных
 * @param $a
 * @param $b
 * @return int возвращает произведение двух переменных
 */
function multy($a, $b) {
    return $a * $b;
}

/**Функция делит переменную $a на $b
 * @param $a
 * @param $b
 * @return int возвращает результат деления двух чисел
 */
function del($a, $b) {
    return $a / $b;
}

/**Функция производит математические операции
 * @param $arg1
 * @param $arg2
 * @param $operation "plus", "minus", "multy", "del"
 */
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "plus":
            echo plus($arg1, $arg2);
            break;
        case "minus":
            echo minus($arg1, $arg2);
            break;
        case "multy":
            echo multy($arg1, $arg2);
            break;
        case "del":
            echo del($arg1, $arg2);
            break;
    }
}