<?
session_start();

require './connect.php';

$login = $_POST['login'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    $check_login = $connect->query("SELECT * FROM `users` WHERE `login` = '$login'");
    $response = $check_login->fetch(PDO::FETCH_ASSOC);
    if ($response['login']) {
        $_SESSION['message'] = 'Этот логин занят, придумайте другой!';
        header("Location: ../sign-up.php");
    } else {
        $avatar = 'img/' . $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $avatar);
        $add_user = $connect->query("INSERT INTO `users`(`login`, `password`,`name`,`email`,`avatar`) VALUES ('$login','$password','$name','$email','$avatar')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../sign-in.php');
    }
} else {
    $_SESSION['message'] = 'Пароли не совпадают!';
    header('Location: ../sign-up.php');
}
