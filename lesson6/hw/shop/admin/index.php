<?

function showForm() {
    return "
    <div class='container'>
        <form method='post' class='adminForm'>
        <label for='login'>Логин</label>
        <input type='text' name='login' id='login'>
        <label for='login'>Пароль</label>
        <input type='password' name='pass' id='pass'><br>
        <input type='submit' value='Войти'>
        </form>
    </div>";
}
session_start();
$title = 'Админ панель';
$activeLink = 'admin.php';
require '../templates/admin_header.php';

if ($_SESSION['login'] === 'admin') {
    $activeLink = 'admin_panel.php';
    require '../templates/admin_panel.php';
} else {
    if ($_POST['login'] === 'admin') {
        if ($_POST['pass'] === 'admin') {
            $_SESSION['login'] = 'admin';
        } else {
            echo showForm();
            echo '<span class="incorrectPass">Неверный пароль!</span>';
        }
    } else {
        echo showForm();
    }
}


require '../templates/admin_footer.php';