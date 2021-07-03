<?
$x = rand(1, 10);
$y = rand(1, 10);
$mas = ["*", "+", "-"];
$op = $mas[rand(0, count($mas)-1)];
switch ($op) {
    case "*":
        $res = $x * $y;
        break;
    case "+":
        $res = $x + $y;
        break;
    case "-":
        $res = $x - $y;
        break;
}
?>

<form action="server.php" method="POST">
    <input type="hidden" name="hid" value="<?=$res?>">
    <p>Введите логин</p>
    <input type="text" name="login"><br>
    <p>Расскажите о себе</p>
    <textarea name="about" cols="30" rows="10"></textarea><br>
    <p>Какие языки вы знаете?</p>
    <input type="checkbox" value="PHP" name="lang[]">PHP<br>
    <input type="checkbox" value="JS" name="lang[]">JS<br>
    <input type="checkbox" value="JAVA" name="lang[]">JAVA<br>
    <p>Ваш опыт работы</p>
    <input type="radio" value="менее 3 лет" name="stage">менее 3 лет<br>
    <input type="radio" value="менее 10 лет" name="stage">менее 10 лет<br>
    <input type="radio" value="свыше 10 лет" name="stage">свыше 10 лет<br>
    <p>Ваш город</p>
    <select name="city">
        <option value="Москва">Москва</option>
        <option value="Питер">Питер</option>
        <option value="Другой">Другой</option>
    </select>
    <p>Дата рождения</p>
    <input type="date" name="dt"><br><br>
    <p>Вычислите <?=$x . $op . $y?>=<input style="width: 50px" type="text" name="answer"></p>
    <input type="submit" value="Сохранить">
</form>

<!--<a href="server.php?date=--><?//=date('d-M-Y')?><!--&name=Ivan">asd</a>-->