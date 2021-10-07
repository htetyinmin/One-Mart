<?php 

    include_once "../../system/session.php";

    
    if(checkSession('admin')) {

        header("Location: dashboard.php");

    }else {

        header("Location:../../index.php");

    }

?>