<?php

require('./connect.php');

$id = $_GET['id'];

$sql = $connect->query("UPDATE `reviews` SET `status` = 'Одобрен' WHERE `reviews`.`id` = '$id'");
header("Location:" . $_SERVER['HTTP_REFERER']);
