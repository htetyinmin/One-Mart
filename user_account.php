<?php 

    include_once "template/header.php";
    // include_once "../admin/system/function.php";

    $id = $_GET['uid'];

    $sql="SELECT orders.*, users.name as uname FROM orders INNER JOIN users ON orders.user_id=users.id WHERE users.id='$id'";
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
                    <!-- manage account -->
                    <div class="card text-dark bg-light mb-3 form">
                        <div class="card-header">
                            Manage Account
                        </div>
                        <div class="card-body">
                            <form action="#" class="form">
                                <div class="form-group mb-5">
                                    Username:  <input type="text" class="form-control" name="username" value="" placeholder="username" autocomplete="off">
                                    Email:  <input type="email" class="form-control" name="email" value="" placeholder="email" autocomplete="off">
                                    Password:  <input type="password" class="form-control" name="username" value="" placeholder="password" autocomplete="off">     
                                    Mobile: <input type="number" class="form-control" name="username" placeholder="mobile number" autocomplete="off"> 
                                </div>
                                <div class="col float-end">
                                    <button name="edit" class="btn btn-info text-white" type="submit">Save</button>
                                </div>
                            </form>
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