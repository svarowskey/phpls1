<?
include ("config.php");
$id = $_GET['id'];
$price = $_GET['price'];
$sql = "update shop set price = $price where id = $id";
if (mysqli_query($connect, $sql)) {
    echo "Data success saved!";
}