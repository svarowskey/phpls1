<?php
$img_path_temp = $_FILES['img']['tmp_name'];
$fileName = translate($_FILES['img']['name']);
$type = $_FILES['img']['type'];
$imgWidth = 118;
$img_path = "../public/images/goods/$fileName";
$img_path_thumbs = "../public/images/goods/thumbs/";
function translate($str) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($str, $converter);
}

function image_resize($dir, $dir_thumbs, $newWidth, $newHeight = false, $quality = 100) {
    // получение новых размеров
    list($width_orig, $height_orig, $type) = getimagesize($dir);
    switch ($type) {
        case IMAGETYPE_JPEG: $typestr = 'jpeg'; break;
        case IMAGETYPE_GIF: $typestr = 'gif' ;break;
        case IMAGETYPE_PNG: $typestr = 'png'; break;
    }

    $ratio_orig = $width_orig / $height_orig;
    // если не задана высота, высчитываем её пропорционально ширине
    if (!$newHeight) {
        $newHeight = round($newWidth / $ratio_orig);
    };

    $func = "imagecreatefrom$typestr";
    $src_resource = $func($dir);
    $destination_resource = imagecreatetruecolor($newWidth, $newHeight);

    if ($typestr == 'jpeg') {
        imagecopyresampled($destination_resource, $src_resource, 0, 0, 0, 0, $newWidth, $newHeight, $width_orig, $height_orig);
        imageinterlace($destination_resource, 1); // чересстрочное формирование изображение
        imagejpeg($destination_resource, $dir_thumbs, $quality);
    } else { //gif, png
        imagealphablending($destination_resource, false);
        imagesavealpha($destination_resource,true);
        $transparent = imagecolorallocatealpha($destination_resource, 255, 255, 255, 127);
        imagefilledrectangle($destination_resource, 0, 0, $newWidth, $newHeight, $transparent);
        imagecopyresampled($destination_resource, $src_resource, 0, 0, 0, 0, $newWidth, $newHeight, $width_orig, $height_orig);
        $func = "image$typestr";
        $func($destination_resource, $dir_thumbs);
    }

    imagedestroy($destination_resource);
    imagedestroy($src_resource);
}