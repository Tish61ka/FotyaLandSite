<?php

require('./connect.php');

$id = $_GET['id'];

$sql = $connect->query("DELETE FROM `reviews` WHERE `reviews`.`id` = '$id'");
header("Location:" . $_SERVER['HTTP_REFERER']);
