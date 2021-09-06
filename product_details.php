<?php 

    include_once "template/header.php";
    // include_once "admin/system/function.php";

?>


<!-- background image -->
<div class="bg_image">
    <!-- Breadcrumb -->
    <div class="bd_crumb">
        <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
        <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>-->
        </div>
    </div> 
</div>


  <!-- product details -->
  <div class="container my-5">
      <div class="panel">
          <div class="container-fliud">
              <div class="wrapper row">
                  <div class="preview col-lg-6">
                      
                      <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="../assets/frontend/img/product/device.jpg" /></div>
                        <div class="tab-pane" id="pic-2"><img src="../assets/frontend/img/product/laptop-11.jpg" /></div>
                        <div class="tab-pane" id="pic-3"><img src="../assets/frontend/img/product/device.jpg" /></div>
                        <div class="tab-pane" id="pic-4"><img src="../assets/frontend/img/product/laptopfordesign.jpg" /></div>
                        <div class="tab-pane" id="pic-5"><img src="../assets/frontend/img/product/device.jpg" /></div>
                      </div>
                      <ul class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-bs-target="#pic-1" data-bs-toggle="tab"><img src="../assets/frontend/img/product/device.jpg" /></a></li>
                        <li><a data-bs-target="#pic-2" data-bs-toggle="tab"><img src="../assets/frontend/img/product/laptop-11.jpg" /></a></li>
                        <li><a data-bs-target="#pic-3" data-bs-toggle="tab"><img src="../assets/frontend/img/product/device.jpg" /></a></li>
                        <li><a data-bs-target="#pic-4" data-bs-toggle="tab"><img src="../assets/frontend/img/product/laptopfordesign.jpg" /></a></li>
                        <li><a data-bs-target="#pic-5" data-bs-toggle="tab"><img src="../assets/frontend/img/product/device.jpg" /></a></li>
                      </ul>
                      
                  </div>
                  <div class="details col-lg-6">
                      <h3 class="product-title">Dell XPS Laptop</h3>
                      <div class="rating">
                          <div class="stars">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          </div>
                          <span class="review-no">41 reviews</span>
                      </div>
                      <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                      <h4 class="price">current price: <span>1,600,000Ks</span></h4>
                      <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                      <h5 class="sizes">sizes:
                          <span class="size" data-toggle="tooltip" title="small">s</span>
                          <span class="size" data-toggle="tooltip" title="medium">m</span>
                          <span class="size" data-toggle="tooltip" title="large">l</span>
                          <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                      </h5>
                      <h5 class="colors">colors:
                          <span class="color orange" data-toggle="tooltip" title="Not In store"></span>
                          <span class="color green"></span>
                          <span class="color blue"></span>
                      </h5>
                      <div class="action">
                          <button type="button" class="btn btn-primary add-to-cart"><i class="fas fa-cart-arrow-down"></i>&nbsp;&nbsp;add to cart</button>
                          <button type="button" class="btn btn-light like"><i class="far fa-heart"></i></button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>



<?php 
    
    include_once "template/footer.php";

?>