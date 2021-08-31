 <?php 

    include_once "./ini.php";
    include_once "./template/header.php";


 ?>
 
 
   <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light nav-color">
    <div class="container">
      <a class="navbar-brand" href="index.html" title="home">
          <i class="fa fa-home"></i>
      </a>
      <form class="d-flex">
          <input class="form-control me-2 input" type="search" placeholder="search">
      </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-ellipsis-v"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" title="category">
            <i class="fa fa-list-ul"></i>
            <span>Category</span>
            </a>
            <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="./view/product_details.php">
                <i class="fa fa-box-open i_color"></i>
                <span>Product</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                <i class="fa fa-pizza-slice i_color"></i>
                <span>Food</span>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-item">
                <i class="fa fa-tshirt i_color"></i>
                <span>Fashion</span>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-item">
                <i class="fa fa-capsules i_color"></i>
                <span>Health & Beauty</span>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-item">
                <i class="fa fa-laptop i_color"></i>
                <span>Electronic Devices</span>
                </a>
            </li>
            <li>
                <a href="#" class="dropdown-item">
                <i class="fa fa-fan i_color"></i>
                <span>Home Accessories</span>
                </a>
            </li>
            </ul>
          </li>
     
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" title="sale">
              <i class="fa fa-tags"></i>
              <span>Payment</span>
              </a>
              <ul class="dropdown-menu">
              <li>
                  <a class="dropdown-item" href="#">
                  <i class="fa fa-money-check-alt i_color"></i>
                  <span>Payment</span>
              </a>
              </li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link cart_icon" href="<?php echo $root; ?>"roduct_cart.php" title="cart">
            <i class="fa fa-cart-plus position-relative">
                <!-- <span class="position-absolute top-0 start-100 translate-middle p-1 rounded-circle my-cart-badge">
                </span> -->
                <span class="position-absolute translate-middle badge rounded-pill noti">
                  99+
                  <span class="visually-hidden">unread messages</span>
                </span>
            </i><span>Cart</span>

            </a>
          </li>

          </ul>

          <ul class="navbar-nav my-nav">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" title="manage account">
                <i class="fa fa-users-cog"></i>
                <span class="f_color">Kyaw Min Tun</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="./profile.html">
                    <i class="fa fa-user i_color"></i>
                    <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="./register.html">
                      <i class="fa fa-sign-in-alt i_color"></i>
                      <span>SignUp</span>
                    </a>
                </li>
                <li>
                  <a class="dropdown-item" href="./login.html">
                  <i class="fa fa-sign-in-alt i_color"></i>
                  <span>Login</span>
                  </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="#">
                    <i class="fa fa-sign-out-alt i_color"></i>
                    <span>Logout</span>
                    </a>
                </li>
              </ul>
          </li>
          </ul>
      </div>
    </div>
  </nav>


  <!-- slider -->
  <div class="slider">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/frontend/img/slider/slider1.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="./assets/frontend/img/slider/slider2.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="./assets/frontend/img/slider/slider3.jpg" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="./assets/frontend/img/slider/slider4.jpg" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="./assets/frontend/img/slider/slider5.png" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="./assets/frontend/img/slider/slider6.jpg" class="d-block w-100" alt="slider image">
        </div>
        <div class="carousel-item">
          <img src="./assets/frontend/img/slider/slider7.png" class="d-block w-100" alt="slider image">
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
      <img src="./assets/frontend/img/promotion/promo.jpg" alt="promotion" width="100%" height="100%" >
    </div>
    <div class="ad ad_two">
      <img src="./assets/frontend/img/promotion/big_sale.jpg" alt="promotion" width="100%" height="100%">
    </div>
    <div class="ad ad_three">
      <img src="./assets/frontend/img/promotion/weekly_promo.jpg" alt="promotion" width="100%" height="100%">
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

  include_once "./template/footer.php";

?>