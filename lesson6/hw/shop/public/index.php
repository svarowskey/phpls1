<?php
include "../config/config.php";
require_once '../models/goods.php';
$title = "Каталог товаров";
$activeLink = 'index.php';
include "../templates/header.php";
echo showItems();
include "../templates/footer.php";