<?
session_start();
require('./connect.php');
$name = $_POST['name'];
$number = $_POST['number'];

$sql = $connect->query("INSERT INTO `otziv` (`name`,`number`) VALUES ('$name','$number')");

header("Location:" . $_SERVER['HTTP_REFERER']);
