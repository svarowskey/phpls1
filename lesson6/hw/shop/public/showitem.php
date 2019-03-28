<?php
include '../config/config.php';
$id = (int)$_GET['id'];
$sql = "SELECT * FROM `goods` WHERE id = " . $id;
$good = mysqli_fetch_assoc(mysqli_query($connect, $sql));
$title = $good['title'];
include "../templates/header.php";
echo "
      <a href='{$_SERVER['HTTP_REFERER']}' class='button button__back'>Назад</a>
      <div class='good__more'>
            <div class='good__more__left'>
                <img src='" . $good_image_path . $good['img'] . "' alt='#'>
                <span class='good__more__price'>" . $good['price'] . " руб</span>
                <a href='#' class='button'>Заказать</a>
            </div>
            <div class='good__more__right'>
                <span class='good__description'>
                    " . $good['descr'] . "
                </span>
            </div>
       </div>
";
include "../templates/footer.php";