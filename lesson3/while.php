<?php
$i = 1;
$list = "<ul>";
while($i <= 10) {
    $list.="<li>Элемент №$i</li>";
    $i++;
}
$list.="</ul>";

echo $list;