<?php

    include_once "../system/function.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $photo = $_FILES['photo'];
    $oldphoto=$_POST['oldphoto'];
    var_dump($oldphoto);

    if(isset($photo) && $photo['size']>0){

        $imageLink = mt_rand(time(), time()) + mt_rand(time(), time()) . "_" . $photo['name'];
        move_uploaded_file($photo['tmp_name'], "../uploads/". $imageLink);

        $del = '../uploads/'.$oldphoto;
        unlink($del);
        
    }else{

        $imageLink = $oldphoto;

    }

    $sql = "UPDATE brand SET name=?, photo=? WHERE id=$id";
    $res = myQuery($sql, [$name, $imageLink]);

    header('location: brand_list.php');