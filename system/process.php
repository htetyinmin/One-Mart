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


?>