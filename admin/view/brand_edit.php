<?php

    $currentPage = 'brand';
    include_once "../template/header.php";
    include_once "../system/function.php";

    $id = $_GET['id'];

    $tmp = "SELECT * FROM brand where id=$id";
    $b = getItems($tmp);
    
?>

    <!--content Area Start-->
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                    <li class="breadcrumb-item"><a href="brand_list.php" class="text-success">Brand</a></li>
                    <li class="breadcrumb-item text-success active" aria-current="page">Update Brand</li>
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
                        Update Brand
                        </h4>
                        <a href="brand_list.php" class="btn btn-outline-success">
                            <i class="feather-list"></i>
                        </a>
                    </div>
                    <hr>

                    <form action="brand_update.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $b[0]->id ?>">
                        <input type="hidden" name="oldphoto" value="<?= $b[0]->photo ?>">

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="photo">
                                        Photo Upload
                                    </label>
                                    <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support Jpg, Png"></i>

                                    <input type="file" name="photo" id="photo" class="form-control p-1"><br>

                                    <img src="<?php echo "../uploads/".$b[0]->photo ?>" alt="Photo" width="150" height="auto">
                                </div>

                                <div class="form-group">
                                    <label for="name">Brand Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?= $b[0]->name ?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-success">
                                    <i class="feather-save"></i>&nbsp; Update
                                </button>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php
    include_once "../template/footer.php";
?>
