<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    include_once "../system/function.php";

    $id = $_POST['id'];
    $codeno = $_POST['codeno'];
    $name = $_POST['name'];
    $photo = $_FILES['photo'];
    $oldphoto=$_POST['oldphoto'];
    $brand = $_POST['brand'];
    $subcategory = $_POST['subcategory'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    // var_dump($description);

    if(isset($photo) && $photo['size']>0){

        $imageLink = mt_rand(time(), time()) + mt_rand(time(), time()) . "_" . $photo['name'];
        move_uploaded_file($photo['tmp_name'], "../uploads/". $imageLink);

        $del = '../uploads/'.$oldphoto;
        unlink($del);
        
    }else{

        $imageLink = $oldphoto;

    }

    $sql = "UPDATE items SET codeno=?, name=?, photo=?, brand_id=?, subcategory_id=?, price=?, discount=?, description=? WHERE id=$id";
    $res = myQuery($sql, [$codeno, $name, $imageLink, $brand, $subcategory, $price, $discount, $description]);

    header('location: item_list.php');