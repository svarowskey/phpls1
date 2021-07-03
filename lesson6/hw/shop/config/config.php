<?php
$server = 'localhost';
$login = 'root';
$pass = '';
$db = 'shop';

$connect = mysqli_connect($server, $login, $pass, $db);

$good_image_path = "../public/images/goods/";
$good_image_thumbs_path = "../public/images/goods/thumbs/";