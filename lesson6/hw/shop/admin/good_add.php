<?php
require_once '../models/goods.php';
require_once '../models/image.php';

if (isset($_POST['add'])) {
    image_resize($img_path_temp, $img_path_thumbs . $fileName, $imgWidth);
    move_uploaded_file($img_path_temp, $img_path);

    good_add(strip_tags($_POST['title']), strip_tags($_POST['price']), strip_tags($fileName),
        strip_tags($_POST['info']), strip_tags($_POST['descr']));
    header("Location: index.php");
}
$title = 'Добавление товара';
require_once '../templates/admin_header.php'?>

    <form enctype="multipart/form-data" method="post" class="form-edit">
        <br>
        <p>Добавить товар</p>
        <label for="title">Название товара</label>
        <input type="text" name="title" value="" id="title">
        <label for="price">Цена</label>
        <input type="text" name="price" value="" id="price">
        <label for="img_path">Картинка</label>
        <input type="file" accept=".jpeg, .gif, .png" name="img" id="img_path">
        <label for="info">Краткая информация</label>
        <textarea name="info" id="info" cols="30" rows="8"></textarea>
        <label for="descr">Детальная информация</label>
        <textarea name="descr" id="descr" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Сохранить" name="add">
    </form>

<?require_once '../templates/admin_footer.php'?>