<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>edit user data</title>
</head>
<body>
    

    <div class="container">
        
        <?php

        $userID = $_GET["id"];

        $mysqlConnect = require_once "../connect.php"; // Подключаемся к базе
        $sql = "SELECT * FROM `test111` WHERE id = $userID";
        $user = mysqli_query($mysqlConnect, $sql); // выполняем запрос к таблице

        $sql = "UPDATE test111 SET `id`='',`user`='',`number`='',`username`='' WHERE 1";

        if (mysqli_num_rows($user) === 0) { //Проверка на кол-во строк
            ?>
            <div class="alert alert-danger mt-5" role="alert">user not found</div>
            <?php
            die();
        }
        $userData = mysqli_fetch_assoc($user);   // Образуем в ассоциативный массив данные из БД
         ?>
         <h1 class="display-5">Updata user data - <?=$userData["user"]?></h1>


         <!-- Форма обновления инфы в таблице -->

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$userData["id"]?>">
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control" id="title" placeholder="name" value="<?=$userData["user"]?>">
        </div>
        <div class="form-group">
            <label for="name">username</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="username" value="<?=$userData["username"]?>">
        </div>
        <div class="form-group">
            <label for="name">age</label>
            <input type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="age" value="<?=$userData["number"]?>">
        </div>

        <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
    </form>
         

        
    </div>
</body>
</html>