<?php

    include_once "template/header.php";

?>

    <section id="contact">
        <div class="container">
            <div class="contact-header text-center">
                <h2>Contact Us</h2>
            </div>
            <div class="contact-form border border-danger py-5 px-3 mb-5">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30609.5133163216!2d97.64416685575493!3d16.46595654763528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2a8bdc423043f%3A0x77b6f712c8e07d17!2sOcean%20Supercenter%20(Mawlamyine)!5e0!3m2!1sen!2ssg!4v1632891325484!5m2!1sen!2ssg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="col-md-6">
                            <!-- Name input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" id="name" class="form-control" required />
                                
                            </div>

                            <!-- Phone input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" id="phone" class="form-control" required />
                                
                            </div>
        
                            <!-- Email input -->
                            <div class="form-outline mb-2">
                               <label class="form-label" for="email">Email address</label>
                                <input type="email" id="email" class="form-control" required />
                                
                            </div>
        
                            <!-- Message input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                                
                            </div>
        
                            <!-- Submit button -->
                            <div class="d-flex flex-row justify-content-end">
                                <button type="submit" class="btn btn-primary btn-block mb-2 pull-right">Send</button>
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