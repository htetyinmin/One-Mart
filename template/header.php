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
  <link rel="stylesheet" href="assets/frontend/slick/slick.css">
  <link rel="stylesheet" href="assets/frontend/slick/slick-theme.css">
  <link rel="stylesheet" href="assets/frontend/css/style.css">
  <link rel="stylesheet" href="assets/frontend/css/customize.css">


</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light nav-color sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php" title="home">
            <!-- <i class="fa fa-home"></i> -->
            <img src="assets/frontend/img/onemart.png" width="80" height="40" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-bs-toggle='dropdown' title="category">
                        <i class="fas fa-th"></i>
                        <span>Category</span>
                    </a>
                    <ul class="dropdown-menu">
                        <?php 
                            foreach($categories as $category)
                            {
                        ?>
                        <li>
                            <a class="dropdown-item" data-bs-toggle='dropdown' href="#">
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
                    <a class="nav-link" href="#" title="brands">
                        <i class="fa fa-tags"></i>
                        <span>Brands</span>
                    </a>
                    <!-- <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-money-check-alt i_color"></i>
                                <span>Payment</span>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul> -->
                </li>

                <li class="nav-item">
                    <a class="nav-link cart_icon" href="product_cart.php" title="cart">
                    <i class="fa fa-cart-plus position-relative">
                        <span class="position-absolute translate-middle badge rounded-pill noti">
                            99+
                        </span>
                    </i>

                    </a>
                </li>
            </ul>


            <ul class="navbar-nav my-nav">
                <div class="search-group">

                    <form action="#" method="get">
                        <input type="text" name="search" value="" class="search" id="search-box" placeholder="Search..." autocomplete="off" required>
                        <button type="submit" name="search-btn" id="btn-search"><i class="fas fa-search" id="s-icon" title="search"></i></button>
                    </form>

                    <div class="search-data" id="search-result">
                        <ul>
                            <li>
                                <a href="#" class="d-flex flex-row my-card">
                                    <div class="header">
                                        <img src="../assets/frontend/img/product/cloth1.png" width="30" height="30" alt="">
                                    </div>
                                    <div class="body">
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex flex-row my-card">
                                    <div class="header">
                                        <img src="../assets/frontend/img/product/cloth1.png" width="30" height="30" alt="">
                                    </div>
                                    <div class="body">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <li class="nav-item dropdown">
                    <?php 

                        if(checkSession('user')) {
                            $Authuser = getSession('user');
                            echo "<a class='nav-link' href='#' data-bs-toggle='dropdown' title=".  $Authuser['user_name'] .">
                                    <i class='far fa-user'></i>
                                    <span class='f_color'>" . $Authuser['user_name'] . "</span>
                                </a>";

                        }else{

                            echo "<a class='nav-link dropdown-item' href='login.php' title='login'>
                            <i class='fas fa-users'></i>
                                </a>";

                        }
                        
                        
                    ?>


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

                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-ellipsis-v"></i>
        </button>
    </div>
</nav>




<script>

    const searchBtn = document.getElementById('btn-search');
    searchBtn.addEventListener('click', function(e) {

        e.preventDefault();
        let showBox = document.getElementById('search-box');//input
        let icon = document.getElementById('s-icon');// for i tags


        showBox.classList.toggle('view-box');

        if(icon.classList.contains('fa-search')) {

            icon.classList.remove('fa-search');
            icon.classList.add('fa-times');

        }else {

            icon.classList.remove('fa-times');
            icon.classList.add('fa-search');
            showBox.value = '';
        }

    });


    const searchBox = document.getElementById('search-box');//input
    const result = document.getElementById('search-result');

    searchBox.addEventListener('keyup', function() {

        result.classList.toggle('search-view');

    });














</script>
