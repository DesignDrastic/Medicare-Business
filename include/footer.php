<!--  majority -->
<!--  footer -->
<div class="footer">
   <div class="container foot-ctn">
      <div class="col-md-4 col-xs-12 contact-left">
         <h4>Get in touch</h4>
         <div class="col-md-12 p-0">
            <div class="col-md-1">
               <i class="fa fa-map-marker"></i>
            </div>
            <div class="col-md-10">
               your company<br />
               address here...
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="col-md-12 p-0">
            <div class="col-md-1">
               <i class="fa fa-phone"></i>
            </div>
            <div class="col-md-10">
               <div class="footer-link">
                  <a href="tel:1234567890">1234567890</a>,
                  <a href="tel:1234567890">1234567890</a>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="col-md-12 p-0">
            <div class="col-md-1">
               <i class="fa fa-envelope"></i>
            </div>
            <div class="col-md-10">
               <div class="footer-link">
                  <a href="mailto:abc@gmail.com">abc@gmail.com</a>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4 col-xs-12 contact-left">
         <h4>Quick links</h4>
         <ul class="footer-link">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="testimonial.html">Testimonials</a></li>
         </ul>
      </div>
      <div class="col-md-4 col-xs-12 contact-left">
         <h4>Socialize with us</h4>
         <div class="social">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-google-plus"></i>
         </div>
      </div>
      <div class="clearfix"></div>
      <!-- <div class="copyright">
         <p>© 2015. All rights reserved. | Built with <i class="fa fa-heart white-clr"></i>&nbsp; by <a href="http://techmatesofttech.com">Techmate Softtech</a></p>
         </div> -->
   </div>
   <div class="container-fluid foot-end">
      <div class="copyright">
         <p>© 2017. All rights reserved. | Built with <i class="fa fa-heart white-clr"></i>&nbsp; by <a href="http://designdrastic.com/">Design Drastic</a></p>
      </div>
   </div>
</div>
<!--  footer -->
<script>
   $(document).ready(function(){
     $(".owl-carousel").owlCarousel({
       // rtl:true,
       loop:true,
       nav: true,
       items: 1,
       autoHeight:true
     });
   });
</script>
<script>
   $('.spin').hover(function(){
       console.log(this);
       $('i.fa', this).addClass('fa-spin');
     }, function(){
       $('i.fa', this).removeClass('fa-spin');
     }
   )
</script>
</body>
</html>