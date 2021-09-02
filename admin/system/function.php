<?php 

    include_once "db.php";


    function myQuery($sql, $params = []) {

        global $connect;
        $stmt = $connect->prepare($sql);
        return $stmt->execute($params);

    }




    
?>


