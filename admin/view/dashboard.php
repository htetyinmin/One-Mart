<?php
      include_once "../template/header.php";
?>

            <!--content Area Start-->
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 status-card" onclick="go('https://google.com')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <i class="feather-shopping-cart h1 text-success"></i>
                                    </div>
                                    <div class="col-9">
                                        <p class="mb-1 h4 font-weight-bolder">
                                            <span class="counter-up">123</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Today Order</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 status-card" onclick="go('https://google.com')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <i class="feather-users h1 text-success"></i>
                                    </div>
                                    <div class="col-9">
                                        <p class="mb-1 h4 font-weight-bolder">
                                            <span class="counter-up">456</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Total User</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 status-card" onclick="go('https://google.com')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <i class="feather-package h1 text-success"></i>
                                    </div>
                                    <div class="col-9">
                                        <p class="mb-1 h4 font-weight-bolder">
                                            <span class="counter-up">223</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Total Items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card mb-4 status-card" onclick="go('https://google.com')">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <i class="feather-map-pin h1 text-success"></i>
                                    </div>
                                    <div class="col-9">
                                        <p class="mb-1 h4 font-weight-bolder">
                                            <span class="counter-up">14</span>
                                        </p>
                                        <p class="mb-0 text-black-50">Support Location</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="row align-items-end">
                    <div class="col-12 col-xl-7">
                        <div class="card overflow-hidden shadow mb-4">
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h4 class="mb-0">Order & Viewer</h4>
                                    <div class="">
                                        <img src="../../assets/backend/img/user/avatar1.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="../../assets/backend/img/user/avatar2.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="../../assets/backend/img/user/avatar3.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="../../assets/backend/img/user/avatar4.jpg" class="ov-img rounded-circle" alt="">
                                        <img src="../../assets/backend/img/user/avatar5.jpg" class="ov-img rounded-circle" alt="">
                                    </div>
                                </div>
                                <canvas id="ov" height="100"></canvas>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-5">
                        <div class="card mb-4 item-carousel-card">
                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel item-carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators" style="bottom: -30px">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="bg-secondary active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-secondary"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-secondary"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class="bg-secondary"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
    
                                                        <h4 class="">Coffee Cup</h4>
                                                        <p class="font-weight-bolder text-black-50 mb-3">500 MMk</p>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="../../assets/backend/img/item/item1.png" class="item-card-img" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
    
                                                        <h4 class="">Stick</h4>
                                                        <p class="font-weight-bolder text-black-50 mb-3">1500 MMk</p>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar bg-success " role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="../../assets/backend/img/item/item2.png" class="item-card-img" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
                                                        <h4 class="">Book</h4>
                                                        <p class="font-weight-bolder text-black-50 mb-3">520 MMk</p>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar bg-success " role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="../../assets/backend/img/item/item3.png" class="item-card-img" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="item-card">
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="w-50">
    
                                                        <h4 class="">Name Card</h4>
                                                        <p class="font-weight-bolder text-black-50 mb-3">500 MMk</p>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar bg-success " role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <img src="../../assets/backend/img/item/item4.png" class="item-card-img" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card overflow-hidden mb-4">
    
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h3 class="mb-0">Order List</h3>
                                    <div class="">
                                        <i class="feather-more-vertical h4 mb-0 text-success"></i>
                                    </div>
                                </div>
                                <table class="table table-hover sub-list mb-0">
                                    <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Products</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Kyaw Kyaw</td>
                                        <td>Electronic Devices</td>
                                        <td>1 Aug 2021</td>
                                        <td><span class="badge badge-pill badge-danger">Close</span></td>
                                        <td>$ 1000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Mya Mya</td>
                                        <td>Cosmetic</td>
                                        <td>10 Jun 2021</td>
                                        <td><span class="badge badge-pill badge-success">Open</span></td>
                                        <td>$ 3000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Min Min</td>
                                        <td>Books</td>
                                        <td>20 Feb 2021</td>
                                        <td><span class="badge badge-pill badge-success">Open</span></td>
                                        <td>$ 2000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Kyaw Kyaw</td>
                                        <td>Electronic Devices</td>
                                        <td>1 Aug 2021</td>
                                        <td><span class="badge badge-pill badge-danger">Close</span></td>
                                        <td>$ 1000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Mya Mya</td>
                                        <td>Cosmetic</td>
                                        <td>10 Jun 2021</td>
                                        <td><span class="badge badge-pill badge-success">Open</span></td>
                                        <td>$ 3000.00</td>
                                        <td class="center-align"><a href="#"><i class="feather-trash-2 text-danger"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--content Area Start-->
            </div>
        </div>

<?php include_once "../template/footer.php" ?>