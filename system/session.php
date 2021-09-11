<?php 


    function setSession($key, $type) {

        $data = trim($type);

        if($data === 'admin') {
            $_SESSION['admin'] = $key;
        }else {
            $_SESSION['user'] = $key;
        }

    }

    
    function checkSession($key) {
        
        return isset($_SESSION[$key]);

    }


    function getSession($key) {

        return $_SESSION[$key];

    }






?>