<?php 

  ob_start();
  include_once "template/header.php";


  if(isset($_REQUEST['signin'])) {

    $email = testInput($_REQUEST['user']);
    $pass = encodePassword(testInput($_REQUEST['password']));


    if(!empty($email) && !empty($pass)) {

        $query = "SELECT * FROM users WHERE email =:useremail AND password =:password";
        $acc = userLogin($query, $email, $pass);

        if($acc['count'] == 1 && !empty($acc['row'])) {


          $user_id = $acc['row']['id'];
          $user_id = intval($user_id);

          $sql = "SELECT r.name as rname FROM users u 
          INNER JOIN model_has_role mhr ON u.id=mhr.id 
          INNER JOIN role r ON r.id=mhr.role_id WHERE u.id = $user_id";
          $res = getItems($sql);
          
          foreach($res as $value) {

            $type = $value->rname;

          }

          if($type === 'Admin') {

            $admin = ['admin_id'=>$acc['row']['id'],'admin_name'=>$acc['row']['name'],'admin_email'=>$acc['row']['email'],'admin_phone'=>$acc['row']['phone'],'admin_date'=>$acc['row']['created_at']];

            setSession($admin, 'admin');

            header('Location: admin/view/dashboard.php');
            exit();
          }


          if($type == 'User') {

            $user = ['user_id'=>$acc['row']['id'],'user_name'=>$acc['row']['name'],'user_email'=>$acc['row']['email'],'user_phone'=>$acc['row']['phone'],'user_date'=>$acc['row']['created_at']];

            setSession($user, 'user');


            header('Location: index.php');            
            exit();
          }

        }else {

          echo "<script>alert('Invalid username and password!');</script>";

        }

    }else {

      echo "<script>alert('Username and password is required!');</script>";

    }



  }

?>


<!-- login -->
<div class="login">
    <div class="container">
        <div class="row">
            <div class="pt-4 pb-1 px-5 position-absolute top-50 start-50 translate-middle shadow login-form">

                <h2 class="mb-4">Login </h2>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group mb-3">
                        <label for="myemail" class="textSize">Email Address</label>
                        <input type="email" class="form-control" name="user" id="myemail" placeholder="email" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="mypassword">Passwrod</label>
                        <input type="password" class="form-control" name="password" id="mypassword" placeholder="password" autocomplete="off">
                    </div>
                    <div class="fotm-group d-flex align-items-center">
                        <span class="textSize">Remember me &nbsp;</span>
                        <input type="checkbox" name="remember">
                        <a href="#" class="textSize anchorColor ms-auto">Forget Password?</a>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" name="signin" class="btn btn-primary btn-sm mt-4 mb-4 textSize btn-login">Login</button>
                    </div>
                </form>

                <div class="text-center">
                    <p class="textSize">Don't have an account?&nbsp;<a href="signup.php" class="anchorColor">Create One</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .navbar {display: none;}
    footer {display: none;}
</style>
<?php include_once "template/footer.php";?>