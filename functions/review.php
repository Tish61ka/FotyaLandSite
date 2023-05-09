<?
session_start();
require('./connect.php');

$name = $_POST['name'];
$event = $_POST['event'];
$text = $_POST['text'];
$id_user = $_SESSION['user']['id'];

$img = 'img/' . $_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'], '../' . $img);

$sql = $connect->query("INSERT INTO `reviews` (`name`,`event`,`text`,`img`,`status`,`id_user`) VALUES ('$name','$event','$text','$img','Проверяется','$id_user')");
header("Location:" . $_SERVER['HTTP_REFERER']);
