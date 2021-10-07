<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    include_once "../system/function.php";

    $id = $_POST['id'];
    
    $del = "SELECT * FROM items WHERE id=$id";
    $item = getItems($del);

    $photopath = '../uploads/'.$item[0]->photo;
    unlink($photopath);
    
    $tmp = "DELETE FROM items where id=$id";
    getItems($tmp);

    header('location: item_list.php');