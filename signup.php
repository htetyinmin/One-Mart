<?php include_once "template/header.php";?>

<!-- register -->
<div class="login">
    <div class="container">
        <div class="row">
            <div class="pt-4 pb-1 px-5 position-absolute top-50 start-50 translate-middle shadow login-form">

                <h2 class="mb-4">Sign Up</h2>

                <form name="formData" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="form-group mb-2">
                        <label for="name">Full Name*</label>
                        <input type="text" class="form-control" name="fullname" id="name" autocomplete="off" placeholder="fullname">
                        <small><span class="name-error" style="color:red; font-size:12px"></span></small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="myemail">Email Address*</label>
                        <input type="text" class="form-control" name="email" id="myemail" autocomplete="off" placeholder="email">
                        <small><span class="email-error" style="color:red;"></span></small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="mypassword">Password*</label>
                        <input type="password" class="form-control" name="password" id="mypassword" autocomplete="off" placeholder="password">
                        <small><span class="password-error" style="color:red;"></span></small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone">Mobile Number*</label>
                        <input type="text" class="form-control" name="phone" id="phone" autocomplete="off" placeholder="mobile number">
                        <small><span class="phone-error" style="color:red;"></span></small>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" id="signup" name="submit" class="btn btn-primary btn-sm mt-4 mb-4 textSize btn-login">Signup</button>
                    </div>
                </form>
                <div class="text-center">
                    <p class="textSize">Aleready account?&nbsp;<a href="login.php" class="anchorColor">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once "template/footer.php";?>

<style>
    /* .navbar {display: none;}
    footer {display: none;} */
</style>

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
        const letters = /^[a-zA-Z0-9_\.\- ]+$/;
        let name = username.trim();
        name = name.replace(/[^\w.-]+/g, " ");

        if(name == '') {

            error.textContent = "*Please enter Username!";
            return false;

        }else if(!(name.length >= 3)) {

            error.textContent = "*Username must be at least 3 characters!";
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
                        console.log(data);
                        window.location.reload();
                        window.location.replace('index.php');
                        // return true;
                        
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



