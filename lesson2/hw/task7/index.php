<?php
$hours = date('G');
$minutes = date('i');

echo $hours . " " . getHours($hours) . " " . $minutes . " " . getMinutes($minutes) . "<br>";

/**Функция склоняет слово часы
 * @param $hours
 * @return string Возвращает слово с правильным склонением по часам
 */
function getHours($hours) {
    switch ($hours) {
        case 1:
        case 21:
            return 'час';
            break;
        case 2:
        case 3:
        case 4:
        case 22:
        case 23:
            return 'часа';
            break;
        default:
            return 'часов';
            break;
    }
}

/**Функция склоняет слово минуты
 * @param $minutes
 * @return string Возвращает слово с правильным склонением по минутам
 */
function getMinutes($minutes) {
    if ($minutes >= 11 && $minutes <= 15) {
        return "минут";
    }
    switch ($minutes % 10) {
        case 2:
        case 3:
        case 4:
            return "минуты";
            break;
        case 1:
            return "минута";
            break;
        default:
            return "минут";
            break;
    }
}
