<?php
require('./connect.php');
session_start();

$id = $_GET['id'];

$check_status = $connect->query("SELECT `status` FROM `otziv` WHERE `id` = '$id'");

$row = $check_status->fetch(PDO::FETCH_ASSOC);

if ($row['status'] == 'Активная') {
    $connect->query("UPDATE `otziv` SET `status` = 'Завершено' WHERE `otziv`.`id` = '$id'");
    header("Location:" . $_SERVER['HTTP_REFERER']);
} else {
    header("Location:" . $_SERVER['HTTP_REFERER']);
}
