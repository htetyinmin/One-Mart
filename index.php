 <?php 


    include_once "template/header.php";

 ?>
 
 



  <!-- slider -->
  <div class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/frontend/img/slider/slider1.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slider2.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slider3.jpg" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slider4.jpg" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slider5.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slider6.jpg" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="assets/frontend/img/slider/slider7.png" class="d-block w-100" alt="slider image">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <!-- product ad -->
  <div class="product_ad">
    <div class="ad ad_one">
      <img src="assets/frontend/img/promotion/promo.jpg" alt="promotion" width="100%" height="100%" >
    </div>
    <div class="ad ad_two">
      <img src="assets/frontend/img/promotion/big_sale.jpg" alt="promotion" width="100%" height="100%">
    </div>
    <div class="ad ad_three">
      <img src="assets/frontend/img/promotion/weekly_promo.jpg" alt="promotion" width="100%" height="100%">
    </div>
  </div>


  <!-- Product -->
  <div class="product pt-5 pb-5">
    <div class="container-sm">
      <div class="row mb-3" id="my_product">

      </div>
    
      <!-- Pagination -->
      <div class="loading">
        <span>Loading</span>
        <span class="spinner-grow spinner-grow-sm" role="status"></span>
        <span class="spinner-grow spinner-grow-sm" role="status"></span>
        <span class="spinner-grow spinner-grow-sm" role="status"></span>
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
        <div class="modal-body">
          <div class="container-fliud">
              <div class="wrapper row">
                
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