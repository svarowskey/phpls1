<?
if ($_SESSION['login'] !== 'admin') {
    echo 'УПС!';
    return;
}

include '../config/config.php';

$action = strip_tags($_GET['action']);
$actionID = (int)$_GET['id'];

if (isset($_POST['good_id'])) {
    $good_id = (int)$_POST['good_id'];
    $sql = "DELETE FROM goods WHERE id='$good_id'";
    mysqli_query($connect, $sql);
    header("Location: {$_SERVER['REQUEST_URI']}");
}

function getItems() {
    global $connect, $good_image_thumbs_path;
    $goodsList = "<thead><tr><td></td><td>ID</td><td>Наименование</td><td>Цена</td><td>Файл картинки</td>
                <td>Краткая информация</td><td>Описание</td><td>Действие</td></tr></thead>";
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($connect, $sql);
    while ($date = mysqli_fetch_assoc($result)){
        $goodsList .= "<tr>
                    <td><img class='tableImg' src='" . $good_image_thumbs_path . $date['img'] . "'></td>
                    <td>" . $date['id'] . "</td>
                    <td>" . $date['title'] . "</td>
                    <td>" . $date['price'] . "</td>
                    <td>" . $date['img'] . "</td>
                    <td>" . $date['info'] . "</td>
                    <td>" . $date['descr'] . "</td>
                    <td class='adminTable__action'>
                    <a href='good_edit.php?id={$date['id']}' class='adminTable__edit'></a>
                    <a href='good_del.php?id={$date['id']}' class='adminTable__del'></a>
                    </td></tr>";
    }
    return $goodsList;
}

echo "
    <table class='adminTable'>
        " . getItems() . "
    </table>
    <a href='good_add.php' class='adminTable__add'></a>
";