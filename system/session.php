<?php 


    function setSession($key = [], $value = []) {

        for($i = 0; $i < count($key); $i++) {

            $_SESSION[$key[$i]] = $value[$i];

        }

    }

    
    function checkSession($key) {
        
        return isset($_SESSION[$key]);

    }


    function getSession($key) {

        return $_SESSION[$key];

    }





?>