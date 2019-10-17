<?php
    define("DB_USER","root");
    define("DB_PASSWORD","root");
    define("DB_HOST","localhost");
    define("DB_PORT","3306");
    define("DB_NAME","onlineshopdb");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    $conn->set_charset("utf8");
