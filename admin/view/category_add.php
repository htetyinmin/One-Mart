<?php
    $currentPage = 'category';
    include_once "../template/header.php";
    include_once "../system/function.php";

      if(isset($_POST["submit"])){

        $name = $_POST['name'];

        $sql = "INSERT INTO categories (name) values (?)";
        $res = myQuery($sql, [$name]);
        
      }
?>

<!--content Area Start-->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.html" class="text-success">Home</a></li>
                    <li class="breadcrumb-item"><a href="brand_list.html" class="text-success">Category</a></li>
                    <li class="breadcrumb-item text-success active" aria-current="page">Add Category</li>
                </ol>
            </nav>
        </div>
    </div>

    <?php if(isset($res)) { ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Message: </strong>Category Added Successfully! <a href="category_list.php"><u>Back to List</u></a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php } ?>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">
                        Add Category
                        </h4>
                        <a href="category_list.php" class="btn btn-outline-success">
                            <i class="feather-arrow-left-circle"></i>
                        </a>
                    </div>
                    <hr>
                    <form action="<?php $_PHP_SELF ?>" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                                <button class="btn btn-success" type="submit" name="submit"><i class="feather-save"></i>&nbsp; Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--content Area Start-->
   
<?php
    include_once "../template/footer.php";
?>
