<?php
$mas = ["Казань", "Астрахань", "Волгоград"];
//echo "<ul>";
//for ($i = 0; $i < count($mas); $i++) {
//    echo "<li>" . $mas[$i] . "</li>";
//}
//echo "</ul>";

$str = implode(", ", $mas);

echo  $str . "<br>";

$arr = explode(", ", $str);

var_dump($arr);