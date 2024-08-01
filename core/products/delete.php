<?php

$userID = $_GET["id"];


$mysqlConnect = require_once "../connect.php"; // Подключаемся к базе
$sql = "DELETE FROM `test111` WHERE id = $userID";
$userStore = mysqli_query($mysqlConnect, $sql);

header ("Location: /index.php");