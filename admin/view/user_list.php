<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    
    $currentPage = 'user';
    include_once "../template/header.php";

    $sql = "SELECT users.*,role.id as rid, role.name as rname FROM users 
    INNER JOIN model_has_role ON users.id=model_has_role.user_id 
    INNER JOIN role ON model_has_role.role_id=role.id";
    $users = getItems($sql);
    // var_dump($users);

    $admin = getSession('admin');
    // echo $admin['admin_email'];
    
?>

            <!--content Area Start-->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" class="text-success">User List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">
                                    <i class="feather-user text-success"></i> User List
                                </h4>
                                <div class="">
                                    <a href="#" class="btn btn-outline-secondary full-screen-btn">
                                        <i class="feather-maximize-2"></i>
                                    </a>
                                    <!-- <a href="item_add.html" class="btn btn-outline-success">
                                        <i class="feather-plus-circle"></i>
                                    </a> -->
                                </div>
                            </div>
                            <hr>
                            <table id="list" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                    $i = 1;
                                    foreach ($users as $user) {

                                ?>
                                    <tr>
                                        <td><?= $i++."." ?></td>
                                        <td><?= $user->name ?></td>
                                        <td><?= $user->email ?></td>
                                        <td><?= $user->rname ?></td>
                                        <td>
                                            <form action="user_update.php" method="POST" onsubmit="return confirm('Are you sure want to perform this action?')">
                                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                                <?php if ($user->rname == "User") { ?>
                                                    <button class="btn btn-outline-success" type="submit" name="submit">Promote</button>
                                                <?php } else { ?>
                                                    <button class="btn btn-outline-danger" type="submit" name="submit" <?php
                                                    
                                                        if ($admin['admin_email'] == $user->email) {
                                                            echo "disabled";
                                                        }

                                                    ?>>Demote</button>
                                                    <?php
                                                        if ($admin['admin_email'] == $user->email) {
                                                            echo '<i class="feather-info text-danger" data-container="body" data-toggle="popover" data-placement="top" data-content="You cannot demote yourself as a user!"></i>';
                                                        }
                                                    ?>
                                                <?php } ?>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="user_delete.php" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                                <button class="btn btn-outline-danger" name="delete" <?php
                                                    
                                                    if ($admin['admin_email'] == $user->email) {
                                                        echo "disabled";
                                                    }

                                                ?>>
                                                    <i class="feather-trash-2"></i>
                                                </button>
                                                <?php
                                                    if ($admin['admin_email'] == $user->email) {
                                                        echo '<i class="feather-info text-danger" data-container="body" data-toggle="popover" data-placement="top" data-content="You cannot delete yourself!"></i>';
                                                    }
                                                ?>
                                            </form>
                                        </td>
                                    </tr>

                                <?php } ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--content Area Start-->
        </div>
    </div>
<?php
    include_once "../template/footer.php";
?>
