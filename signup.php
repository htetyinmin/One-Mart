<?php 

    include_once "template/header.php";

?>

    <!-- alert -->
    <!-- <div class="container mt-3">
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alertReg" style="display: none;">
            <span id="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, sequi dolore? Dolorum quam adipisci pariatur?</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div> -->






  <!-- register -->
  <div class="container form-ui my-5">
      <div class="col-md-5 col-xs-12 mx-auto py-5 px-4 form">
          <h1>Sign Up</h1>
          <form name="formData" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <div class="form-group mb-3">
                  <label for="name">Full Name*</label>
                  <input type="text" class="form-control" name="fullname" id="name" placeholder="username">
                  <small><span class="name-error" style="color:red; font-size:12px"></span></small>
              </div>
              <div class="form-group mb-3">
                  <label for="myemail">Email Address*</label>
                  <input type="text" class="form-control" name="email" id="myemail" placeholder="email">
                  <small><span class="email-error" style="color:red;"></span></small>
              </div>
              <div class="form-group mb-3">
                  <label for="mypassword">Password*</label>
                  <input type="password" class="form-control" name="password" id="mypassword" placeholder="password">
                  <small><span class="password-error" style="color:red;"></span></small>
              </div>
              <div class="form-group mb-3">
                  <label for="phone">Mobile Number*</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="mobile number">
                  <small><span class="phone-error" style="color:red;"></span></small>
              </div>

              <div class="col-12 mt-4 mb-5">
                  <button type="submit" id="signup" name="submit" class="btn btn-primary float-end">Sign Up</button>
              </div>
          </form>
      </div>
  </div>


<?php 

  include_once "template/footer.php";

?>



<script>

    const formBtn = document.getElementById('signup');
    formBtn.addEventListener('click', function(e) {

        e.preventDefault();

        let name = document.formData.fullname.value;
        let email = document.formData.email.value;
        let pass = document.formData.password.value;
        let phone = document.formData.phone.value;

        if(checkName(name) && checkEmail(email) && checkPass(pass) && checkPhone(phone)) {

            userName = checkName(name);
            userEmail = checkEmail(email);
            userPass = checkPass(pass);
            userPhone = checkPhone(phone);

            register(userName, userEmail, userPass, userPhone);

        }

        return true;
    });


    function checkName(username) {

        const error = document.getElementsByClassName('name-error')[0];
        const letters = /^[a-zA-Z\s_\-]+$/;
        let name = username.trim();
        name = name.replace(/[^\w.-]+/g, "");

        if(name == '') {

            error.textContent = "*Please enter Username!";
            return false;

        }else if(!(name.length >= 5)) {

            error.textContent = "*Username must be at least 5 characters!";
            return false;

        }else if(!name.match(letters)) {

            error.textContent = "*Invalid username";
            return false;

        }else {

            error.innerHTML= "<span style='color:green;'>*correct</span>";
            return name;

        }

    }


    function checkEmail(useremail) {

        const error = document.getElementsByClassName('email-error')[0];
        let letters = /^\w+([_\-\.][_\-]?\w+)*@+(gmail)+(\.\w{2,3})+$/;
        let email = useremail.trim();

        if(email == '') {

            error.textContent = "*Please enter email!";
            return false;

        }else if(!email.match(letters)) {

            error.textContent = "*Invalid email";
            return false;

        }else {

            error.innerHTML= "<span style='color:green;'>*correct</span>";
            return email;

        }    
    }


    function checkPass(userpass) {

        const error = document.getElementsByClassName('password-error')[0];
        const letters = /^(?=.*[a-z])+(?=.*\d)+(?=.*(_|[^\w]))+.+$/;
        let pass = userpass.trim();

        if(pass == '') {

            error.textContent = "*Please enter password!";
            return false;

        }else if(!(pass.length >= 5)) {

            error.textContent = "*Password is too weak!";
            return false;

        }else if(!pass.match(letters)) {

            error.textContent = "*Password contian char,digit and special char(eg. %-#@$)";
            return false;

        }
        else {

            error.innerHTML= "<span style='color:green;'>*correct</span>";
            return pass;

        }

    }

    function checkPhone(userphone) {

        const error = document.getElementsByClassName('phone-error')[0];
        const letters = /^\(?([0-9]{2})\)?[- ]?([0-9]{3})[- ]?([0-9]{3})[- ]?([0-9]{3})$/;
        let phone = userphone.trim();

        if(phone == '') {

            error.textContent = "*Please enter Phonenumber!";
            return false;

        }else if(!phone.match(letters)) {

            error.textContent = "*Invalid phone number!";
            return false;

        }
        else {

            error.innerHTML= "<span style='color:green;'>*correct</span>";
            return phone;

        }

    }



    function register(userName, userEmail, userPass, userPhone) {

            const action = 'signup';

            $.ajax({

                url: '../system/process.php',
                method: 'POST',
                data: {action:action, name:userName, email:userEmail, pass:userPass, phone:userPhone},
                success: function(data) {

                        data = data.trim();
                        alert(data);
                        window.location.reload();
                        window.location.replace('login.php');
                        return true;
                        
                        // const message = document.getElementById('message');
                        // const alert = document.getElementById('alertReg');
                        // alert.style.display = 'block';
                        // alert.style.backgroundColor = 'green';
                        // alert.style.color = '#fff';
                        // message.textContent = data;
                }
            });
    }




</script>



