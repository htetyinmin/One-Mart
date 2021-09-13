<?php
    $currentPage = 'category';
    include_once "../template/header.php";
    include_once "../system/function.php";

    $sql = "SELECT * FROM categories";
    $categoryAll = getItems($sql);
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
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                
                                foreach($categoryAll as $category){
                                
                                ?>
                                    <tr>
                                        <td><?= $category->name; ?></td>
                                        <td>
                                            <a href="category_edit.php?id=<?php echo $category->id ?>" class="btn btn-outline-success"><i class="feather-edit"></i></a>

                                            <!-- <a href="#" class="bg"><i class="feather-trash-2 text-danger"></i></a> -->

                                            <form action="category_delete.php" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                                <input type="hidden" name="id" value="<?= $category->id ?>">
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
