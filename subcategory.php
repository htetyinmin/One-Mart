<?php 

  include_once "template/header.php";
  include_once "system/function.php";

?>

  <!-- Products -->

  <section id="product">
      <div class="product-container">
            <h2 class="title mt-5 mb-3" id="laptop">Watches</h2>
            <div class="row mb-3">
                  <div class="col-md-4 col-lg-2 my-3">
                        <div class="product_card">
                              <div class="buy">
                                    <button type="button" title="Add to wishlist">
                                    <i class="far fa-heart"></i>
                                    </button>
                              </div>
                              <img src="assets/frontend/img/product/watch1.png" class="card-img p-3" height=160 alt="...">
                              <div class="card-body" style="height: 170px;">
                                    <h5 class="card-title">Apple Watch</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, itaque! &nbsp;<a href="#">more...</a></p>
                                    <div class="price">
                                    <span class="current_price">700000 &nbsp;MMK</span><br>
                                    <span class="old_price"><del>1000000 &nbsp;MMK</del></span>
                                    </div>
                              </div>
                              <div class="product_btn">
                                    <a href="product_details.php?id=<?= $ai_id?>" type="button" class="btn btn-danger btn-sm cart_btn"><i class="fa fa-cart-arrow-down"></i></a>
                                    <button type="button" data-id=" + data[i].id " data-title=" + data[i].productName " data-content=" + data[i].productDec " data-price=" + data[i].currentPrice " data-img="./assets/frontend/img/product/ + data[i].productImg "  class="btn btn-primary btn-sm cart_btn" title="Order product">
                                    <i class="fab fa-shopify">&nbsp;Order</i>
                                    </button>
                              </div>
                        </div>
                  </div>

                  <div class="col-md-4 col-lg-2 my-3">
                        <div class="product_card">
                              <div class="buy">
                                    <button type="button" title="Add to wishlist">
                                    <i class="far fa-heart"></i>
                                    </button>
                              </div>
                              <img src="assets/frontend/img/product/watch1.png" class="card-img p-3" height=160 alt="...">
                              <div class="card-body" style="height: 170px;">
                                    <h5 class="card-title">Apple Watch</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, itaque! &nbsp;<a href="#">more...</a></p>
                                    <div class="price">
                                    <span class="current_price">700000 &nbsp;MMK</span><br>
                                    <span class="old_price"><del>1000000 &nbsp;MMK</del></span>
                                    </div>
                              </div>
                              <div class="product_btn">
                                    <a href="product_details.php?id=<?= $ai_id?>" type="button" class="btn btn-danger btn-sm cart_btn"><i class="fa fa-cart-arrow-down"></i></a>
                                    <button type="button" data-id=" + data[i].id " data-title=" + data[i].productName " data-content=" + data[i].productDec " data-price=" + data[i].currentPrice " data-img="./assets/frontend/img/product/ + data[i].productImg "  class="btn btn-primary btn-sm cart_btn" title="Order product">
                                    <i class="fab fa-shopify">&nbsp;Order</i>
                                    </button>
                              </div>
                        </div>
                  </div>

                  <div class="col-md-4 col-lg-2 my-3">
                        <div class="product_card">
                              <div class="buy">
                                    <button type="button" title="Add to wishlist">
                                    <i class="far fa-heart"></i>
                                    </button>
                              </div>
                              <img src="assets/frontend/img/product/watch1.png" class="card-img p-3" height=160 alt="...">
                              <div class="card-body" style="height: 170px;">
                                    <h5 class="card-title">Apple Watch</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, itaque! &nbsp;<a href="#">more...</a></p>
                                    <div class="price">
                                    <span class="current_price">700000 &nbsp;MMK</span><br>
                                    <span class="old_price"><del>1000000 &nbsp;MMK</del></span>
                                    </div>
                              </div>
                              <div class="product_btn">
                                    <a href="product_details.php?id=<?= $ai_id?>" type="button" class="btn btn-danger btn-sm cart_btn"><i class="fa fa-cart-arrow-down"></i></a>
                                    <button type="button" data-id=" + data[i].id " data-title=" + data[i].productName " data-content=" + data[i].productDec " data-price=" + data[i].currentPrice " data-img="./assets/frontend/img/product/ + data[i].productImg "  class="btn btn-primary btn-sm cart_btn" title="Order product">
                                    <i class="fab fa-shopify">&nbsp;Order</i>
                                    </button>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
  </section>


  
<?php 

  include_once "template/footer.php";

?>








