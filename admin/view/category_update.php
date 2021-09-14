<?php

    include_once "../system/function.php";

    $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "UPDATE categories SET name=? WHERE id=$id";
    $res = myQuery($sql, [$name]);

    header('location: category_list.php');