<?php 

    session_start();

    function setSession($value, $type) {

        $data = trim($type);

        if($data === 'admin') {
            $_SESSION['admin'] = $value;
        }
        
        if($data === 'user') {
            $_SESSION['user'] = $value;
        }

    }


    function setUser($value) {

        $_SESSION['user'] = $value;
        
    }

    
    function checkSession($key) {
        
        return isset($_SESSION[$key]);

    }


    function getSession($key) {

        return $_SESSION[$key];

    }


?>