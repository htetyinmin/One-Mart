<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    include_once "../system/function.php";

    $id = $_POST['id'];

    $tmp = "DELETE FROM categories where id=$id";
    getItems($tmp);

    header('location: category_list.php');