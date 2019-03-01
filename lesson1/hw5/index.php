<?php
$a = 2;
$b = 5;
list($a, $b) = [$b, $a];
echo "a: ". $a . "b: " . $b;