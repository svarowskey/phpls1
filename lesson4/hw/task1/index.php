<?php
function getImages() {
    $path = "images/";
    $getFiles = scandir($path);
    $images = "";
    foreach ($getFiles as $item) {
        if($item == '.' || $item == '..') continue;
        $images .= "<img class='gallery__image' src='" . $path . $item . "' />";
    }
    return $images;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <style>
        body {
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background: gray;
            padding: 20px 60px;
        }
        .gallery__image {
            width: 300px;
            object-fit: cover;
            height: 300px;
            margin: 10px;
            transition: .6s;
        }
        .gallery__image:hover {
            transform: scale(1.2);
        }
        #modal_form {
            width: auto;
            height: auto;
            border-radius: 5px;
            border: 3px #000 solid;
            background: dimgray;
            position: fixed;
            display: none;
            opacity: 1;
            z-index: 99;
            padding: 30px 10px 10px;
            color: white;
        }
        /* Кнoпкa зaкрыть для тех ктo в тaнке) */
        #modal_form #modal_close {
            width: 21px;
            height: 21px;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            display: block;
        }
        /* Пoдлoжкa */
        #overlay {
            z-index:3; /* пoдлoжкa дoлжнa быть выше слoев элементoв сaйтa, нo ниже слoя мoдaльнoгo oкнa */
            position:fixed; /* всегдa перекрывaет весь сaйт */
            background-color: rgba(0, 0, 0, .8); /* чернaя */
            opacity:1; /* нo немнoгo прoзрaчнa */
            -moz-opacity:0.8; /* фикс прозрачности для старых браузеров */
            filter:alpha(opacity=80);
            width:100%;
            height:100%; /* рaзмерoм вo весь экрaн */
            top:0; /* сверху и слевa 0, oбязaтельные свoйствa! */
            left:0;
            cursor:pointer;
            display:none; /* в oбычнoм сoстoянии её нет) */
            justify-content: center;
            align-items: center;
        }
        .popup_img {
            width: auto;
            max-height: calc(100vh - 100px);
            max-width: calc(100vw - 100px);
            height: auto;
        }
    </style>
</head>
    <body>
        <? echo getImages()?>
        <div id="overlay">
            <div id="modal_form"><!-- Сaмo oкнo -->
                <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
                <!-- Тут любoе сoдержимoе -->
            </div>
        </div><!-- Пoдлoжкa -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {

                $('.gallery__image').click(function () {
                    let image = $(this);
                    let path = image.attr('src');
                    $('#overlay').fadeIn(400,
                        function () {
                        $('#overlay').css('display', 'flex');
                            $('#modal_form')
                                .css('display', 'block')
                                .animate({opacity: 1}, 200)
                                .append('<img class="popup_img" src="' + path + '" />')
                        }
                    );
                });
                $('#modal_close, #overlay').click(function () {
                    $('#modal_form')
                        .animate({opacity: 0}, 200,
                            function () {
                                $(this).css('display', 'none');
                                $('#overlay').fadeOut(400);
                            });
                        $('.popup_img').remove();
                    }
                );
            });
        </script>
    </body>
</html>