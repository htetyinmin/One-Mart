<?php
      include_once "../template/header.php";
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
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                              <label for="photo">
                                                  Photo Upload
                                              </label>
                                              <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support Jpg, Png"></i>
  
                                              <input type="file" name="photo" id="photo" class="form-control p-1" required>
                                        </div>
                                        <div class="form-group">
                                              <label for="name">Item Name</label>
                                              <input type="text" id="name" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                              <label for="t">Brand</label>
                                              <select name="type" class="form-control custom-select" id="t">
                                                  <option value="0">Addidas</option>
                                                  <option value="1">Polo</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                              <label for="c">Category</label>
                                              <select name="type" class="form-control custom-select" id="c">
                                                  <option value="" selected>Select Category</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                              <label for="sc">Sub Category</label>
                                              <select name="type" class="form-control custom-select" id="sc">
                                                  <option value="" selected>Select SubCategory</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                          <div class="form-group">
                                              <label for="price">Price</label>
                                              <input type="number" id="price" name="price" class="form-control">
                                          </div>
                                          <div class="form-group">
                                              <label for="price">Discount</label>
                                              <input type="number" id="price" name="price" class="form-control">
                                          </div>
                                          <div class="form-group">
                                              <label for="des">Description</label>
                                              <textarea type="text" id="des" name="des" rows="6" class="form-control"></textarea>
                                          </div>
                                          <button class="btn btn-success"><i class="feather-save"></i>&nbsp; Save</button>
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
