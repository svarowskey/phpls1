<?php
include_once "config.php";
$tpl = file_get_contents("showidpic.tpl");
$id = $_GET['id'];
$sql = "";
$sqlUpdate = "UPDATE images SET seen = seen + 1 WHERE id = $id";
$result = mysqli_query($connect, $sql);