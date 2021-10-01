<?php 

    include_once "template/header.php";

    $id=$_GET['id'];

    $sql="SELECT * FROM items where id=:id";
    $item_details = itemDetail($sql, $id);

    foreach($item_details as $item){
        $detail_id=$item['id'];
        $detail_name=$item['name'];
        $detail_price=$item['price'];
        $detail_discount=$item['discount'];
        $detail_description=$item['description'];
        $detail_photo=$item['photo'];
        $brand_id=$item['brand_id'];
        $subcategory_id=$item['subcategory_id'];
    }

    $sql="SELECT * FROM items where subcategory_id=:subcategory_id";
    $statement=$connect->prepare($sql);
    $statement->bindParam(':subcategory_id',$subcategory_id);
    $statement->execute();
    $related_subs=$statement->fetchALL(PDO::FETCH_ASSOC);
    // var_dump($related_subs);

    // for brand
    $sql="SELECT * FROM brand where id=:brand_id";
    $statement=$connect->prepare($sql);
    $statement->bindParam(':brand_id',$brand_id);
    $statement->execute();
    $brand=$statement->fetch();

?>


<!-- background image -->
<div class="bg_image">
    <!-- Breadcrumb -->
    <div class="bd_crumb text-center">
        <h3 class="breadcrumb-item"><?= $detail_name ?> <span class="pill"><?= $brand['name'] ?></span></h3>
    </div> 
</div>


  <!-- product details -->
  <div class="container my-5">
      <div class="panel">
        <div class="container-fliud">
              <div class="row wrapper">
                  <div class="preview col-lg-6">
                        <div class="image-box">
                          <img src="admin/uploads/<?= $detail_photo ?>"/>
                        </div>
                  </div>
                  <div class="details col-lg-6">
                      <h3 class="product-title"><?= $detail_name ?></h3>
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
                      <p class="product-description"><?= $detail_description ?></p>
                      <?php if($detail_discount) {?>
                        <h4 class="price">Discount: <span><?= $detail_discount ?> &nbsp;MMKs</span></h4>
                        <h4 class="price">Price: <span><del><?= $detail_price ?></del> &nbsp;MMKs</span></h4>

   
                        <?php }else{?>
                        <h4 class="price">Price: <span><?= $detail_price ?> &nbsp;MMKs</span></h4>
                        <?php } ?>
                    
                        <div class="action">
                          <button type="button" class="btn btn-primary add-to-cart"><i class="fas fa-cart-arrow-down"></i>&nbsp;&nbsp;add to cart</button>
                          <button type="button" class="btn btn-success"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;uy now</button>
                        </div>
                  </div>
              </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12">
            <h3 class="title"> Related Item </h3>
        </div>
        <?php
            foreach($related_subs as $related_sub){
        ?>
        <div class="col-md-4 col-lg-3 col-xl-2 my-3 p-0 set-p">
            <div class="product_card">
                <div class="buy">
                  <button type="button" title="Add to wishlist">
                  <i class="far fa-heart"></i>
                  </button>
                </div>

                <div class="img-frame">
                  <a href="product_details.php?id=<?= $related_sub['id']?>" class="img-frame" type="button">
                    <img src="admin/uploads/<?= $related_sub['photo'] ?>" class="card-img p-3" alt="...">
                  </a>
                </div>

                <div class="card-body">
                  <h5 class="card-title"><?= $related_sub['name'] ?></h5>
                  <p class="card-text"><?= substr($related_sub['description'],0,50) ?>&nbsp;<a href="#">more...</a></p>
                  <div class="price">
                  <?php if($related_sub['discount']) {?>
                    <span class="current_price"><?= $related_sub['discount'] ?> &nbsp;MMK</span><br>
                    <span class="old_price"><del><?= $related_sub['price'] ?> &nbsp;MMK</del></span>
                  <?php }else{?>
                    <span class="current_price"><?= $related_sub['price'] ?> &nbsp;MMK</span><br>
                  <?php } ?>
                  </div>
                </div>
                <div class="product_btn">
                  <a href="product_details.php?id=<?= $related_sub['id']?>" type="button" class="btn btn-danger btn-sm cart_btn"><i class="fa fa-cart-arrow-down"></i></a>
                  <button class="btn btn-primary btn-sm cart_btn view_btn" data-id="<?= $related_sub['id'] ?>" data-name="<?= $related_sub['name'] ?>" data-photo="<?= $related_sub['photo'] ?>" data-description="<?= $related_sub['description'] ?>"
								data-price="<?= $related_sub['price']?>" data-discount="<?= $related_sub['discount'] ?>" data-photo="<?= $related_sub['photo'] ?>" data-codeno="<?= $related_sub['codeno'] ?>" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="fas fa-eye"></i></button>
                  </button>
                </div>
            </div>
          </div>
        <?php } ?>
    </div>

  </div>

<!-- View Cart Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered my-model">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title modal-codeno" id="exampleModalLabel"></h3>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-div">
              <div class="wrapper row">
                  <div class="preview col-lg-6">
                        <div class="image-box modal-photo"></div>
                  </div>
                  <div class="details col-lg-6">
                      <h3 class="product-title modal-name"></h3>
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
                      <p class="product-description modal-description"></p>
                        <div class="price-tab"></div>
                        <!-- <h4 class="price">Discount: <span class="modal-discount"></span>&nbsp;MMKs</h4> -->
                        <!-- <h4 class="price">Price: <span class="modal-price"></span>&nbsp;MMKs</h4> -->
                        <div class="action mb-3">
                          <button type="button" class="btn btn-primary add-to-cart"><i class="fas fa-cart-arrow-down"></i>&nbsp;&nbsp;add to cart</button>
                          <button type="button" class="btn btn-success"><i class="fas fa-credit-card"></i>&nbsp;&nbsp;Buy now</button>
                        </div>
                  </div>
              </div>
        </div>
      </div>
    </div>
  </div>

<?php 
    
    include_once "template/footer.php";

?>

<script>
  $(document).ready(function(){
    $('.view_btn').on('click', function(){
      var id = $(this).data("id");
      var name = $(this).data('name');
      var photo = $(this).data('photo');
      var price = $(this).data('price');
      var description = $(this).data('description');
      var discount = $(this).data('discount');
      var codeno = $(this).data('codeno');

      $('.modal-name').text(name);
      $('.modal-description').text(description);
      $('.modal-codeno').text("codeno - " + codeno);

      if(discount){

        $('.price-tab').html(`
        <h4 class="price">Discount: ${discount} &nbsp;MMKs</h4>
        <h4 class="price">Price: <del>${price}</del> &nbsp;MMKs</h4>

        `);
        
      }else{
        $('.price-tab').html(`
        
        <h4 class="price">Price: ${price}&nbsp;MMKs</h4>

        `);
      }

      $('.modal-photo').html(`<img src="admin/uploads/${photo}" class="model-img"/>`
      )


    })
  });
</script>