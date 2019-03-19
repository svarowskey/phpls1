<script src="jquery.js"></script>
<script>
    function f(id_good) {
        let id_price = "#price_" + id_good;
        let price = $(id_price).val();
        $.ajax({
            method: "GET",
            url: "server.php",
            data: {id: id_good, price: price}
        })
        .done(function (answer) {
            alert(answer);
        })
        ;
    }
</script>

<?
include ("config.php");

$sql = 'select * from shop';
$result = mysqli_query($connect, $sql);

$table = "<table border='1' width='500'>";

while ($data = mysqli_fetch_assoc($result)) {
    $table.="<tr><td>" . $data['title'] . "</td>";
    $table.="<td><input id='price_" . $data['id'] . "' type='text' style='width: 100%;' value=" . $data['price'] . "></td>";
    $table.="<td><button onclick='f(" . $data['id'] . ")'>Сохранить</button></td></tr>";
}
$table.="</table>";

echo $table;