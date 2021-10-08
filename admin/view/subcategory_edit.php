<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    $currentPage = 'subcategory';
    include_once "../template/header.php";

    $id = $_GET['id'];

    $tmp = "SELECT * FROM subcategories where id=$id";
    $s = getItems($tmp);

    $cate = "SELECT * FROM categories";
    $category = getItems($cate);

?>

                <!--content Area Start-->
            <div class="row">
                  <div class="col-12">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb bg-white mb-4">
                              <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                              <li class="breadcrumb-item"><a href="subcategory_list.php" class="text-success">Subcategory</a></li>
                              <li class="breadcrumb-item text-success active" aria-current="page">Update Subcategory</li>
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
                                    Update Subcategory
                                  </h4>
                                  <a href="subcategory_list.php" class="btn btn-outline-success">
                                      <i class="feather-list"></i>
                                  </a>
                              </div>
                              <hr>
                              <form action="subcategory_update.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $s[0]->id ?>">
                                <input type="hidden" name="oldphoto" value="<?= $s[0]->photo ?>">
                                  <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="photo">
                                                Photo Upload
                                            </label>
                                            <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support jpg & png Format"></i>

                                            <input type="file" name="photo" id="photo" class="form-control p-1"><br>

                                            <img src="<?php echo "../uploads/".$s[0]->photo ?>" alt="Photo" width="150" height="auto">
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Subcategory Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value="<?= $s[0]->name ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                          <div class="form-group">
                                                <label for="category">Category</label>
                                                <select name="category" class="form-control custom-select" id="category">

                                                <?php
                                                    foreach($category as $cat){
                                                        $id = $cat->id;
                                                        $name = $cat->name;
                                                        $cid = $s[0]->category_id;

                                                        if($cid == $id){
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
                                        <div class="">
                                            <button class="btn btn-success" name="submit" type="submit"><i class="feather-save"></i>&nbsp; Update</button>
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
