<?php
$data = file_get_contents("https://www.bbc.com/news");
file_put_contents("test.php", $data);