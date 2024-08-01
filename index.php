<?php
$mysqlConnect = require_once "core/connect.php";
$sql = "SELECT * FROM `test111`";

$products = mysqli_query($mysqlConnect, $sql); //(запрос к базе, SQL запрос)

$productsList =[]; //пустой массив
while ($product = mysqli_fetch_assoc($products)){
    $productsList[] = $product;
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>users</title>
</head>
<body>



<div class="container">
    <h2 class="mt-3">Users</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">username</th>
            <th scope="col">age</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>



        <?php
            foreach ($productsList as $product){
                ?>
        <tr>
            <th scope="row"><?= $product["id"] ?></th>
            <td>
                <a href="product?id=<?=$product["id"]?>"><?= $product["user"] ?></a>
            </td>
            <td><?= $product["username"]?></td>
            <td><?= $product["number"] ?></td>
            <td><a href="core/products/storeEdit.php?id=<?=$product["id"]?>" class="btn btn-success">Edit</a>
            <a href="core/products/delete.php?id=<?=$product["id"]?>" class="btn btn-danger">Delete</a>
        </td>
        </tr>
    

        <?php
            }
        ?>

        </tbody>
    </table>

<!-- Форма добавления инфы в таблицу -->
 <h3>Add new user</h3>

    <form action="core/products/store.php" method="post">
        <div class="form-group">
            <label for="name">User's name</label>
            <input type="text" name="name" class="form-control" id="title" placeholder="name">
        </div>
        <div class="form-group">
            <label for="name">User's username</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="username">
        </div>
        <div class="form-group">
            <label for="name">User's age</label>
            <input type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="age">
        </div>

        <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
    </form>

</div>

</body>
</html>