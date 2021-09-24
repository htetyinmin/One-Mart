<?php

    include_once "../system/function.php";

    $id = $_POST['id'];

    $tmp = "DELETE FROM model_has_role where user_id=$id";
    getItems($tmp);
    
    $tmps = "DELETE FROM users where id=$id";
    getItems($tmps);

    header('location: user_list.php');