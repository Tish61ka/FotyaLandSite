<? session_start();
require './connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$check_user = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

$user = $check_user->fetch(PDO::FETCH_ASSOC);

if ($user > 0) {
    if ($user['role'] == 1) {
        $_SESSION['admin'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "role" => $user['role'],
            "name" => $user['name'],
            "email" => $user['email'],
            "avatar" => $user['avatar'],
        ];
        header("Location: ../admin.php");
    } else {
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "role" => $user['role'],
            "name" => $user['name'],
            "email" => $user['email'],
            "avatar" => $user['avatar'],
        ];
        header("Location: ../profile.php");
    }
} else {
    $_SESSION['message'] = 'Невереный логин или пароль!';
    header("Location:" . $_SERVER['HTTP_REFERER']);
}
