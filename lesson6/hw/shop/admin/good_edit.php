<?php
require_once '../models/goods.php';
require_once '../models/image.php';

if (!isset($_GET['id'])) {
    header("Location: {$_SERVER['HTTP_REFERER']}");
}
$id = (int)$_GET['id'];
$good = getGood($id);

if (isset($_POST['save'])) {
    image_resize($img_path_temp, $img_path_thumbs . $fileName, $imgWidth);
    move_uploaded_file($img_path_temp, $img_path);

    good_edit($id, strip_tags($_POST['title']), strip_tags($_POST['price']), strip_tags($fileName),
        strip_tags($_POST['info']), strip_tags($_POST['descr']));
    header("Location: index.php");
}

require_once '../templates/admin_header.php'?>

    <form action="" enctype="multipart/form-data" method="post" class="form-edit">
        <br>
        <p>Редактировать товар №<?echo $good['id']?></p>
        <label for="title">Название товара</label>
        <input type="text" name="title" value="<?echo $good['title']?>" id="title">
        <label for="price">Цена</label>
        <input type="text" name="price" value="<?echo $good['price']?>" id="price">
        <div>
            <label for="img_path">Путь картинки</label>
            <input type="file" accept=".jpeg, .jpg, .gif, .png" name="img" value="" id="img_path">
            <img src="<?echo $good_image_thumbs_path . $good['img']?>" alt="">
        </div>
        <label for="info">Краткая информация</label>
        <textarea name="info" id="info" cols="30" rows="8"><?echo $good['info']?></textarea>
        <label for="descr">Детальная информация</label>
        <textarea name="descr" id="descr" cols="30" rows="10"><?echo $good['descr']?></textarea>
        <br>
        <input type="submit" value="Сохранить" name="save">
    </form>

<?require_once '../templates/admin_footer.php'?>