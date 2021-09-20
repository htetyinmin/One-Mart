  <!-- footer -->
  <footer class="pt-5 pb-2">
    <div class="footer_int">
      <div class="item">
        <div class="title">COMPANY</div>
        <p><a href="#">About Us</a></p>
        <p><a href="#">Careers</a></p>
        <p><a href="#">Contact</a></p>
        <p><a href="#">Blog</a></p>
        <p><a href="#">Sitemap</a></p>
      </div>

      <div class="item">
        <div class="title">POLICY INFO</div>
        <p><a href="#">Privacy Policy</a></p>
        <p><a href="#">Terms of Sale</a></p>
        <p><a href="#">Terms of Use</a></p>
        <p><a href="#">Report Issue</a></p>
      </div>

      <div class="item">
        <div class="title">CONTACT US</div>
        <p><a href="#">No(123), 86-B, Yangon.</a></p>
        <p><a href="#">exampleinfo@gmail.com</a></p>
        <p><a href="#">exampleinfo.hr@gmail.com</a></p>
        <p><a href="#">+(95) 123-123-123</a></p>
        <p><a href="#">+(95) 123-456-789</a></p>
      </div>

      <div class="item">
        <div class="title">NEED HELP ?</div>
        <p><a href="#">FAQ</a></p>
        <p><a href="#">Contact</a></p>
        <p><a href="#">Online Shoping</a></p>
        <p><a href="#">Report Issue</a></p>
      </div>
      <div class="item">
        <div class="title">SUBSCRIBE</div>
          <form>
            <input type="email" name="email" id="" placeholder="your email address" required autocomplete="off">
            <input type="submit" value="Subscribe">
          </form>
          <span>Register now to get updates on promotions and coupons.</span>
      </div>
    </div>
    <div class="social_media">
      <a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" title="youtube"><i class="fab fa-youtube"></i></a>
      <a href="#" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
      <a href="#" title="viber"><i class="fab fa-viber"></i></a>
    </div>
    <hr>

    <!-- copyright -->
    <div class="copyright">
      &copy;&nbsp;2021-<script>var d = new Date();document.write(d.getFullYear());</script>. All right reserved.
    </div>

  </footer>


  <!-- javascript code -->
  <script src="assets/frontend/js/jquery-3.6.0.js"></script>
  <script src="assets/frontend/js/owl.carousel.js"></script>
  <script src="assets/frontend/js/custom.js"></script>
  <script src="assets/frontend/js/bootstrap-5.1.0.min.js"></script>
  <script src="assets/frontend/js/app.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="assets/frontend/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        centerMode: true,
        arrows:false,
        centerPadding: '60px',
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 2,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }
        ]
    });

    $('.card-slide').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                // dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
        ]
    });


    $('.product-slider').owlCarousel({
    loop:true,
    margin:30,
    // nav:true,
    items:5,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

    });
  </script>


  

  
</body>
</html>