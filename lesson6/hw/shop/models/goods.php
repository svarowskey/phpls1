<?php
require_once '../config/config.php';

function good_add($title, $price, $img, $info, $descr) {
    global $connect;
    $sql = "INSERT INTO goods (title, price, img, info, descr) VALUES ('$title', '$price', '$img', '$info', '$descr')";
    mysqli_query($connect, $sql);
}

function good_edit($id, $title, $price, $img, $info, $descr) {
    global $connect;
    $id = (int)$id;
    $sql = "UPDATE `goods` SET `title`='$title', `price`='$price', `img`='$img', `info`='$info', `descr`='$descr' WHERE id='$id'";
    mysqli_query($connect, $sql);
}

function good_del($id) {
    global $connect;
    $id = (int)$id;
    $sql = "DELETE FROM goods WHERE id='$id'";
    mysqli_query($connect, $sql);
}

function getGood($id) {
    global $connect;
    $id = (int)$id;
    $sql = "SELECT * FROM goods WHERE id=$id";
    $result = mysqli_query($connect, $sql);
    return mysqli_fetch_assoc($result);
}

function getInfo($arr) {
    $infoList = "<ul class='infoList'>";
    foreach ($arr as $item) {
        $infoList .= "<li>$item</li>";
    }
    $infoList .= "</ul>";
    return $infoList;
}

function showItems() {
    global $connect, $good_image_thumbs_path;
    $items = "";
    $sql = "SELECT `id`, `title`, `price`, `img`, `info` FROM `goods`";
    $goods = mysqli_query($connect, $sql);

    while ($date = mysqli_fetch_assoc($goods)) {
        $arrInfo = preg_split('/\,/', $date['info']);
        $items.= "<div class='col-xl-4 col-lg-6 col-md-12 good-container'>
        <div class='good'>
            <a class='good___title' href='showitem.php?id=" . $date['id'] . "'><h3>" . $date['title'] . "</h3></a>
            <div class='good__middle'>
                <img src='" . $good_image_thumbs_path . $date['img'] . "' alt='#'>
                <div class='info'>
                    " . getInfo($arrInfo) ."
                </div>
            </div>
            
            <div class='good__bottom'>
                <span class='good__price'>" . $date['price'] . " руб</span>
                <a href='#' class='button'>Заказать</a>
            </div>
            
        </div>
    </div>";
    }
    return $items;
}