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


          $sql = "SELECT name FROM role WHERE id = $user_id";
          $res = getItems($sql);
          $type = '';
          
          foreach($res as $value) {

            $type = $value->name;

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
<div class="container form-ui my-5">
    <div class="col-md-5 col-xs-12 mx-auto py-5 px-4 form">
        <h1>Sign In</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group mb-3">
                <label for="myemail">Email address*</label>
                <input type="email" class="form-control" name="user" id="myemail" placeholder="email" autocomplete="off">
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