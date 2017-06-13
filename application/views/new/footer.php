<!-- Footer start -->
<footer class="irs-footer-field">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="irs-footer-about">
					<img class="irs-foooter-logo" src="images/footer-logo.png" alt="">
					<p>Lorem ipsum dolor sit amet, consec eturad elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
					<div class="irs-social text-left">
						<a href="#"><i class="zmdi zmdi-facebook"></i></a>
						<a href="#"><i class="zmdi zmdi-vimeo"></i></a>
						<a href="#"><i class="zmdi zmdi-twitter"></i></a>
						<a href="#"><i class="zmdi zmdi-pinterest"></i></a>
						<a href="#"><i class="zmdi zmdi-linkedin"></i></a>
					</div>
				</div>	
			</div>
			<div class="col-md-2">
				<div class="irs-footer-link">
					<h4 class="irs-footer-heading">Quick Links</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Event Pages</a></li>
						<li><a href="#">Caurses Page</a></li>
					</ul>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="irs-footer-news">
					<h4 class="irs-footer-heading">Latest News</h4>
					<div class="irs-news-box">
						<img src="images/blog/s1.jpg" alt="">
						<h5>Diabetes and Endocrinology</h5>
						<p>Lorem ipsum dolor sit amet, consectetu Loreml ipsum dolor adipisicing elit, sed d o eius</p>
					</div>
					<div class="irs-news-box">
						<img src="images/blog/s2.jpg" alt="">
						<h5>Diabetes and Endocrinology</h5>
						<p>Lorem ipsum dolor sit amet, consectetu Loreml ipsum dolor adipisicing elit, sed d o eius</p>
					</div>
				</div>	
			</div>
			<div class="col-md-3">
				<div class="irs-footer-contact">
					<h4 class="irs-footer-heading">Contact Us</h4>
					<div class="irs-mailbox">
						<i class="zmdi zmdi-email"></i>
						<p>Mail: devitems@gmail.com <br><br>Phone : 123 123 321 345</p>
					</div>
					<h6>Subscribe To our newsletter</h6>
					<form class="irs-sub-field">
	                    <div class="input-group">
	                      <input class="form-control" name="search-field" type="text">
	                      <span class="input-group-btn">
	                      <button type="submit" class="btn"><i class="icofont icofont-double-right"></i></button>
	                      </span>
	                    </div>
                    </form>
				</div>	
			</div>
		</div>
	</div>
</footer>
<!-- Footer end -->

<section class="irs-copyright-field">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="irs-copyright">
					<p>Copyright © 2017 <a href="#">irstheme All right reserved</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- script start from here -->
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/isotope.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/stellar.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery.googlemap.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/css3-animate-it.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/bootstrap-slider.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery.scrollUp.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/active.js"></script>

<!-- Custom script for all pages --> 
<script type="text/javascript" src="<?php echo base_ur();?>/assets/new/js/script.js"></script>

<!-- Funfact START -->
<script type="text/javascript">
 $(document).ready(function($) {
      $('.start-count').each(function() {
              var $this   = $(this);
              $this.data('target', parseInt($this.html()));
              $this.data('counted', false);
              $this.html('0');
          });
          
          $(window).bind('scroll', function() {
              var speed   = 3000;
              $('.start-count').each(function() {
                  var $this   = $(this);
                  if(!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                      $this.data('counted', true);
                      $this.animate({dummy: 1}, {
                          duration: speed,
                          step:     function(now) {
                              var $this   = $(this);
                              var val     = Math.round($this.data('target') * now);
                              $this.html(val);
                              if(0 < $this.parent('.value').length) {
                                  $this.parent('.value').css('width', val + '%');
                              }
                          }
                      });
                  }
              });
          }).triggerHandler('scroll');
  });
</script>

</body>

<!-- Mirrored from irsfoundation.com/tf/nonprofit/cordial/index.html by HTTrack Website Copier/3.x [XR&CO'201-->
</html>