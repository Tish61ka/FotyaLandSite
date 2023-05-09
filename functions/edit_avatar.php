<?
session_start();
require('./connect.php');

$avatar = 'img/' . $_FILES['avatar']['name'];
move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $avatar);

$user_id = $_SESSION['user']['id'];
$sql = $connect->query("UPDATE `users` SET `avatar` = '$avatar' WHERE `users`.`id` = '$user_id'");
$_SESSION['user']['avatar'] = $avatar;

$_SESSION['message'] = 'Аватар успешно изменен!';
header("Location:" . $_SERVER['HTTP_REFERER']);
