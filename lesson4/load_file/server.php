<?php
if (!isset($_FILES['photo']['tmp_name'])) {
    $mas = scandir("files");
    foreach ($mas as $item) {
        echo $item . "<br>";
    }
} else {
    for ($i = 0; $i < count($_FILES['photo']['tmp_name']); $i++) {
        $path = "files/" . $_FILES['photo']['name'][$i];
        if (move_uploaded_file($_FILES['photo']['tmp_name'][$i], $path)) {
            echo $_FILES['photo']['name'][$i] . ' Файл успешно загружен! <br>';
        }
    }
//    print_r($_FILES);
//    $path = "files/" . $_FILES['photo']['name'];
//
//    if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
//        echo $_FILES['photo']['name'] . ' Файл успешно загружен!';
//    }
}
