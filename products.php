<?php 

  include_once "template/header.php";
  include_once "system/function.php";


    $sql = "SELECT * FROM items";
    $items = itemsAll($sql);

?>

  <!-- Products -->

  <section id="product">
        <div class="product-container">
              <h2 class="title mt-5 mb-3" id="laptop">All Products</h2>
              <div class="row mb-3">
                  <?php foreach($items as $item){
                  
                  $ai_id=$item['id'];
                  $ai_name=$item['name'];
                  $ai_photo=$item['photo'];
                  $ai_price=$item['price'];
                  $ai_discount=$item['discount'];
                  $ai_description=$item['description'];

                  ?>
          
          <div class="col-md-4 col-lg-3 col-xl-2 my-3 p-0 set-p">
            <div class="product_card">
                <div class="buy">
                  <button type="button" title="Add to wishlist">
                  <i class="far fa-heart"></i>
                  </button>
                </div>

                <div class="img-frame">
                  <img src="admin/uploads/<?= $ai_photo ?>" class="card-img p-3" alt="...">
                </div>

                <div class="card-body">
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
                <div class="product_btn">
                  <a href="product_details.php?id=<?= $ai_id?>" type="button" class="btn btn-danger btn-sm cart_btn"><i class="fa fa-cart-arrow-down"></i></a>
                  <!-- <button type="button" data-id=" + data[i].id " data-title=" + data[i].productName " data-content=" + data[i].productDec " data-price=" + data[i].currentPrice " data-img="./assets/frontend/img/product/ + data[i].productImg "  class="btn btn-primary btn-sm btn-danger cart_btn click-cart" title="Add to cart" data-bs-toggle="modal" data-bs-target="#cartModal">
                  <i class="fa fa-cart-arrow-down"></i>
                  </button> -->
                  <button type="button" data-id=" + data[i].id " data-title=" + data[i].productName " data-content=" + data[i].productDec " data-price=" + data[i].currentPrice " data-img="./assets/frontend/img/product/ + data[i].productImg "  class="btn btn-primary btn-sm cart_btn" title="Order product">
                  <i class="fab fa-shopify">&nbsp;Order</i>
                  </button>
                </div>
            </div>
          </div>
        <?php } ?>
      </div>
        </div>
  </section>


  
<?php 

  include_once "template/footer.php";

?>








