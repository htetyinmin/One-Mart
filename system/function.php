<?php 

    include_once 'session.php';

    function testInput($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    function checkAccount($data) {

        global $connect;
        $data = $connect->prepare($data);
        $data->execute();

        return $data->rowCount();
    }

    /*-------index---------*/
    function itemsAll($data) {

        global $connect;
        $data = $connect->prepare($data);
        $data->execute();

        return $data->fetchAll();

    }

    
    function itemDetail($data, $id){
        global $connect;
        $data=$connect->prepare($data);
        $data->bindParam(':id',$id);
        $data->execute();
        return $data->fetchAll(PDO::FETCH_ASSOC);

    }

    function encodePassword($pass) {

        $pass = md5($pass);
        $pass = sha1($pass);
        $pass = crypt($pass, $pass);

        return $pass;
    }

    function userLogin($sql, $user , $pass) {

        global $connect;
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':useremail', $user, PDO::PARAM_STR);
        $stmt->bindValue(':password', $pass, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);
        $acc = ['count'=>$count, 'row'=>$row];
        
        return $acc;
    }


?>