<?php 

    include_once "session.php";


    if(checkSession('admin')) {

        header("Location: ../index.php");

    }else {

        header("Location: ../index.php");
        
    }

    include_once "../admin/system/function.php";
    include_once "function.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_REQUEST['action'])) {

            if($_REQUEST['action'] == 'signup') {

                $userName = $_REQUEST['name'];
                $userEmail = $_REQUEST['email'];
                $userPass = encodePassword($_REQUEST['pass']);
                $userPhone = $_REQUEST['phone'];

                
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
                        $role_id = 2;
        
                        foreach($res as $value) {
                            $user_id = $value->id;
                        }
        
        
        
                        $mhr_id = 1;
                        $sql = "SELECT max(id) as max_id FROM model_has_role";
                        $stmt = $connect->prepare($sql);
                        $stmt->execute();
            
                        while($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            
                            foreach($rows as $key) {
            
                                $mhr_id = $key['max_id'] + 1;
            
                            }
            
                        }
        
        
                        $sql = "INSERT INTO model_has_role(id, user_id, role_id) VALUES(?, ?, ?)";
                        $res = myQuery($sql, [$mhr_id, $user_id, $role_id]);
        
                        if($res) {

                            $query = "SELECT * FROM users WHERE email =:useremail AND password =:password";
                            $acc = userLogin($query, $userEmail, $userPass);
                    
                            if($acc['count'] == 1 && !empty($acc['row'])) {

                                $user_id = $acc['row']['id'];
                                $user_id = intval($user_id);

                                $sql = "SELECT r.name as rname FROM users u 
                                        INNER JOIN model_has_role mhr ON u.id=mhr.id 
                                        INNER JOIN role r ON r.id=mhr.role_id WHERE u.id = $user_id";
                                        $res = getItems($sql);
                                        
                                        foreach($res as $value) {

                                            $type = $value->rname;

                                        }

                                        if($type == 'User') {

                                            $user = ['user_id'=>$acc['row']['id'],'user_name'=>$acc['row']['name'],'user_email'=>$acc['row']['email'],'user_phone'=>$acc['row']['phone'],'user_date'=>$acc['row']['created_at']];
                                            setSession($user, 'user');
                                            
                                            echo 'success..';

                                        }
                            }else {

                                echo "<script>alert('Invalid username and password!');</script>";
                        
                            }


                        }
        
                    }else {
        
                        echo "Sorry: we are not register this account!";
        
                    }
                }




            }
        }
    }


    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if(isset($_GET['search'])) {

            $q = $_GET['search'];

            if($q != '') {

                $sql = "SELECT id,name, photo FROM items WHERE  name LIKE '%$q%' LIMIT 5";
                $res = getItems($sql);

                if($res) {
                    
                    foreach($res as $value) {
                        
                        echo    "<ul>
                                    <li>
                                        <a href='product_details.php?id=$value->id ' class='d-flex flex-row my-card'>
                                            <div class='header'>
                                                <img src='../admin/uploads/". $value->photo . "' width='30' height='30' alt=''>
                                            </div>
                                            <div class='body'>
                                                <p>" . $value->name ."</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>";
                    }
                }else {

                    echo "<ul>
                            <li style='padding: 0 10px 10px; font-size:13px; color: #555;'>Searching not found</li>
                        </ul>";

                }
            }
            
        }
    }

?>