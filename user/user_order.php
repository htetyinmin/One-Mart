<?php 

    include_once "../admin/system/function.php";

    $sql = 'SELECT orders.* FROM orders
            INNER JOIN users ON orders.user_id = users.id';
        $statement = $connect->prepare($sql);
        $statement->execute();
        $orders = $statement->fetchAll();
        // var_dump($orders);

?>

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
                    $orderdate = $order['orderdate'];
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
                                        <p>Voucher No - <?= $voucherno ?></p>
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
                                    <div><?= $ordertotal ?> Ks</div>
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
            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                June-10-2021 (Ordered)
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="text-muted">
                                <tr class="small">
                                <th>Products</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th class="text-cener">Action</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                <tr>
                                <td class="col-md-6">
                                    <div class="row">
                                    <div class="product_img">
                                        <img src="../assets/frontend/img/product/device.jpg" class="rounded" width="80" alt="product image">
                                        <div class="product_name">
                                        <p>Product Name</p>
                                        <span>Brand: <small>America</small></span>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="quantity">
                                    <span>1</span>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="price_wrap">
                                    <div>100,000Ks</div>
                                    <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                </td>
                                <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                </td>
                                </tr>
                                </tr>
                                <tr>
                                <td class="col-md-6">
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
                                    <span>1</span>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="price_wrap">
                                    <div>100,000Ks</div>
                                    <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                </td>
                                <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                </td>
                                </tr>
                                </tr>
                                <tr>
                                <td class="col-md-6">
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
                                    <span>1</span>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="price_wrap">
                                    <div>100,000Ks</div>
                                    <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                </td>
                                <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                </td>
                                </tr>
                                </tr>
                                <tr>
                                <td class="col-md-6">
                                    <div class="row">
                                    <div class="product_img">
                                        <img src="../assets/frontend/img/product/device.jpg" class="rounded" width="80" alt="product image">
                                        <div class="product_name">
                                        <p>Product Name</p>
                                        <span>Brand: <small>America</small></span>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="quantity">
                                        <span>1</span>
                                    </div>
                                    </td>
                                    <td class="col-md-2">
                                    <div class="price_wrap">
                                        <div>100,000Ks</div>
                                        <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                    </td>
                                    <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                    </td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Decemper-20-2021 (Ordered)
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="text-muted">
                                <tr class="small">
                                <th>Products</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th class="text-center">Action</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                                <tr>
                                <td class="col-md-6">
                                    <div class="row">
                                    <div class="product_img">
                                        <img src="../assets/frontend/img/product/device.jpg" class="rounded" width="80" alt="product image">
                                        <div class="product_name">
                                        <p>Product Name</p>
                                        <span>Brand: <small>America</small></span>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="quantity">
                                    <span>1</span>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="price_wrap">
                                    <div>100,000Ks</div>
                                    <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                </td>
                                <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                </td>
                                </tr>
                                </tr>
                                <tr>
                                <td class="col-md-6">
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
                                    <span>1</span>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="price_wrap">
                                    <div>100,000Ks</div>
                                    <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                </td>
                                <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                </td>
                                </tr>
                                </tr>
                                <tr>
                                <td class="col-md-6">
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
                                    <span>1</span>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="price_wrap">
                                    <div>100,000Ks</div>
                                    <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                </td>
                                <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                </td>
                                </tr>
                                </tr>
                                <tr>
                                <td class="col-md-6">
                                    <div class="row">
                                    <div class="product_img">
                                        <img src="../assets/frontend/img/product/device.jpg" class="rounded" width="80" alt="product image">
                                        <div class="product_name">
                                        <p>Product Name</p>
                                        <span>Brand: <small>America</small></span>
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="quantity">
                                    <span>1</span>
                                    </div>
                                </td>
                                <td class="col-md-2">
                                    <div class="price_wrap">
                                    <div>100,000Ks</div>
                                    <small class="text_muted"><span>100,000Ks</span> each</small>
                                    </div>
                                </td>
                                <td class="col-md-2 text-center">
                                    <button type="button" class="btn btn-sm info" title="product details"><i class="fas fa-info"></i></i></button>
                                </td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
