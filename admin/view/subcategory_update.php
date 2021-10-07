<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    include_once "../system/function.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $photo = $_FILES['photo'];
    $oldphoto=$_POST['oldphoto'];
    $category = $_POST['category'];
    var_dump($photo['size']);

    if(isset($photo) && $photo['size']>0){

        $imageLink = mt_rand(time(), time()) + mt_rand(time(), time()) . "_" . $photo['name'];
        move_uploaded_file($photo['tmp_name'], "../uploads/". $imageLink);

        $del = '../uploads/'.$oldphoto;
        unlink($del);
        
    }else{

        $imageLink = $oldphoto;

    }

    $sql = "UPDATE subcategories SET name=?, photo=?, category_id=? WHERE id=$id";
    $res = myQuery($sql, [$name, $imageLink, $category]);

    header('location: subcategory_list.php');