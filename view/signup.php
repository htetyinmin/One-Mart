<?php 

  include_once "../template/header.php";

?>



  <!-- register -->
  <div class="container form-ui my-5">
      <div class="col-md-5 col-xs-12 mx-auto py-5 px-4 form">
          <h1>Sign Up</h1>
          <form action="./signup.html" method="post">
              <div class="form-group mb-3">
                  <label for="name">Full Name*</label>
                  <input type="text" class="form-control" name="fullname" id="name" placeholder="username" autocomplete="off">
              </div>
              <div class="form-group mb-3">
                  <label for="myemail">Email Address*</label>
                  <input type="email" class="form-control" name="email" id="myemail" placeholder="email" autocomplete="off">
              </div>
              <div class="form-group mb-3">
                  <label for="mypassword">Password*</label>
                  <input type="password" class="form-control" name="password" id="mypassword" placeholder="password" autocomplete="off">
                  </div>
              <div class="form-group mb-3">
                  <label for="phone">Mobile Number*</label>
                  <input type="number" class="form-control" name="phone" id="phone" placeholder="mobile number" autocomplete="off">
              </div>

              <div class="col-12 mt-4 mb-5">
                  <button type="submit" name="signup" class="btn btn-primary float-end">Sign Up</button>
              </div>
          </form>
      </div>
  </div>




<?php 

  include_once "../template/footer.php";

?>