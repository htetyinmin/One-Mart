<?php
      include_once "../template/header.php";
?>

            <!--content Area Start-->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.html" class="text-success">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" class="text-success">Category List</li>
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
                                    <i class="feather-list text-success"></i> Category List
                                </h4>
                                <div class="">
                                    <a href="#" class="btn btn-outline-secondary full-screen-btn">
                                        <i class="feather-maximize-2"></i>
                                    </a>
                                    <a href="category_add.php" class="btn btn-outline-success">
                                        <i class="feather-plus-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <table id="list" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Books</td>
                                    <td>
                                        <img src="../../assets/backend/img/item/item3.png" width="70" height="100" alt="Cover">
                                    </td>
                                    <td>
                                        <a href="#" class="bg"><i class="feather-edit text-success"></i></a>
                                        <a href="#" class="bg"><i class="feather-trash-2 text-danger"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
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
