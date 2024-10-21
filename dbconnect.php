<?php

try{
    $host = "localhost";
    $dbname = "my_blog";
    $dbuser = "root";
    $dbpassword = "";

    //Data source name
    $dsn ="mysql:host=$host;port=3308;dbname=$dbname";
    $conn = new PDO($dsn,$dbuser,$dbpassword);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // echo "connection success";

} catch(PDOException $e){
    die("Connection fail:".$e->getMessage());
}
?>