<?php

require_once "db.php";

$mysqlConnect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$mysqlConnect) {
    echo "DB fatal error";
    die();
}

return $mysqlConnect;
