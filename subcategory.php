<?php 

      include_once "template/header.php";
      include_once "system/function.php";

      $id = $_GET['sid'];

      $sql = 'SELECT * FROM subcategories WHERE id=:id';
      $statement = $connect->prepare($sql);
      $statement->bindParam(':id',$id);
      $statement->execute();
      $subcategories = $statement->fetch();
      $category_id = $subcategories['category_id'];

      $sql="SELECT * FROM items where subcategory_id=:id";
      $statement=$connect->prepare($sql);
      $statement->bindParam(':id',$id);
      $statement->execute();
      $item_sub=$statement->fetchAll();
      // var_dump($item_sub);

      

?>

<!-- background image -->
<div class="bg_image">
    <!-- Breadcrumb -->
    <div class="bd_crumb text-center">
        <h3 class="breadcrumb-item"><?= $subcategories['name']?></h3>
    </div> 
</div>

  <!-- Products -->
<section id="product" class="product">
      <div class="product-container">
            <!-- <h2 class="title mt-5 mb-3" id="laptop"></h2> -->
            <div class="row mb-3">
                  
            <?php foreach ($item_sub as $item) {?>
                  <div class="col-md-4 col-lg-3 col-xl-2 my-3 p-0 set-p">
                        <div class="product_card">
                              <div class="buy">
                                    <button type="button" title="Add to wishlist">
                                    <i class="far fa-heart"></i>
                                    </button>
                              </div>
                              <a href="product_details.php?id=<?= $item['id']?>" class="img-frame" type="button">
                                    <img src="admin/uploads/<?= $item['photo'] ?>" class="card-img p-3" height=160 alt="...">
                              </a>
                              <div class="card-body" style="height: 170px;">
                                    <h5 class="card-title"><?= $item['name'] ?></h5>
                                    <p class="card-text"><?= substr($item['description'],0,50) ?> &nbsp;<a href="#">more...</a></p>
                                    <div class="price">
                                    <?php if($item['discount']) {?>
                                    <span class="current_price"><?= $item['discount'] ?> &nbsp;MMK</span><br>
                                    <span class="old_price"><del><?= $item['price'] ?> &nbsp;MMK</del></span>
                                    <?php }else{?>
                                    <span class="current_price"><?= $item['price'] ?> &nbsp;MMK</span><br>
                                    <?php } ?>
                                    </div>
                              </div>
                              <div class="product_btn">
                                    <a href="product_details.php?id=<?= $item['id']?>" type="button" class="btn btn-danger btn-sm cart_btn"><i class="fa fa-cart-arrow-down"></i></a>
                                    <button type="button" data-id=" + data[i].id " data-title=" + data[i].productName " data-content=" + data[i].productDec " data-price=" + data[i].currentPrice " data-img="./assets/frontend/img/product/ + data[i].productImg "  class="btn btn-primary btn-sm cart_btn" title="Order product">
                                    <i class="fab fa-shopify">&nbsp;Order</i>
                                    </button>
                              </div>
                        </div>
                  </div>
            <?php }?>
            </div>
      </div>
</section>


  
<?php 

  include_once "template/footer.php";

?>








