<?php 

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "onemart";



    try {

        $connect = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);

        if(!$connect) {
            die("Connection failed!");
        }

        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE TABLE products (
            id INT PRIMARY KEY NOT NULL, name VARCHAR(255) NOT NULL DEFAULT 'no name', image VARCHAR(255) NOT NULL DEFAULT 'no image', content VARCHAR(255) NOT NULL, price VARCHAR(100) NOT NULL DEFAULT 'no price', discount VARCHAR(255) NOT NULL DEFAULT 'no discount', created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";


        $connect->exec($sql);
        echo "Create Table successfully";
        $connect = null;

    }catch(PDOException $e) {
        echo "Error:" . $e->getMessage();
    }









?>