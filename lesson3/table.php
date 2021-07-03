<?php
$table = "<table border='1px' width=50% height=50% style='text-align: center'>";

for ($i = 1; $i <= 10; $i++) {
    $table.= "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $x = $j * $i;
        $table.= "<td> $x </td>";
    }
    $table.= "</tr>";
}
$table.= "</table>";

echo $table;