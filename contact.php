<?php

    include_once "template/header.php";

?>

    <section id="contact">
        <div class="container">
            <form>
                <div class="row mb-4">
                    <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">First name</label>
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                    </div>
                </div>
    
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Email address</label>
                </div>
    
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Password</label>
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3"
                    checked
                    />
                    <label class="form-check-label" for="form2Example3">
                    Subscribe to our newsletter
                    </label>
                </div>
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
    
                <!-- Register buttons -->
                <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>
    
                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>
    
                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>
    
                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

<?php 

  include_once "template/footer.php";

?>