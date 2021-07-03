<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <table border="1" width=100% height=100%>
        <tr height=20%>
            <td colspan="3"><? include "blocks/header.php"?></td>
        </tr>
        <tr>
            <td>Левое меню</td>
            <td><?include "blocks/content.php"?></td>
            <td>Правое меню</td>
        </tr>
        <tr height=20%>
            <td colspan="3">Подвал сайта</td>
        </tr>
    </table>
</body>
</html>