<?php 

    include_once "../admin/system/function.php";
    include_once "function.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(isset($_REQUEST['action'])) {
        
            if($_REQUEST['action'] == 'signup') {

                $userName = $_REQUEST['name'];
                $userEmail = $_REQUEST['email'];
                $userPass = $_REQUEST['pass'];
                $userPhone = $_REQUEST['phone'];

                
                return signUp($userName, $userEmail, $userPass, $userPhone);

                
            }
        }
    }


    // $nameErr = $emailErr = $passErr = $phoneErr = "";
    // $userName = $userEmail = $userPass = $userPhone = "";
/*
    function checkForm($name, $email, $password, $phone) {

        if(empty($name)) {

            return "Username is required!";

        }else {

            $userName = testInput($name);

            if (!preg_match("/^[a-zA-Z-' ]*$/", $userName)) {

                return "Valid only letter and white space.";

            }else {

                if (empty($email)) {

                    return "Email is required";

                } else {

                    $userEmail = testInput($email);

                    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {

                        return "Invalid email format!";

                    }else {

                        if(empty($password)) {

                            return 'Password is required';

                        }else {

                            $userPass = testInput($password);

                            if(!strlen($userPass) >= 6) {

                                return "Password must be at least 6 characters";

                            }elseif(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', $userPass)) {

                                return "Passward: (a-z)-(A-Z)-(0-9)-(any special character eg.$)/";

                            }else {

                                if(empty($phone)) {

                                    return 'Phone number is required';

                                }else {

                                    $userPhone = testInput($phone);

                                    if(!strlen($userPhone) === 11) {

                                        return "Phone number must be eg.09-123456789!";

                                    }elseif(!preg_match("/^?([0-9]{2})-?([0-9]{3})-?([0-9]{5,6}$/", $userPhone)) {

                                        return "Please enter valid phone number!";

                                    }

                                }

                            }

                        }

                    }
                    
                }

            }

        }



    }*/

?>