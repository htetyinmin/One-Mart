<?php

    $currentPage = 'item';
    include_once "../template/header.php";
    include_once "../system/function.php";

    $id = $_GET['id'];

    $tmp = "SELECT * FROM items where id=$id";
    $i = getItems($tmp);

    $brand = "SELECT * FROM brand";
    $brands = getItems($brand);

    $subcategory = "SELECT * FROM subcategories";
    $subcategories = getItems($subcategory);
   
?>

<!--content Area Start-->
    <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                        <li class="breadcrumb-item"><a href="item_list.php" class="text-success">Item</a></li>
                        <li class="breadcrumb-item text-success active" aria-current="page">Update Item</li>
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
                            Update Item
                            </h4>
                            <a href="item_list.php" class="btn btn-outline-success">
                                <i class="feather-list"></i>
                            </a>
                    </div>
                    <hr>
                    <form action="item_update.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $i[0]->id ?>">
                        <input type="hidden" name="oldphoto" value="<?= $i[0]->photo ?>">

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                        <label for="name">Code No.</label>
                                        <input type="text" id="codeno" name="codeno" class="form-control" value="<?= $i[0]->codeno ?>" required>
                                </div>
                                <div class="form-group">
                                        <label for="name">Item Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="<?= $i[0]->name ?>" required>
                                </div>
                                <div class="form-group">
                                        <label for="photo">
                                            Photo Upload
                                        </label>
                                        <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support Jpg, Png"></i>

                                        <input type="file" name="photo" id="photo" class="form-control p-1"><br>

                                        <img src="<?php echo "../uploads/".$i[0]->photo ?>" alt="Photo" width="150" height="auto">
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand</label>
                                    <select name="brand" class="form-control custom-select" id="brand" required>

                                        <?php
                                            foreach($brands as $brand){
                                                $id = $brand->id;
                                                $name = $brand->name;
                                                $iid = $i[0]->brand_id;

                                                if($iid == $id){
                                                    echo "<option value='$id' selected>$name</option>";
                                                }else{
                                                    echo "<option value='$id'>$name</option>";
                                                }
                                            }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory">Subcategory</label>
                                    <select name="subcategory" class="form-control custom-select" id="subcategory" required>
                                        <?php
                                            foreach($subcategories as $sub){
                                                $id = $sub->id;
                                                $name = $sub->name;
                                                $iid = $i[0]->subcategory_id;

                                                if($iid == $id){
                                                    echo "<option value='$id' selected>$name</option>";
                                                }else{
                                                    echo "<option value='$id'>$name</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" id="price" name="price" class="form-control" value="<?= $i[0]->price ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="number" id="discount" name="discount" class="form-control" value="<?= $i[0]->discount ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea type="text" id="description" name="description" rows="6" class="form-control" required><?= $i[0]->description ?></textarea>
                                    </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <button class="btn btn-success" name="submit" type="submit"><i class="feather-save"></i>&nbsp; Save</button>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--content Area End-->

<?php
    include_once "../template/footer.php";
?>
