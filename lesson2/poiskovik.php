<?php
switch ($_GET['url']) {
    case "https://yandex.ru":
        $check = (empty($_GET['value'])) ? true : false;
        if (!$check) {
            $url = $_GET['url'] . "/search/?text=" . $_GET['value'];
            header("Location:" . $url);
        } else {
            header("Location:" . $_GET['url']);
        }
        break;
    case "https://google.com":
        $check = (empty($_GET['value'])) ? true : false;
        if (!$check) {
            $url = $_GET['url'] . "/search/?text=" . $_GET['value'];
            header("Location:" . $url);
        } else {
            header("Location:" . $_GET['url']);
        }
        break;
}