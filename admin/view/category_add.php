<?php
    $currentPage = 'category_add';
    include_once "../template/header.php";
    include_once "../system/function.php";

      if(isset($_POST["submit"])){

        $name = $_POST['name'];

        if(empty($_POST["name"])){
            echo "Please Enter Category Name ....";
        }

        $sql = "INSERT INTO categories (name) values (?)";
        $res = myQuery($sql, [$name]);

        if($res){
            echo "Category Add Successfully!";
        }else{
            echo "Category Add Unsuccessfully, Please Try Again!";
        }
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
              <div class="row">
                  <div class="col-12">
                      <div class="card mb-4">
                          <div class="card-body">
                              <div class="d-flex justify-content-between align-items-center">
                                  <h4 class="mb-0">
                                    Add Category
                                  </h4>
                                  <a href="category_list.php" class="btn btn-outline-success">
                                      <i class="feather-list"></i>
                                  </a>
                              </div>
                              <hr>
                              <form action="<?php $_PHP_SELF ?>" method="post">
                                  <div class="row">
                                      <div class="col-12 col-md-6">
                                          <!-- <div class="form-group">
                                              <label for="photo">
                                                  Photo Upload
                                              </label>
                                              <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support Jpg, Png"></i>
  
                                              <input type="file" name="photo" id="photo" class="form-control p-1" required>
                                          </div> -->
                                          <div class="form-group">
                                              <label for="name">Category Name</label>
                                              <input type="text" id="name" name="name" class="form-control">
                                          </div>
                                          <button class="btn btn-success" type="submit" name="submit"><i class="feather-save"></i>&nbsp; Save</button>
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
