<?php

    $currentPage = 'category';
    include_once "../template/header.php";
    include_once "../system/function.php";

    $id = $_GET['id'];
    
    $tmp = "SELECT * FROM categories where id=$id";
    $c = getItems($tmp);
?>

                <!--content Area Start-->
    <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                        <li class="breadcrumb-item"><a href="category_list.php" class="text-success">Category</a></li>
                        <li class="breadcrumb-item text-success active" aria-current="page">Update Category</li>
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
                            Update Category
                            </h4>
                            <a href="category_list.php" class="btn btn-outline-success">
                                <i class="feather-arrow-left-circle"></i>
                            </a>
                        </div>
                        <hr>
                        <form action="category_update.php" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">

                                    <input type="hidden" name="id" value="<?= $c[0]->id ?>">

                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="<?= $c[0]->name ?>">
                                    </div>

                                    <button class="btn btn-success" type="submit" name="submit"><i class="feather-save"></i>&nbsp; Update </button>
                            </div>
                        </div>
                        <hr>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<?php
    include_once "../template/footer.php";
?>
