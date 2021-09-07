<?php 

  include_once "template/header.php";

?>


  <!-- login -->
  <div class="container form-ui my-5">
      <div class="col-md-5 col-xs-12 mx-auto py-5 px-4 form">
          <h1>Sign In</h1>
          <form action="./login.html" method="post">
              <div class="form-group mb-3">
                  <label for="myemail">Email Address*</label>
                  <input type="email" class="form-control" name="email" id="myemail" placeholder="phone number, username or email" autocomplete="off">
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