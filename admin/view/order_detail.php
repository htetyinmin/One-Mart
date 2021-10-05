<?php
    $currentPage = 'order';
    include_once "../template/header.php";
    include_once "../system/function.php";
    

    $sql = "SELECT * FROM users";
    $users = getItems($sql);

    $id=$_GET['id'];

    //order-user
    $sql="SELECT orders.*, users.name as uname, users.phone as uphone, users.email as uemail FROM orders INNER JOIN users ON orders.user_id=users.id WHERE orders.id='$id'";
    $statement= $connect->prepare($sql);
    $statement->execute();
    $order=$statement->fetch(PDO::FETCH_ASSOC);
//     var_dump($order);

    $sql="SELECT * FROM item_order INNER JOIN items ON item_order.item_id=items.id WHERE item_order.order_id='$id'";
    $statement= $connect->prepare($sql);
    $statement->execute();
    $orderdetails=$statement->fetchAll(PDO::FETCH_ASSOC);

   

    
?>

            <!--content Area Start-->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="order_list.php" class="text-success">Order List</a></li>
                        </ol>
                    </nav>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0" style="text-transform: capitalize;"><?= $order['uname'] ?><span class="text-muted order-cap"> 'orders</span></h2>
                                <div class="">
                                    <a href="#" class="btn btn-outline-secondary full-screen-btn">
                                          <i class="feather-maximize-2"></i>
                                    </a>     
                              </div>
                            </div>
                            <hr>
                            <div class="detail">
                                  <div class="row">
                                        <div class="col-5">
                                              <div class="personal-title mb-3">
                                                    <h3 class="text-muted">Order Info</h3>
                                              </div>

                                              <div class="personal-info">
                                                    <p>Order No - <?= $order['voucherno'] ?></p>
                                                    <p>Order Date - <?= $order['orderdate'] ?></p>
                                                    <p>Amount - <?= number_format($order['total'])?> Ks</p>
                                              </div>
                                        </div>
                                        <div class="col-4">
                                          <div class="shipping-title mb-3">
                                                <h3 class="text-muted">Shipping Info</h3>
                                          </div>
                                          <div class="shipping-info">
                                                <p>City - <?= $order['city'] ?></p>
                                                <p>Phone - <?= $order['uphone'] ?></p>
                                                <p>Email - <?= $order['uemail'] ?></p>
                                          </div>
                                        </div>
                                        <div class="col-3">
                                        <div class="package-title mb-3">
                                                <h3 class="text-muted">Package Status</h3>
                                          </div>
                                          <div class="package-info">
                                                <div class="status mb-3">
                                                <a href="" style="cursor:pointer;"><span class="badge badge-pill badge-warning">Pending</span></a>
                                                <a href="" style="cursor:pointer;"><span class="badge badge-pill badge-success">Delivery</span></a>
                                                <a href="" style="cursor:pointer;"><span class="badge badge-pill badge-danger">Cancle</span></a>
                                                </div>
                                                <p>Estimated Arrivial: Oct 10 2021</p>
                                          </div>
                                        </div>
                                  </div>
                                  <hr>
                                  <table id="list" class="table table-striped" style="width:100%">
                                    <thead>
                                          <tr>
                                          <th>Qty</th>
                                          <th>Product</th>
                                          <th>Item ID</th>
                                          <th>Subtotal</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                        <?php
                                    foreach($orderdetails as $orderdetail){
                                          $qty=$orderdetail['qty'];
                                          $item_name=$orderdetail['name'];
                                          $item_codeno=$orderdetail['codeno'];
                                          // $item_description=$orderdetail['description'];
                                          $item_price=$orderdetail['price'];
                                          $item_discount=$orderdetail['discount'];
                                          if($item_discount){
                                                $price = $item_discount;
                                          }else{
                                                $price = $item_price;
                                          }

                                          $subtotal=$qty*$price;
                                    ?>

                                    <tr>
                                    <td><?= $qty; ?></td>
                                    <td><?= $item_name; ?></td>
                                    <td><?= $item_codeno; ?></td>
                                    <!-- <td><?= $item_description; ?></td> -->
                                    <td><?= number_format($subtotal); ?> Ks</td>
                                    </tr>

                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                          <tr>
                                          <th>Qty</th>
                                          <th>Product</th>
                                          <th>Item ID</th>
                                          <th>Subtotal</th>
                                          </tr>
                                    </tfoot>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--content Area Start-->
        </div>
    </div>
<?php
    include_once "../template/footer.php";
?>
