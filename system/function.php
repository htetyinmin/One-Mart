<?php 

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

    function signUP($userName, $userEmail, $userPass, $userPhone) {

        global $connect;
    
        $sql = "SELECT * FROM users WHERE email = '$userEmail'";
        $rows = checkAccount($sql);
        
        if($rows > 0) {

            echo "Sorry: This account is already in exist!";

        }else {

            $uid = 1;
            $sql = "SELECT max(id) as max_id FROM users";
            $stmt = $connect->prepare($sql);
            $stmt->execute();


            while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)) {

                foreach($rows as $key) {

                    $uid = $key['max_id'] + 1;

                }

            }

            $sql = "INSERT INTO users(id, name, email, password, phone) VALUES(?, ?, ?, ?, ?)";
            $res = myQuery($sql, [$uid, $userName, $userEmail, $userPass, $userPhone]);


            if($res) {

                $sql = "SELECT id FROM users WHERE email= '$userEmail'";
                $res = getItems($sql);
                $user_id = '';

                foreach($res as $value) {
                    $user_id = $value->id;
                }


                $rid = 1;
                $sql = "SELECT max(id) as max_id FROM role";
                $stmt = $connect->prepare($sql);
                $stmt->execute();
    
                while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
    
                    foreach($rows as $key) {
    
                        $rid = $key['max_id'] + 1;
    
                    }
    
                }

                $sql = "INSERT INTO role (id, user_id) VALUES (?, ?)";
                $res = myQuery($sql, [$rid, $user_id]);

                if($res) {


                    $mhr_id = 1;
                    $sql = "SELECT max(id) as max_id FROM model_has_role";
                    $stmt = $connect->prepare($sql);
                    $stmt->execute();
        
                    while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
        
                        foreach($rows as $key) {
        
                            $mhr_id = $key['max_id'] + 1;
        
                        }
        
                    }

                    $sql = "INSERT INTO model_has_role (id, user_id, role_id) VALUES(?, ?, ?)";
                    $res = myQuery($sql, [$mhr_id, $user_id, $user_id]);

                    
                    if($res) {

                        echo "Register successfully...";

                    }

                }

            }else {

                echo "Sorry: we are not register this account!";

            }
        }


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
        $stmt->bindParam(':username', $user, PDO::PARAM_STR);
        $stmt->bindValue(':password', $pass, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $row   = $stmt->fetch(PDO::FETCH_ASSOC);
        $acc = ['count'=>$count, 'row'=>$row];
        
        return $acc;
    }






?>