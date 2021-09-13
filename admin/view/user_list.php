<?php
    $currentPage = 'user';
    include_once "../template/header.php";
    include_once "../system/function.php";

    $sql = "SELECT * FROM users";
    $users = getItems($sql);
    
?>

            <!--content Area Start-->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.html" class="text-success">Home</a></li>
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
                                    <i class="feather-list text-success"></i> User List
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
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Email</th>
                                    <th>Start Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                    foreach ($users as $user) {
                                        
                                        $date = substr($user->created_at, 0, 10);

                                ?>
                                    <tr>
                                        <td><?= $user->name ?></td>
                                        <td>
                                            <img src="../../assets/backend/img/user/avatar5.jpg" width="70" height="100" alt="Cover">
                                        </td>
                                        <td><?= $user->email ?></td>
                                        <td><?= $date ?></td>
                                        <td>
                                            <!-- <a href="#" class="bg"><i class="feather-alert-circle text-success"></i></a> -->
                                            
                                            <form action="user_delete.php" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                                <input type="hidden" name="id" value="<?= $id ?>">
                                                <button class="btn btn-outline-danger" name="delete">
                                                    <i class="feather-trash-2"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                <?php } ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Email</th>
                                    <th>Start Date</th>
                                    <th>Action</th>
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
