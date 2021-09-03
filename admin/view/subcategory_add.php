<?php
      include_once "../template/header.php";
      include_once "../system/function.php";
      
      if(isset($_POST['submit'])) {
          
          $name = $_POST['name'];
          $photo = $_FILES['file'];
          $category = $_POST['category'];
        //   var_dump($category);

        if(empty($name)) {
            echo "Please fil subcategoy name!";
        }

        if(empty($photo['tmp_name'])) {
            echo "Please choose photo!";
        }


        $imageLink = mt_rand(time(), time()) + mt_rand(time(), time()) . "_" . $photo['name'];
        move_uploaded_file($photo['tmp_name'], "../uploads/". $imageLink);

    
        $sql = "INSERT INTO subcategories(name, photo, category_id) VALUES (?, ?, ?)";
        $res = myQuery($sql, [$name, $imageLink, $category]);
        
        echo $res;
        
        
        
    }
    $cate = "SELECT * FROM categories";
    $category = getItems($cate);
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
                                  <a href="subcategory_list.php" class="btn btn-outline-success">
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
  
                                              <input type="file" name="file" id="photo" class="form-control p-1" required>
                                          </div>
                                          <div class="form-group">
                                              <label for="name">Item Name</label>
                                              <input type="text" id="name" name="name" class="form-control">
                                          </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                          <div class="form-group">
                                                <label for="c">Category</label>
                                                <select name="category" class="form-control custom-select" id="c">
                                                <option value="" selected>Select Category</option>
                                                <?php 
                                                    foreach($category as $cate){
                                                        echo "<option value='$cate->id'>$cate->name</option>";
                                                    }
                                                ?>
                                                </select>
                                          </div>
                                          <div class="my-5">
                                                <button class="btn btn-success" name="submit" type="submit"><i class="feather-save"></i>&nbsp; Save</button>
                                          </div>
                                    </div>
                              </div>
                              <hr>
                        </form>
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
