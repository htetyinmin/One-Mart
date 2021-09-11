<?php 


    function setSession($key) {

        $_SESSION['user'] = $key;

    }

    
    function checkSession($key) {
        
        return isset($_SESSION[$key]);

    }


    function getSession($key) {

        return $_SESSION[$key];

    }






?>