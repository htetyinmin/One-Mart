<?php
    $currentPage = 'order';
    include_once "../template/header.php";

    $sql = "SELECT * FROM users";
    $users = getItems($sql);
    
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
                                    <th>Products</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php $i = 1; ?>

                                    <tr>
                                        <td><?= $i++."." ?></td>
                                        <td>Kyaw Kyaw</td>
                                        <td>Electronic Devices</td>
                                        <td>1 Aug 2021</td>
                                        <td><span class="badge badge-pill badge-danger">Close</span></td>
                                        <td>$ 1000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Mya Mya</td>
                                        <td>Cosmetic</td>
                                        <td>10 Jun 2021</td>
                                        <td><span class="badge badge-pill badge-success">Open</span></td>
                                        <td>$ 3000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Customer</th>
                                    <th>Products</th>
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
