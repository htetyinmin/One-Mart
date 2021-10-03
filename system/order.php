<?php

    session_start();
    include_once "../admin/system/function.php";
    include_once "session.php";

    if(isset($_REQUEST)) {
        if($_REQUEST['action'] == 'order') {

            $total = $_POST['total'];
            $cartData = $_POST['cart'];
            $city = $_POST['city'];

            $date = date('Y-m-d h:ia');
            $id = getSession('user');
            $user_id = $id['user_id'];

            $voucherno = 1;
            $orderID = 1;
            $sql = "SELECT max(voucherno) as max_id, max(id) as o_id FROM orders";
            $stmt = $connect->prepare($sql);
            $stmt->execute();


            while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)) {

                foreach($rows as $key) {

                    $voucherno = $key['max_id'] + 1;
                    $orderID = $key['o_id'] + 1;

                }
            }


            $sql = "INSERT INTO orders (id, orderdate, voucherno, total, city, user_id ) VALUES(?, ?, ?, ?, ?, ?)";
            $res = myQuery($sql, [$orderID, $date, $voucherno, $total , $city, $user_id]);

            if($res) {

                //var_dump($cartData);

                for($i = 0; $i < count($cartData); $i++){
                    
                    $item_id = $cartData[$i]['id'];
                    $qty = $cartData[$i]['qty'];

                    echo "\n\nItem ID:" . $item_id . "\n Qty:" .$qty;

                    $itemOrderID = 1;
                    $sql = "SELECT max(id) as max_id FROM item_order";
                    $stmt = $connect->prepare($sql);
                    $stmt->execute();
        
        
                    while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
        
                        foreach($rows as $key) {
        
                            $itemOrderID = $key['max_id'] + 1;
        
                        }
                    }

                    $sql = "INSERT INTO item_order (id, qty, item_id, order_id ) VALUES(?, ?, ?, ?)";
                    myQuery($sql, [$itemOrderID, $qty, $item_id, $orderID]);

                }

                return true;

            }
        
        }
    }


?>