<?php 


    function setSession($key, $type) {

        $data = trim($type);

        if($data === 'admin') {
            $_SESSION['admin'] = $key;
        }
        
        if($data === 'user') {
            $_SESSION['user'] = $key;
        }


        if($data === 'autologin') {
            $_SESSION['auto'] = $key;
        }

    }

    
    function checkSession($key) {
        
        return isset($_SESSION[$key]);

    }


    function getSession($key) {

        return $_SESSION[$key];

    }






?>