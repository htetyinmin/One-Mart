<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    include_once "../system/function.php";

    $id = $_POST['id'];
    
    $del = "SELECT * FROM subcategories WHERE id=$id";
    $subcategory = getItems($del);

    $photopath = '../uploads/'.$subcategory[0]->photo;
    unlink($photopath);
    
    $tmp = "DELETE FROM subcategories where id=$id";
    getItems($tmp);

    header('location: subcategory_list.php');