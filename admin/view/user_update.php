<?php 
        
    $currentPage = 'user';
    include_once "../system/function.php";

    $id = $_POST["id"];

    $sql = "SELECT *, role.id as rid, role.name as rname FROM users 
    INNER JOIN model_has_role ON users.id=model_has_role.user_id 
    INNER JOIN role ON model_has_role.role_id=role.id where users.id=$id";
    $users = getItems($sql);
    // var_dump($users);

    if ($users[0]->rname == "Admin") {

        $sql = "UPDATE model_has_role SET role_id=? WHERE user_id=$id";
        $res = myQuery($sql, [2]);

    } else {

        $sql = "UPDATE model_has_role SET role_id=? WHERE user_id=$id";
        $res = myQuery($sql, [1]);

    }

    header("location: user_list.php");

?>