<?php 

    include_once "../admin/system/function.php";
    include_once "function.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_REQUEST['action'])) {

            if($_REQUEST['action'] == 'signup') {

                $userName = $_REQUEST['name'];
                $userEmail = $_REQUEST['email'];
                $userPass = encodePassword($_REQUEST['pass']);
                $userPhone = $_REQUEST['phone'];

                return signUp($userName, $userEmail, $userPass, $userPhone);

            }
        }
    }


    if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if(isset($_GET['search'])) {

            $q = $_GET['search'];

            if($q != '') {

                $sql = "SELECT name, photo FROM items WHERE  name LIKE '%$q%' LIMIT 5";
                $res = getItems($sql);

                if($res) {
                    
                    foreach($res as $value) {
                        
                        echo    "<ul>
                                    <li>
                                        <a href='#' class='d-flex flex-row my-card'>
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