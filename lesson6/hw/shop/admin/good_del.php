<?php
require_once '../models/goods.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    good_del($id);
    header("Location: {$_SERVER['HTTP_REFERER']}");
}