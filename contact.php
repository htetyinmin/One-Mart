<?php

    include_once "template/header.php";

?>

<!-- background image -->
<div class="bg_image mb-5">
    <!-- Breadcrumb -->
    <div class="bd_crumb text-center my-crumb">
        <h3 class="breadcrumb-item bc-item">Contact Us</h3>
    </div> 
</div>

<section id="contact">
    <div class="container">
        <div class="contact-form border border-danger rounded py-5 px-3 mb-5">
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30609.5133163216!2d97.64416685575493!3d16.46595654763528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2a8bdc423043f%3A0x77b6f712c8e07d17!2sOcean%20Supercenter%20(Mawlamyine)!5e0!3m2!1sen!2ssg!4v1632891325484!5m2!1sen!2ssg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-6 login-form">
                        <!-- Name input -->
                        <div class="form-outline mb-2">
                            <label class="form-label textSize" for="name">Name</label>
                            <input type="text" id="name" class="form-control" autocomplete="off" required />
                            
                        </div>

                        <!-- Phone input -->
                        <div class="form-outline mb-2">
                            <label class="form-label textSize" for="phone">Phone Number</label>
                            <input type="text" id="phone" class="form-control" autocomplete="off" required />
                            
                        </div>
    
                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <label class="form-label textSize" for="email">Email address</label>
                            <input type="email" id="email" class="form-control" autocomplete="off" required />
                            
                        </div>
    
                        <!-- Message input -->
                        <div class="form-outline mb-2">
                            <label class="form-label textSize" for="message">Message</label>
                            <textarea class="form-control" id="message" rows="4" autocomplete="off" required></textarea>
                            
                        </div>
    
                        <!-- Submit button -->
                        <div class="d-flex flex-row justify-content-start mt-3">
                            <button type="submit" class="btn btn-primary textSize btn-login">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php 

  include_once "template/footer.php";

?>