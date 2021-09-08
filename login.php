<?php 

  ob_start();
  include_once "template/header.php";


  if(isset($_REQUEST['signin'])) {

    $user = testInput($_REQUEST['user']);
    $pass = encodePassword(testInput($_REQUEST['password']));


    if(!empty($user) && !empty($pass)) {

        $query = "SELECT * FROM users WHERE name =:username AND password =:password";
        $acc = userLogin($query, $user, $pass);

        if($acc['count'] == 1 && !empty($acc['row'])) {

          $user = ['user_id'=>$acc['row']['id'],'user_name'=>$acc['row']['name'],'user_email'=>$acc['row']['email'],'user_phone'=>$acc['row']['phone'],'user_date'=>$acc['row']['created_at']];

          setSession($user);


          header('Location: index.php');

        }else {

          echo "<script>alert('Invalid username and password!');</script>";

        }

    }else {

      echo "<script>alert('Username and password is required!');</script>";

    }



  }



?>


<!-- login -->
<div class="container form-ui my-5">
    <div class="col-md-5 col-xs-12 mx-auto py-5 px-4 form">
        <h1>Sign In</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group mb-3">
                <label for="myemail">User name*</label>
                <input type="text" class="form-control" name="user" id="myemail" placeholder="phone number, username or email" autocomplete="off">
            </div>
            <div class="form-group mb-3">
                <label for="mypassword">Password*</label>
                <input type="password" class="form-control" name="password" id="mypassword" placeholder="password" autocomplete="off">
                </div>
            <div class="col-12 mt-4 mb-5">
                <button type="submit" name="signin" class="btn btn-primary float-end">Login</button>
            </div>
        </form>
    </div>
</div>




<?php 

  include_once "template/footer.php";

?>