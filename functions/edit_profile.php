<?
session_start();
require('./connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

$user_id = $_SESSION['user']['id'];

$sql = $connect->query("UPDATE `users` SET `login` = '$login' WHERE `users`.`id` = '$user_id'");
$sql = $connect->query("UPDATE `users` SET `name` = '$name' WHERE `users`.`id` = '$user_id'");
$sql = $connect->query("UPDATE `users` SET `email` = '$email' WHERE `users`.`id` = '$user_id'");
$sql = $connect->query("UPDATE `users` SET `password` = '$password' WHERE `users`.`id` = '$user_id'");


$_SESSION['user']['login'] = $login;
$_SESSION['user']['name'] = $name;
$_SESSION['user']['email'] = $email;

$_SESSION['message'] = 'Данные успешно изменены!';
header("Location:" . $_SERVER['HTTP_REFERER']);
