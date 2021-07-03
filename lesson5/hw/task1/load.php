<?php
include "config.php";

if (!isset($_FILES['image']['tmp_name'])) {

} else {
    for ($i = 0; $i < count($_FILES['image']['tmp_name']); $i++) {
        $sql = "";
        $path = "images/" . $_FILES['image']['name'][$i];
        $sql = "INSERT INTO images(name, seen) VALUES ('" . $_FILES['image']['name'][$i] . "', 0)";

        if (move_uploaded_file($_FILES['image']['tmp_name'][$i], $path)) {
            mysqli_query($connect, $sql);
            echo $_FILES['image']['name'][$i] . ' Файл успешно загружен! <br> <a href="index.php">Вернуться назад</a>';
        }
    }
}
