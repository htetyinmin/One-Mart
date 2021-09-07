<?php
    $currentPage = 'item';
    include_once "../template/header.php";
    include_once "../system/function.php";
    
    if(isset($_POST['submit'])) {
        $codeno = $_POST['codeno'];
        $name = $_POST['name'];
        $photo = $_FILES['photo'];
        $brand = $_POST['brand'];
        $subcategory = $_POST['subcategory'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $description = $_POST['description'];
        // var_dump($brand);die();

        $imageLink = mt_rand(time(), time()) + mt_rand(time(), time()) . "_" . $photo['name'];
        move_uploaded_file($photo['tmp_name'], "../uploads/". $imageLink);

        $sql = "INSERT INTO items(codeno, name, photo, brand_id, subcategory_id, price, discount,description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $querry = myQuery($sql, [$codeno, $name, $imageLink, $brand, $subcategory, $price, $discount, $description]);
        
        // echo $querry;  
    }

    $select_brand = "SELECT * FROM brand";
    $brands = getItems($select_brand);

    $select_subcategory = "SELECT * FROM subcategories";
    $subcategories = getItems($select_subcategory);
?>

                <!--content Area Start-->
            <div class="row">
                  <div class="col-12">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb bg-white mb-4">
                              <li class="breadcrumb-item"><a href="dashboard.html" class="text-success">Home</a></li>
                              <li class="breadcrumb-item"><a href="brand_list.html" class="text-success">Item</a></li>
                              <li class="breadcrumb-item text-success active" aria-current="page">Add Item</li>
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
                                    Add Item
                                  </h4>
                                  <a href="item_list.php" class="btn btn-outline-success">
                                      <i class="feather-list"></i>
                                  </a>
                            </div>
                            <hr>
                            <form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                              <label for="name">Code No.</label>
                                              <input type="text" id="codeno" name="codeno" class="form-control">
                                        </div>
                                        <div class="form-group">
                                              <label for="name">Item Name</label>
                                              <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                              <label for="photo">
                                                  Photo Upload
                                              </label>
                                              <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support Jpg, Png"></i>
  
                                              <input type="file" name="photo" id="photo" class="form-control p-1" required>
                                        </div>
                                        <div class="form-group">
                                              <label for="brand">Brand</label>
                                              <select name="brand" class="form-control custom-select" id="brand">
                                                  <option value="0" selected>Choose Brand</option>
                                                  <?php 
                                                        foreach($brands as $brand){
                                                            echo "<option value='$brand->id'>$brand->name</option>";
                                                        }
                                                   ?>
                                              </select>
                                        </div>
                                        <!-- <div class="form-group">
                                              <label for="c">Category</label>
                                              <select name="type" class="form-control custom-select" id="c">
                                                  <option value="" selected>Select Category</option>
                                              </select>
                                        </div> -->
                                        <div class="form-group">
                                              <label for="subcategory">Subcategory</label>
                                              <select name="subcategory" class="form-control custom-select" id="subcategory">
                                                  <option value="0" selected>Choose Subcategory</option>
                                                  <?php 
                                                        foreach($subcategories as $sub){
                                                            echo "<option value='$sub->id'>$sub->name</option>";
                                                        }
                                                   ?>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                          <div class="form-group">
                                              <label for="price">Price</label>
                                              <input type="number" id="price" name="price" class="form-control">
                                          </div>
                                          <div class="form-group">
                                              <label for="discount">Discount</label>
                                              <input type="number" id="discount" name="discount" class="form-control">
                                          </div>
                                          <div class="form-group">
                                              <label for="description">Description</label>
                                              <textarea type="text" id="description" name="description" rows="6" class="form-control"></textarea>
                                          </div>
                                          <button class="btn btn-success" name="submit" type="submit"><i class="feather-save"></i>&nbsp; Save</button>
                                    </div>
                                </div>
                              <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
              <!--content Area Start-->
<?php
    include_once "../template/footer.php";
?>
