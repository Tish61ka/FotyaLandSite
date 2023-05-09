<?php

require('./connect.php');

$id = $_GET['id'];

$sql = $connect->query("DELETE FROM users WHERE `users`.`id` = '$id'");
header("Location:" . $_SERVER['HTTP_REFERER']);
