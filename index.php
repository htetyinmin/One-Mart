 <?php 

  include_once "template/header.php";
  include_once "admin/system/function.php";
  include_once "system/function.php";


    $sql = "SELECT * FROM items";
    $items = itemsAll($sql);

    //for discount item
    $sql="SELECT * FROM items where discount != '' order by rand() LIMIT 8";
    $discountitems = itemsAll($sql);

    $sql = "SELECT * FROM subcategories";
    $subcategories = getItems($sql);
    // var_dump($subcategories);

    $sql = "SELECT * FROM brand";
    $brands = getItems($sql);
    
    
 ?>
 
 



  <!-- slider -->
  <div class="slider mb-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner ban-parent">
        <div class="carousel-item active">
          <img src="assets/frontend/img/slider/slide1.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slide2.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slide3.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slide4.png" class="d-block w-100" alt="slider image">
        </div>

        <div class="ban-child">
            <div class="ban-title animate__animated animate__fadeInDown">
              <h1>One Mart Online Shop</h1>
            </div>
            <div class="ban-content">
              <p class="animate__animated animate__slideInLeft">Just For You.</p>
              <p class="animate__animated animate__slideInRight">Make your enjoy shopping</p>
            </div>
            <div class="ban-btn animate__animated animate__slideInUp">
              <button type="button">Shop Now</button>
            </div>
          </div>
      </div>


      <button class="carousel-control-prev slider-btn" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next slider-btn" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Product -->
  <div class="product pt-5 pb-3 mb-3">
    <div class="container-sm">
      <div class="row mb-3">
        <h3 class="title text-center">Deals Of The Day</h3>
        <!-- <div class="line"></div> -->
      </div>
      <div class="row mb-3 card-slide" id="">
        <?php foreach($items as $item){
          
          $ai_id=$item['id'];
          $ai_codeno=$item['codeno'];
          $ai_name=$item['name'];
          $ai_photo=$item['photo'];
          $ai_price=$item['price'];
          $ai_discount=$item['discount'];
          $ai_description=$item['description'];

          ?>
          
          <div class="col-md-4 col-lg-2 my-3">
            <div class="card">
                <div class="buy">
                  <button type="button" title="Add to wishlist">
                  <i class="far fa-heart"></i>
                  </button>
                </div>
                <a href="product_details.php?id=<?= $ai_id?>" type="button">
                  <img src="admin/uploads/<?= $ai_photo ?>" class="card-img p-3" height=160 alt="...">
                </a>
                <div class="card-body" style="height: 170px;">
                  <h5 class="card-title"><?= $ai_name ?></h5>
                  <p class="card-text"><?= substr($ai_description,0,50) ?>&nbsp;<a href="#">more...</a></p>
                  <div class="price">
                  <?php if($ai_discount) {?>
                    <span class="current_price"><?= $ai_discount ?> &nbsp;MMK</span><br>
                    <span class="old_price"><del><?= $ai_price ?> &nbsp;MMK</del></span>
                  <?php }else{?>
                    <span class="current_price"><?= $ai_price ?> &nbsp;MMK</span><br>
                  <?php } ?>
                  </div>
                </div>

                <div class="order_btn">
                  
                  <button class="btn btn-danger btn-sm cart_btn addtocart" data-id="<?= $ai_id ?>" data-name="<?= $ai_name ?>" 
								data-price="<?= $ai_price ?>" data-discount="<?= $ai_discount ?>" data-photo="<?= $ai_photo ?>" data-codeno="<?= $ai_codeno ?>"><i class="fa fa-cart-arrow-down"></i></button>

                <button class="btn btn-primary btn-sm cart_btn view_btn" data-id="<?= $ai_id ?>" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="fas fa-eye"></i></button>
                  
                </div>
            </div>
          </div>
        <?php } ?>
      </div>
    
      <!-- Pagination -->
      <div class="loading">
        <a href="products.php"><span>See More</span>
        </a>
      </div>
    
    </div>
  </div>

  <!-- Discount Product -->
  <div class="product pt-5 pb-3 mb-3">
    <div class="container-sm">
      <div class="row mb-3">
        <h3 class="title text-center">Discount Product</h3>
        <!-- <div class="line"></div> -->
      </div>
      <div class="row mb-3 card-slide" id="">
        <?php foreach($discountitems as $item){
          
          $ai_id=$item['id'];
          $ai_name=$item['name'];
          $ai_photo=$item['photo'];
          $ai_price=$item['price'];
          $ai_discount=$item['discount'];
          $ai_description=$item['description'];

          ?>
          
          <div class="col-md-4 col-lg-2 my-3">
            <div class="card">
                <div class="buy">
                  <button type="button" title="Add to wishlist">
                  <i class="far fa-heart"></i>
                  </button>
                </div>
                <a href="product_details.php?id=<?= $ai_id?>" type="button">
                  <img src="admin/uploads/<?= $ai_photo ?>" class="card-img p-3" height=160 alt="...">
                </a>
                <div class="card-body" style="height: 170px;">
                  <h5 class="card-title"><?= $ai_name ?></h5>
                  <p class="card-text"><?= substr($ai_description,0,50) ?>&nbsp;<a href="#">more...</a></p>
                  <div class="price">
                  <?php if($ai_discount) {?>
                    <span class="current_price"><?= $ai_discount ?> &nbsp;MMK</span><br>
                    <span class="old_price"><del><?= $ai_price ?> &nbsp;MMK</del></span>
                  <?php }else{?>
                    <span class="current_price"><?= $ai_price ?> &nbsp;MMK</span><br>
                  <?php } ?>
                  </div>
                </div>
                <div class="order_btn">

                  <a href="product_details.php?id=<?= $ai_id?>" type="button" class="btn btn-danger btn-sm cart_btn"><i class="fa fa-cart-arrow-down"></i></a>
                  
                  <button class="btn btn-primary btn-sm cart_btn view_btn" data-id="<?= $ai_id ?>" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="fas fa-eye"></i></button>

                </div>
            </div>
          </div>
        <?php } ?>
      </div>
    
      <!-- Pagination -->
      <div class="loading">
        <a href="products.php"><span>See More</span>
        </a>
      </div>
    
    </div>
  </div>

  <div class="latest pt-5 pb-3 mb-3">
    <div class="container-sm">
        <div class="row mb-3">
          <h3 class="title text-center">New Arrivals</h3>
          <!-- <div class="line"></div> -->
        </div>
        <nav class="d-flex align-items-center justify-content-center">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="latestBtn" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Electrionic Devices</button>
            <button class="latestBtn" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Fashion</button>
          </div>
        </nav>
        <div class="custom-content tab-content custom-tab" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="late-card">
                  <div class="circle"></div>
                  <div class="late-content">
                    <h2>Apple Watch</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil minus beatae iusto saepe dolores harum odit similique, vero at natus perferendis alias</p>
                    <a href="#">Buy Now</a>
                  </div>
                  <img src="admin/uploads/3265134628_p2-removebg-preview.png" alt="">
                </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="late-card">
                  <div class="circle"></div>
                  <div class="late-content">
                    <h2>T-shirt</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil minus beatae iusto saepe dolores harum odit similique, vero at natus perferendis alias</p>
                    <a href="#">Buy Now</a>
                  </div>
                  <img src="admin/uploads/3265135270_334311-removebg-preview.png" alt="">
                </div>
          </div>
      </div>      
    </div>
  </div>
  
  <!-- product ad -->
  <div class="product_ad pt-5 mb-3">
    <div class="container">
      <div class="row">
      <div class="ad ad_one">
        <img src="assets/frontend/img/promotion/fashion.jpg" alt="promotion" width="100%" height="100%" >
      </div>
      <div class="ad ad_two">
        <img src="assets/frontend/img/promotion/electronic.jpg" alt="promotion" width="100%" height="100%">
      </div>
      </div>
    </div>
    <!-- <div class="ad ad_three">
      <img src="assets/frontend/img/promotion/weekly_promo.jpg" alt="promotion" width="100%" height="100%">
    </div> -->
  </div>

  <!-- brand slide -->
  <div class="brand pt-5 pb-5">
    <div class="container">
      <div class="row mb-3">
        <h3 class="title text-center">Top Brands</h3>
        <div class="line"></div>
      </div>
      <div class="row">
        <div class="brand-slide mb-5">
          <?php foreach($brands as $brand){ ?>
          <div>
            <img src="admin/uploads/<?= $brand->photo ?>" width="200" height="200" alt="">
          </div>
         <?php }?>
        </div>
      </div>
    </div>
  </div>
  
  <!-- View Cart Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Your Shopping Cart</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-div">
              <div class="wrapper row">
                  <div class="preview col-lg-6">
                        <div class="image-box"><img src="admin/uploads/<?= $ai_photo?>"style="width: 371px; height:375px"/></div>
                  </div>
                  <div class="details col-lg-6">
                      <h3 class="product-title"><?= $ai_name ?></h3>
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
                      <p class="product-description"><?= $ai_description ?></p>
                      <?php if($ai_discount) {?>
                        <h4 class="price">Discount: <span><?= $ai_discount ?> &nbsp;MMKs</span></h4>
                        <h4 class="price">Price: <span><del><?= $ai_price ?></del> &nbsp;MMKs</span></h4>

   
                        <?php }else{?>
                        <h4 class="price">Price: <span><?= $ai_price ?> &nbsp;MMKs</span></h4>
                        <?php } ?>
                    
                        <div class="action">
                          <button type="button" class="btn btn-primary add-to-cart"><i class="fas fa-cart-arrow-down"></i>&nbsp;&nbsp;add to cart</button>
                          <button type="button" class="btn btn-light like"><i class="far fa-heart"></i></button>
                        </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer d-flex">
          <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal" title="Close Box Modal">Close</button>
          <button type="button" class="btn btn-light btn_wishlist" title="Add to Wishlist"><i class="far fa-heart"></i></button>
          <button type="button" class="btn btn-primary btn_cart" title="Add to Cart"><i class="fas fa-cart-arrow-down"></i>&nbsp;Add to Cart</button>
        </div>
      </div>
    </div>
  </div>


<?php 

  include_once "template/footer.php";

?>