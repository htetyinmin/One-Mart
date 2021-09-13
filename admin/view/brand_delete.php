<?php

    include_once "../system/function.php";

    $id = $_POST['id'];
    
    $del = "SELECT * FROM brand WHERE id=$id";
    $brand = getItems($del);

    // var_dump($brand[0]->photo) ;
    $photopath = '../uploads/'.$brand[0]->photo;
    unlink($photopath);
    
    $tmp = "DELETE FROM brand where id=$id";
    getItems($tmp);

    header('location: brand_list.php');