<?php 

    include_once "db.php";

    function myQuery($sql, $params = []) {

        global $connect;
        $stmt = $connect->prepare($sql);

        return $stmt->execute($params);
    }

    function getItems($sql){

        global $connect;
        $statement = $connect->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    

    
?>


