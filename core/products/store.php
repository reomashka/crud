<?php

$userName = $_POST["name"];
$userUsername = $_POST["username"];
$userAge = $_POST["age"];

$mysqlConnect = require_once "../connect.php"; // Подключаемся к базе
$sql = "INSERT INTO test111(id, user, number, username) VALUES (NULL, '$userName', $userAge, '$userUsername')"; //Выолняем SQL запрос по добавлению информации в таблицу
$userStore = mysqli_query($mysqlConnect, $sql); 

$userLastID = mysqli_insert_id($mysqlConnect);

header ("Location: /product.php?id=$userLastID");