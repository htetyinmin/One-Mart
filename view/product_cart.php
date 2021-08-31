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
                <a class="dropdown-item" href="./product_details.html">
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
            <a class="nav-link cart_icon" href="./product_cart.html" title="cart">
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



  <!-- My Cart -->
  <div class="carts">
    <div class="container">
      <h1>My Cart</h1>
      <div class="row">
        <div class="col-lg-9 col-sm-12 mb-3">
            <div class="card">
              <table class="table table-hover rounded-3">
                <thead class="text-muted">
                  <tr class="small">
                    <th>Products</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
        
                <tbody id="carts_table">
                  <tr>
                    <td class="col-md-6">
                      <div class="row">
                        <div class="product_img">
                          <img src="./assets/frontend/img/product/laptop-11.jpg" class="rounded" width="80" alt="product image">
                          <div class="product_name">
                            <p>Product Name</p>
                            <span>Brand: <small>America</small></span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-md-2">
                      <div class="quantity">
                        <input type="number" value="1" min="1" step="1" name="number" style="width: 50px;">
                      </div>
                    </td>
                    <td class="col-md-2">
                      <div class="price_wrap">
                        <div>100,000Ks</div>
                        <small class="text_muted"><span>100,000Ks</span> each</small>
                      </div>
                    </td>
                    <td class="col-md-2">
                      <button type="button" class="btn btn-sm" title="product details"><i class="fas fa-info"></i></i></button>
                      <button type="button" class="btn btn-sm" title="remove product"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="col-md-6">
                      <div class="row">
                        <div class="product_img">
                          <img src="./assets/frontend/img/product/laptop-11.jpg" class="rounded" width="80" alt="product image">
                          <div class="product_name">
                            <p>Product Name</p>
                            <span>Brand: <small>America</small></span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-md-2">
                      <div class="quantity">
                        <input type="number" value="1" min="1" step="1" name="number" style="width: 50px;">
                      </div>
                    </td>
                    <td class="col-md-2">
                      <div class="price_wrap">
                        <div>100,000Ks</div>
                        <small class="text_muted"><span>100,000Ks</span> each</small>
                      </div>
                    </td>
                    <td class="col-md-2">
                      <button type="button" class="btn btn-sm" title="product details"><i class="fas fa-info"></i></i></button>
                      <button type="button" class="btn btn-sm" title="remove product"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="col-md-6">
                      <div class="row">
                        <div class="product_img">
                          <img src="./assets/frontend/img/product/device.jpg" class="rounded" width="80" alt="product image">
                          <div class="product_name">
                            <p>Product Name</p>
                            <span>Brand: <small>America</small></span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-md-2">
                      <div class="quantity">
                        <input type="number" value="1" min="1" step="1" name="number" style="width: 50px;">
                      </div>
                    </td>
                    <td class="col-md-2">
                      <div class="price_wrap">
                        <div>100,000Ks</div>
                        <small class="text_muted"><span>100,000Ks</span> each</small>
                      </div>
                    </td>
                    <td class="col-md-2">
                      <button type="button" class="btn btn-sm" title="product details"><i class="fas fa-info"></i></i></button>
                      <button type="button" class="btn btn-sm" title="remove product"><i class="far fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    
        <div class="col-lg-3 col-sm-12">
          <div class="card mb-3">
            <div class="card-body">
                <form>
                    <div class="form-group"> 
                      <label>Have coupon?</label>
                      <div class="input-group"> 
                        <input type="text" class="form-control cupon" name="" placeholder="coupon code" autocomplete="off" required> 
                        <span class="input-group-append"> 
                          <button class="btn btn-primary btn-apply">Apply</button> 
                        </span> 
                      </div>
                    </div>
                </form>
            </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <dl class="dlist-align">
                      <dt>Total price:</dt>
                      <dd>400,000Ks</dd>
                  </dl>
                  <dl class="dlist-align">
                      <dt>Discount:</dt>
                      <dd class="text-danger">- <span>0Ks</span></dd>
                  </dl>
                  <dl class="dlist-align">
                    <dt>Shipping:</dt>
                    <dd>4,000Ks</dd>
                  </dl>
                  <dl class="dlist-align">
                      <dt>Total:</dt>
                      <dd><strong>404,000Ks</strong></dd>
                  </dl>
                  <hr> 
                  <div class="payment">
                    <a href="./index.html" class="btn btn-success btn-main"><i class="fa fa-shopping-cart"></i> Shopping</a>
                    <a href="#" class="btn btn-primary btn-main"><i class="fab fa-shopify"></i>&nbsp;&nbsp;Order</a> 
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- footer -->
  <footer class="pt-5 pb-2">
    <div class="footer_int">
      <div class="item">
        <div class="title">COMPANY</div>
        <p><a href="#">About Us</a></p>
        <p><a href="#">Careers</a></p>
        <p><a href="#">Contact</a></p>
        <p><a href="#">Blog</a></p>
        <p><a href="#">Sitemap</a></p>
      </div>

      <div class="item">
        <div class="title">POLICY INFO</div>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Terms of Sale</a></p>
        <p><a href="#">Terms of Use</a></p>
        <p><a href="#">Report Issue</a></p>
      </div>

      <div class="item">
        <div class="title">CONTACT US</div>
        <p><a href="#">No(123), 86-B, Yangon.</a></p>
        <p><a href="#">exampleinfo@gmail.com</a></p>
        <p><a href="#">exampleinfo.hr@gmail.com</a></p>
        <p><a href="#">+(95) 123-123-123</a></p>
        <p><a href="#">+(95) 123-456-789</a></p>
      </div>

      <div class="item">
        <div class="title">NEED HELP ?</div>
        <p><a href="#">FAQ</a></p>
        <p><a href="#">Contact</a></p>
        <p><a href="#">Online Shoping</a></p>
        <p><a href="#">Report Issue</a></p>
      </div>
      <div class="item">
        <div class="title">SUBSCRIBE</div>
          <form>
            <input type="email" name="email" id="" placeholder="your email address" required autocomplete="off">
            <input type="submit" value="Subscribe">
          </form>
          <span>Register now to get updates on promotions and coupons.</span>
      </div>
    </div>
    <div class="social_media">
      <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" title="youtube"><i class="fab fa-youtube"></i></a>
      <a href="#" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
      <a href="#" title="viber"><i class="fab fa-viber"></i></a>
    </div>
    <hr>

    <!-- copyright -->
    <div class="copyright">
      &copy;&nbsp;2021-<script>var d = new Date();document.write(d.getFullYear());</script>. All right reserved.
    </div>

  </footer>
  









