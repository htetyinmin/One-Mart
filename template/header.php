<?php 

    session_start();
    include_once "system/session.php";
    include_once "system/function.php";
    include_once "admin/system/function.php";



    $sql = "SELECT * FROM categories";
    $categories = getItems($sql);
    // var_dump($categories);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Mart</title>

  <!-- Bootstrap CSS (V-5.1.0) -->
  <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">

  <!-- Fontawsome CSS (V-5.15.4) -->
  <link rel="stylesheet" href="assets/frontend/css/all.min.css">

  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/frontend/css/owl.theme.green.min.css">
  <link rel="stylesheet" href="assets/frontend/css/customize.css">
  <link rel="stylesheet" href="assets/frontend/css/style.css">
  <link rel="stylesheet" href="assets/frontend/slick/slick.css">
  <link rel="stylesheet" href="assets/frontend/slick/slick-theme.css">

</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light nav-color sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php" title="home">
            <!-- <i class="fa fa-home"></i> -->
            <img src="assets/frontend/img/onemart.png" width="100" height="40" alt="">
        </a>
        <form class="d-flex">
            <input class="form-control me-2 input" type="search" placeholder="search">
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-ellipsis-v"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" title="category">
            <i class="fas fa-clipboard-list"></i>
            <span>Category</span>
            </a>
                <ul class="dropdown-menu">
            <?php 
                foreach($categories as $category)
                {
            ?>
                    <li>
                        <a class="dropdown-item" href="#">
                        <!-- <img src="admin/uploads/" alt="" width="50" height="50" style="border-radius: 50%;"> -->
                        <span><?= $category->name ?></span>
                        </a>
                    </li>
            <?php
                } 
            ?>
                </ul>
            </li>
        
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" title="sale">
                <i class="fa fa-tags"></i>
                <span>Payment</span>
                </a>
                <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">
                    <i class="fa fa-money-check-alt i_color"></i>
                    <span>Payment</span>
                </a>
                </li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>

            <li class="nav-item">
            <a class="nav-link cart_icon" href="product_cart.php" title="cart">
            <i class="fa fa-cart-plus position-relative">
                <!-- <span class="position-absolute top-0 start-100 translate-middle p-1 rounded-circle my-cart-badge">
                </span> -->
                <span class="position-absolute translate-middle badge rounded-pill noti">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </i><span>Cart</span>

            </a>
            </li>
            </ul>

            <ul class="navbar-nav my-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" title="manage account">
                <i class="fa fa-users-cog"></i>
                <span class="f_color">
                <?php 

                    if(checkSession('user')) {

                        $Authuser = getSession('user');
                        echo ($Authuser['user_name']);

                    }else{

                        echo "Member";

                    }
                    
                    
                ?>
                </span>
                </a>
                <ul class="dropdown-menu">
                <?php 
                    
                    
                    if(checkSession('user')) {

                        echo "
                        <li>
                            <a class='dropdown-item' href='profile.php'>
                            <i class='fa fa-user i_color'></i>
                            <span>Profile</span>
                            </a>
                        </li>
                        <li><hr class='dropdown-divider'></li>
                        <li>
                        <a class='dropdown-item' href='logout.php'>
                            <i class='fa fa-sign-out-alt i_color'></i>
                            <span>Logout</span>
                        </a>
                    </li>";

                    }else{

                        echo "
                        <li>
                            <a class='dropdown-item' href='signup.php'>
                                <i class='fa fa-sign-in-alt i_color'></i>
                                <span>SignUp</span>
                            </a>
                        </li>
                        <li>
                            <a class='dropdown-item' href='login.php'>
                            <i class='fa fa-sign-in-alt i_color'></i>
                            <span>Login</span>
                            </a>
                        </li>";

                    }
                    
                    ?>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>