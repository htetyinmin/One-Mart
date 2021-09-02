<?php 

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "onemart";



    try {
    
        $connect = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    }catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }




?>