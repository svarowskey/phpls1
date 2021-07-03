<?php
$url = "http://site.ru/test/mail.php";
$mas = pathinfo($url);
echo $mas["basename"];