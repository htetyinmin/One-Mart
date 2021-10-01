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
                                    <button class="btn btn-primary btn-sm cart_btn view_btn" data-id="<?= $item['id'] ?>" data-name="<?= $item['name'] ?>" data-photo="<?= $item['photo'] ?>" data-description="<?= $item['description'] ?>" data-price="<?= $item['price'] ?>" data-discount="<?= $item['discount'] ?>" data-codeno="<?= $item['codeno'] ?>" data-bs-toggle="modal" data-bs-target="#cartModal"><i class="fas fa-eye"></i></button>
                              </div>
                        </div>
                  </div>
            <?php }?>
            </div>
      </div>
</section>

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






