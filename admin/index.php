<?php 

    include_once "../system/session.php";
    
    if(checkSession('admin')) {

        header("Location: view/index.php");

    }else {

        header("Location:../index.php");

    }


?>