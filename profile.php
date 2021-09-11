<?php 

    include_once "template/header.php";
    
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
                            <a href="#">
                                <i class="fas fa-user"></i><span>Profile</span>
                            </a>
                        </li>
                        <li class="list-group-item" id="UserAcc">
                            <a href="#">
                                <i class="fas fa-user-cog"></i>Manage Account
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center" id="UserOrd">
                            <a href="#">
                                <i class="fas fa-th"></i>Orders
                            </a>                          
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center" id="UserWlist">
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
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div id="contents"></div>
            </div>
        </div>
    </div>
  </div>


<?php 

  include_once "template/footer.php";

?>


<script>
  // load content
  $(document).ready(function () {

    function loadDoc() {
        $("#contents").load("../user/user_profile.php");
    }
    loadDoc();

    $("#UserPro").click(function() {
        loadDoc();
    });
    $("#UserAcc").click(function() {
        $("#contents").load("../user/user_account.php");
    });
    $("#UserOrd").click(function() {
        $("#contents").load("../user/user_order.php");
    });
    $("#UserWlist").click(function () {
        $("#contents").load("../user/user_wishlist.php");
    });
    $("#UserTicket").click(function () {
        $("#contents").load("../user/user_ticket.php");
    });

  });
</script>