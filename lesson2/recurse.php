<?php
function f($n) {
    if ($n == 0) return;
    echo $n . "<br>";
    f($n-1);
}


f(5);