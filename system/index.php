<?php 

    include_once "../system/session.php";


    if(checkSession('admin')) {

        header("Location: ../index.php");

    }else {

        header('Location: ../index.php');
        
    }


?>