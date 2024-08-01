<?php
$userID = $_GET["id"];

$mysqlConnect = require_once "core/connect.php"; // Подключаемся к базе
$sql = "SELECT * FROM `test111` WHERE id = $userID";
$user = mysqli_query($mysqlConnect, $sql); // выполняем запрос к таблице

if (mysqli_num_rows($user) === 0) { //Проверка на кол-во строк
    require_once "core/error.php";
    die();
}
$userData = mysqli_fetch_assoc($user); // Преобразование в ассоциативный массив
$siteName = $userData["username"];


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?=$siteName?> | Info</title>
</head>
<body>
    <div class="container">
        <h3>user's name: <?=$userData["user"]?></h3>
        <p>username: <?=$userData["username"]?></p>
        <p>age: <?=$userData["number"]?></p>

    <a href="index.php"><button type="" class="btn btn-primary mt-3">Go to home</button></a>
    </div>
</body>
</html>
    