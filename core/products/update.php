<?php

$userID = $_POST["id"];
$userName = $_POST["name"];
$userUsername = $_POST["username"];
$userAge = $_POST["age"];

$mysqlConnect = require_once "../connect.php"; // Подключаемся к базе
$sql = "UPDATE test111 SET `user`='$userName',`number`= $userAge,`username`='$userUsername' WHERE id = $userID";
$userStore = mysqli_query($mysqlConnect, $sql);

header ("Location: /product.php?id=$userID");