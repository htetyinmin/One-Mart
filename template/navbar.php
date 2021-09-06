<?php 

    include_once "admin/system/function.php";

    $sql = "SELECT * FROM subcategories";

    $subcategories = getItems($sql);
    // var_dump($categories);
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light nav-color">
    <div class="container">
        <a class="navbar-brand" href="../index.php" title="home">
            <i class="fa fa-home"></i>
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
            <i class="fa fa-list-ul"></i>
            <span>Subcategory</span>
            </a>
            <ul class="dropdown-menu">
            <?php foreach($subcategories as $subcategory) {?>
                <li>
                    <a class="dropdown-item" href="#">
                    <img src="admin/uploads/<?= $subcategory->photo ?>" alt="" width="50" height="50" style="border-radius: 50%;">
                    <span><?= $subcategory->name ?></span>
                    </a>
                </li>
            <?php } ?>
            
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
            <a class="nav-link cart_icon" href="../view/product_cart.php" title="cart">
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
                <span class="f_color">Kyaw Min Tun</span>
                </a>
                <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="../view/profile.php">
                    <i class="fa fa-user i_color"></i>
                    <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="../view/signup.php">
                        <i class="fa fa-sign-in-alt i_color"></i>
                        <span>SignUp</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="../view/login.php">
                    <i class="fa fa-sign-in-alt i_color"></i>
                    <span>Login</span>
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="#">
                    <i class="fa fa-sign-out-alt i_color"></i>
                    <span>Logout</span>
                    </a>
                </li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>