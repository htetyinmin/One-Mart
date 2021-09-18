<?php

    $currentPage = 'brand';
    include_once "../template/header.php";
    include_once "../system/function.php";

    if(isset($_POST['submit'])) {

        $name = $_POST['name'];
        $photo = $_FILES['file'];


        if(empty($name)) {
            echo "Please fil brand name!";
        }

        if(empty($photo['tmp_name'])) {
            echo "Please choose photo!";
        }

        $imageLink = mt_rand(time(), time()) + mt_rand(time(), time()) . "_" . $photo['name'];
        move_uploaded_file($photo['tmp_name'], "../uploads/". $imageLink);
    
        $sql = "INSERT INTO brand(name, photo) VALUES (?, ?)";
        $res = myQuery($sql, [$name, $imageLink]);
        
    }
?>

<!--content Area Start-->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                    <li class="breadcrumb-item"><a href="brand_list.php" class="text-success">Brand</a></li>
                    <li class="breadcrumb-item text-success active" aria-current="page">Add Brand</li>
                </ol>
            </nav>
        </div>
    </div>

    <?php if(isset($res)) { ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Message: </strong>Brand Added Successfully! <a href="brand_list.php"><u>Back to List</u></a>
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
                        Add Brand
                        </h4>
                        <a href="brand_list.php" class="btn btn-outline-success">
                            <i class="feather-list"></i>
                        </a>
                    </div>
                    <hr>

                    <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="photo">
                                        Photo Upload
                                    </label>
                                    <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support Jpg, Png"></i>

                                    <input type="file" name="file" id="photo" class="form-control p-1">
                                </div>

                                <div class="form-group">
                                    <label for="name">Brand Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>

                                <button type="submit" name="submit" class="btn btn-success">
                                    <i class="feather-save"></i>&nbsp; Save
                                </button>
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
