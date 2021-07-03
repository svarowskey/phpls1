<?php
include_once "config.php";

$path = "images/";
$sql = "SELECT * FROM images";
$result = mysqli_query($connect, $sql);
$images = '';
while ($data = mysqli_fetch_assoc($result)) {
    $images .= "<a href='#'><img class='gallery__image' id='image_" . $data['id_image'] . "' src='" . $path . $data['name'] . "' /></a>";
}
echo $images;