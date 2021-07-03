<?php

require_once '../config/config.php';

if (isset($_POST['add-response'])) {
    $name = strip_tags($_POST['name']);
    $response = strip_tags($_POST['response']);
    $sql = "INSERT INTO responses (`name`, `response`) VALUES ('$name', '$response')";
    mysqli_query($connect, $sql);
    header("Location: {$_SERVER['REQUEST_URI']}");
}

if (isset($_POST['response_del'])) {
    $response_id = (int)$_POST['response_id'];
    $sql = "DELETE FROM responses WHERE id='$response_id'";
    mysqli_query($connect, $sql);
    header("Location: {$_SERVER['REQUEST_URI']}");
}

$sql = "SELECT * FROM responses";

$responses = mysqli_query($connect, $sql);

$title = 'Отзывы';
$activeLink = 'response.php';
require_once '../templates/header.php';

echo "<div class='response-wrapper'>";

while($response = mysqli_fetch_assoc($responses)) {

    echo "<div class='response'>
            <span class='response-title'>{$response['name']}</span><br>
            <form method='post' class='response-button'>
                <input type='hidden' name='response_id' value='{$response['id']}'>
                <input type='submit' name='response_del' value='' class='response_del'>
            </form>
            <div class='response-text'>{$response['response']}</div>
          </div>";
}

echo "</div>";

require '../parts/response-form.php';

require_once '../templates/footer.php';