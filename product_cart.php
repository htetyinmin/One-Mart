<?php 

  include_once "template/header.php";

?>

<!-- background image -->
  <div class="bg_image">

    <!-- Breadcrumb -->
    <div class="bd_crumb">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
          </nav>
          <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>-->
        </div>
    </div> 
  </div>


<div id="hasitem">
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
                      <th>No.</th>
                      <th>Products</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
          
                  <tbody id="carts_table">
                    <!-- <tr>
                      <td class="col-md-1">
                        1.
                      </td>
                      <td class="col-md-5">
                        <div class="row">
                          <div class="product_img">
                            <img src="../assets/frontend/img/product/laptop-11.jpg" class="rounded" width="80" alt="product image">
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
                        <button type="button" class="btn btn-sm" title="remove product"><i class="far fa-trash-alt"></i></button>
                      </td>
                    </tr> -->
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
                      <dd><span class="total"></span> Ks</dd>
                  </dl>
                  <dl class="dlist-align">
                      <dt>Discount:</dt>
                      <dd class="text-danger">- <span>0Ks</span></dd>
                  </dl>
                  <dl class="dlist-align">
                    <dt>Shipping:</dt>
                    <dd>0Ks</dd>
                  </dl>
                  <dl class="dlist-align">
                      <dt>Total:</dt>
                      <dd><strong><span class="total"></span> Ks</strong></dd>
                  </dl>
                  <hr> 
                  <div class="payment">
                    <a href="../index.html" class="btn btn-success btn-main"><i class="fa fa-shopping-cart"></i> Shopping</a>
                    <a href="#" class="btn btn-primary btn-main"><i class="fab fa-shopify"></i>&nbsp;&nbsp;Order</a> 
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="noitem">
  <h4 class="text-center mt-5 pt-5"> There is no item in this cart! </h4>
  <div class="text-center">
    <a href="products.php" class="btn btn-danger m-5">Go Shopping Now</a>
  </div>
</div>
  
<?php 

  include_once "template/footer.php";

?>








