<?php 

    include_once "template/header.php";
    // include_once "../admin/system/function.php";

    $id = $_GET['uid'];

    $sql="SELECT orders.*, users.name as uname FROM orders INNER JOIN users ON orders.user_id=users.id WHERE users.id='$id' ORDER BY orders.id DESC";
    $statement= $connect->prepare($sql);
    $statement->execute();
    $orders=$statement->fetchAll();
    // var_dump($orders);

    //user 
    $users = getSession('user');
?>

 <!-- user profile -->
 <div class="profile">
    <div class="container-md">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-5 user_profile">
                    <aside class="user-info-wrapper">
                        <div class="user-cover">
                            <div class="info-label">
                                <i class="fas fa-medal"></i>290 points
                            </div>
                        </div>

                        <div class="user-info">
                            <div class="user-avatar">
                                <img src="../assets/frontend/img/profile/profile2.jpg" alt="User profile">
                            </div>
                            <div class="user-data">
                                <h4><?= $users['user_name'] ?></h4>
                                <span>Joined <?= $users['user_date'] ?></span>
                            </div>
                        </div>

                    </aside>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="UserPro">
                            <a href="profile.php">
                                <i class="fas fa-user"></i><span>Profile</span>
                            </a>
                        </li>
                        <li class="list-group-item" id="UserAcc">
                            <a href="user_account.php?uid=<?= $users['user_id'] ?>">
                                <i class="fas fa-user-cog"></i>Manage Account
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center" id="UserOrd">
                            <a href="user_order.php?uid=<?= $users['user_id'] ?>">
                                <i class="fas fa-th"></i>Orders
                            </a>                          
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <!-- <li class="list-group-item d-flex justify-content-between align-items-center" id="UserWlist">
                            <a href="#">
                                <i class="fa fa-heart"></i>Wishlist
                            </a>
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center" id="UserTicket">
                            <a href="#">
                                <i class="fas fa-tag"></i>My Tickets
                            </a>
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li> -->
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div id="contents">

                    <!-- orders -->
                    <div class="card text-dark bg-light carts order">
                        <div class="card-header">
                            Your Order History
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <?php 
                                    foreach($orders as $order){
                                        // $id = $order['id'];
                                        $orderdate = date("d M Y", strtotime($order['orderdate']));
                                        $voucherno = $order['voucherno'];
                                        $ordertotal = $order['total'];
                                        $orderstatus = $order['status'];

                                        if ($orderstatus == 0){
                                            $status = "<span class='badge bg-warning text-white'>Pending</span>";
                                        }
                                        if ($orderstatus == 1){
                                            $status = "<span class='badge bg-primary text-white'>Confirm</span>";
                                        }
                                        if ($orderstatus == 2){
                                            $status = "<span class='badge bg-dark text-white'>Deliver</span>";
                                        }
                                        if ($orderstatus == 3){
                                            $status = "<span class='badge bg-success text-white'>Success</span>";
                                        }
                                        if ($orderstatus == 4){
                                            $status = "<span class='badge bg-danger text-white'>Cancel</span>";
                                        }
                                    
                                ?>
                                

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        <?= $orderdate;?>
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-muted">
                                                    <tr class="small">
                                                    <th>Vocher No</th>
                                                    <th>Order Date</th>
                                                    <th>Total Amount</th>
                                                    <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                        
                                                <tbody>
                                                    <tr>
                                                    <td class="col-md-6">
                                                        <div class="row">
                                                        <div class="product_img">
                                                            <!-- <img src="../assets/frontend/img/product/device.jpg" class="rounded" width="80" alt="product image"> -->
                                                            <div class="product_name">
                                                            <p><?= $voucherno ?></p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td class="col-md-2">
                                                        <div class="quantity">
                                                        <span><?= $orderdate ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="col-md-2">
                                                        <div class="price_wrap">
                                                        <div><?= number_format($ordertotal) ?> Ks</div>
                                                        <!-- <small class="text_muted"><span>100,000Ks</span> each</small> -->
                                                        </div>
                                                    </td>
                                                    <td class="col-md-2 text-center">
                                                        <!-- <button type="button" class="btn btn-sm info" title="product details"></button> -->
                                                        <?= $status ?>
                                                    </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <?php } ?>
                                
                            </div>
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