<?php
    $currentPage = 'order';
    include_once "../template/header.php";
    include_once "../system/function.php";
    

    $sql = "SELECT * FROM users";
    $users = getItems($sql);

    // $sql = 'SELECT orders.* FROM orders INNER JOIN users ON orders.user_id = users.id';
    // $statement = $connect->prepare($sql);
    // $statement->execute();
    // $orders = $statement->fetchAll();
    // var_dump($orders);


    $sql="SELECT orders.*, users.name as uname FROM orders INNER JOIN users ON orders.user_id=users.id";
    $statement= $connect->prepare($sql);
    $statement->execute();
    $orders=$statement->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($orders);

    
?>

            <!--content Area Start-->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" class="text-success">Order List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">
                                    <i class="feather-package text-success"></i> Order List
                                </h4>
                                <div class="">
                                    <a href="#" class="btn btn-outline-secondary full-screen-btn">
                                        <i class="feather-maximize-2"></i>
                                    </a>
                                    <!-- <a href="item_add.html" class="btn btn-outline-success">
                                        <i class="feather-plus-circle"></i>
                                    </a> -->
                                </div>
                            </div>
                            <hr>
                            <table id="list" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Customer</th>
                                    <th>Voucher No</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                    
                                        $i = 1;
                                        foreach($orders as $order){
                                        $id = $order['id'];
                                        $user_id = $order['user_id'];
                                        $userName = $order['uname'];
                                        $voucherno = $order['voucherno'];
                                        $orderdate = $order['orderdate'];
                                        $amount = number_format($order['total']);
                                    
                                    ?>



                                    <tr>
                                        <td><?= $i++."." ?></td>
                                        <td><?= $userName ?></td>
                                        <td><?= $voucherno ?></td>
                                        <td><?= $orderdate ?></td>
                                        <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                        <td><?= $amount ?> Ks</td>
                                        <td class="center-align">
                                            <a href="#"><i class="feather-trash-2 text-danger mr-2"></i></a>
                                            <a href="order_detail.php?id=<?= $id ?>"><i class="feather-info text-success"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                    <!-- <tr>
                                        <td>2.</td>
                                        <td>Mya Mya</td>
                                        <td>Cosmetic</td>
                                        <td>10 Jun 2021</td>
                                        <td><span class="badge badge-pill badge-success">Open</span></td>
                                        <td>$ 3000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr> -->

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Customer</th>
                                    <th>Voucher No</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
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
