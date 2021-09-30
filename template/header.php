<?php 

    session_start();
    include_once "system/session.php";
    include_once "system/function.php";
    include_once "admin/system/function.php";



    $sql = "SELECT * FROM categories";
    $categories = getItems($sql);

    $sql = "SELECT * FROM brand";
    $brands = getItems($sql);

    $sql = "SELECT * FROM subcategories";
    $subcategories = getItems($sql);

    //var_dump($brands);
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/frontend/css/owl.theme.green.min.css">
  <link rel="stylesheet" href="assets/frontend/slick/slick.css">
  <link rel="stylesheet" href="assets/frontend/slick/slick-theme.css">
  <link rel="stylesheet" href="assets/frontend/css/style.css">
  <link rel="stylesheet" href="assets/frontend/css/customize.css">


</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light nav-color sticky-top nav-top">
    <div class="container">
        <a class="navbar-brand logo" href="index.php" title="home">
            <!-- <i class="fa fa-home"></i> -->
            <!-- <img src="assets/frontend/img/onemart.png" width="50" alt=""> -->
            <svg xmlns="http://www.w3.org/2000/svg" style="height:30px;" viewBox="0 0 481.01 221.81"><defs><style>.cls-1{fill:#231f20;}.cls-2{font-size:45.76px;fill:#ed1c24;}.cls-2,.cls-5{font-family:Algerian;}.cls-3{fill:#ef4136;font-size:31.79px;}.cls-3,.cls-4{font-family:Bauhaus93, "Bauhaus 93";}.cls-4{font-size:159px;}.cls-4,.cls-5{fill:#fff;}.cls-5{font-size:118.7px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><rect class="cls-1" y="5.22" width="481.01" height="203.35" rx="33.8"/><text class="cls-2" transform="translate(244.43 98.53) scale(2.23 1)">O<tspan class="cls-3" x="28.56" y="0">NE</tspan></text><text class="cls-4" transform="translate(31.84 182.06) scale(1.28 1)">Mart</text><text class="cls-5" transform="translate(160.47 98.94) scale(1.51 1)">1</text></g></g></svg>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent" id="wrapper">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu">

                <li class="nav-item">
                    <a class="nav-link" href="#" title="category">
                        <i class="fas fa-th"></i>
                        <span>Category</span>    
                    </a>
                    <ul>
                        <?php 

                            foreach($categories as $category) {

                        ?>

                            <li class="purple">
                                <a href="#"><?php echo $category->name; ?></a>
                                <?php 

                                    $sql = "SELECT * FROM subcategories WHERE category_id = $category->id";
                                    $ans = getItems($sql);

                                    if(count($ans) != 0) {

                                ?>
                                <ul class="expanded">
                                    <?php foreach($ans as $subcategory) { ?>
                                        
                                        <li><a href="subcategory.php?sid=<?= $subcategory->id; ?>"><?= $subcategory->name; ?></a></li>
                                        
                                        <?php 
                                        }
                                    ?>
                                </ul>
                                <?php 
                                    } 
                                ?>
                            </li>

                        <!--                             
                            <li class="purple">
                                <a href="#">Categories</a>
                                <ul class="expanded">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li>
                                        <a href="#">Categories</a>
                                        <ul class="expanded">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Categories</a></li>
                                            <li><a href="#">Social</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Social</a></li>
                                </ul>
                            </li> -->

                        <?php 
                            }
                        ?>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#" title="brands">
                        <i class="fa fa-tags"></i>
                        <span>Brands</span>
                    </a>
                    <ul>
                    <?php 

                        foreach($brands as $brand) {

                    ?>

                        <li class="purple">
                            <a href="brand.php?bid=<?= $brand->id ?>"><?php echo $brand->name; ?></a>
                        </li>

                    <?php 
                        }
                    ?>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link cart_icon" href="product_cart.php" title="cart">
                        <i class="fa fa-cart-plus position-relative">
                            <span class="position-absolute translate-middle badge rounded-pill noti cartNoti">
                                
                            </span>
                        </i>
                    </a>
                </li>
            </ul>


            <ul class="navbar-nav my-nav">
                <div class="search-group">

                    <form action="index.php" method="get">
                        <input type="text" name="search" value="" onkeyup="liveSearch(this.value);" class="search" id="search-box" placeholder="Search..." autocomplete="off" required>
                        <button type="submit" name="search-btn" id="btn-search">
                            <i class="fas fa-search" id="s-icon" title="search"></i>
                            <i class="fas fa-times" style="display: none;" id="c-icon"></i>
                        </button>
                    </form>

                    <div class="search-data" id="search-result"></div>

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


                    <ul class="dropdown-menu profile-show">
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
    </div>
</nav>

<script>

    const searchBtn = document.getElementById('s-icon');
    const closeBtn = document.getElementById('c-icon');
    var showBox = document.getElementById('search-box');

    searchBtn.addEventListener('click', function(e) {

        e.preventDefault();


        showBox.classList.add('view-box');
        searchBtn.style.display = "none";
        closeBtn.style.display = "block";

    });


    closeBtn.addEventListener('click', function(e) {

        e.preventDefault();

        showBox.classList.remove('view-box');
        searchBtn.style.display = "block";
        closeBtn.style.display = "none";
        document.getElementById('search-result').style.display = "none";
        showBox.value = '';
    });



    function liveSearch(str) {

        document.getElementById('search-result').style.display = "block";
        var input = str.trim();

        if(input.length == 0) {

            document.getElementById('search-result').style.display = "none";

        }else {
            
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {

                        document.getElementById('search-result').innerHTML = this.responseText;
                }
            }  
            xhr.open("GET","../system/process.php?search="+input, true);
            xhr.send();

        }

    }

</script>

