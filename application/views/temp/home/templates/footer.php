<!-- Begin Footer -->
    <footer class="footer">
      <div class="footer__block">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <h4>Need For Blood Organization</h4>
              <p> Needforblood.org is an organization that brings voluntary blood donors and those in need of blood on to a common platform.  Through this website, we seek donors who are willing to donate blood, as well as provide the timeliest support to those in frantic need of it. </p>
            </div>
            <div class="col-md-4 col-sm-6">
              <h4>Quick Navigation</h4>
              <ul>
                <li><a href="<?php echo base_url();?>home/index">Home</a></li>
                <li><a href="<?php echo base_url();?>home/category">Our Mission</a></li>
                <li><a href="<?php echo base_url();?>home/about">About</a></li>
                <li><a href="<?php echo base_url();?>home/post">Blog Post</a></li>
                <li><a href="<?php echo base_url();?>home/faq">FAQ</a></li>
              </ul>
            </div>

            <div class="col-md-4 col-sm-6">
              <h4>Our offices</h4>
              <p> B-3,First Floor<br />Sector-2 Noida<br />UP  +120 410 5211</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <h4>Volunteer Donor Zone</h4>
              <ul>
                <li><a href="<?php echo base_url();?>home/client_register">Login/Register</a></li>
                <li><a href="<?php echo base_url();?>home/client_dashboard"></a>Change password</li>
                <li><a href="<?php echo base_url();?>home/client_applicants">update the donation</a></li>
                <li><a href="<?php echo base_url();?>home/client_job">Post a blood requirement</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6">
              <h4>Let's be Friends</h4>
              <p class="social"><a href="javascript:;" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
            </div>
            <div class="col-md-4 col-sm-12">
              <h4>News and Updates</h4>
              <p>Sign up with us to know about our project.</p>
              <form class="footer__newsletter">
                <div class="input-group">
                  <input type="text" placeholder="Enter your email address" class="form-control"><span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-send"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2017 Need For Blood</p>
            </div>
            <div class="col-md-6">
              <p class="credit pull-right">maintained by <a href="https://www.synthiasoftware.com/">Synthia Software</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript">
    function fetchdistrict(value){

        var value=jQuery("select[id='state-register'] option:selected").text();

        jQuery.ajax({
               type: "POST",
               url: "<?php echo base_url();?>index.php/admin/ajaxfunction/getdistrict2",
               data: {'state_name' : value},
               dataType: "text",
               success: function(msg){
                jQuery('#district-register').html(msg);
               }
            });


    }
    function fetchCity(){
       var value=jQuery("select[id='district-register'] option:selected").text();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url();?>index.php/admin/ajaxfunction/getCity",
            data: {'district_name' : value},
            dataType: "text",
            success: function(msg){
                jQuery('#city1').html(msg);
                //alert(msg);

            }
        });


    }

    function checkemail(value){
      var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      if(pattern.test(value)){
  jQuery.ajax({
    type:"POST",
    url:"<?php echo base_url();?>index.php/admin/ajaxfunction/emailchecker",
    data: {'email':value},
    dataType: "json",

    success:function(msg)
    {
      if(msg.success==0)
      {
        
          jQuery('#email').val('').attr('placeholder','Email Id is already exist');
        jQuery('#email').val('');
        setTimeout(function(){
        $('#email').focus();
    }, 100);

      }
      else
      {

                  jQuery('#email').removeClass('input-fail has-error has-error-input').addClass('input-success');

      }
    }
  });
}
      else{
  jQuery('#email').val('').attr('placeholder','please enter the valid email id');
  setTimeout(function(){
        $('#email').focus();
    }, 100);

}
}
    function checkpassword(){
  if(jQuery('#password').val()!=jQuery('#confirmpassword').val()){
    jQuery('#confirmpassword').val('').attr('placeholder','password is mismatched');
    setTimeout(function(){
        $('#confirmpassword').focus();
    }, 100);

}
}
    function getdistrict(value){
        var value=jQuery("select[id='search_state'] option:selected").text();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url();?>index.php/admin/ajaxfunction/getdistrict2",
            data: {'state_name' : value},
            dataType: "text",
            success: function(msg){
                jQuery('#district_search').html(msg);


            }

        });


    }
    function getCity(){
        var value=jQuery("select[id ='district_search'] option:selected").text();
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url();?>index.php/admin/ajaxfunction/getCity",
            data: {'district_name' : value},
            dataType: "text",
            success: function(msg){
                jQuery('#city').html(msg);
                // alert(msg);

            }
        });


    }

    </script>
    <div id="style-switch" class="collapse">
      <h4 class="text-uppercase">Select theme colour</h4>
      <form class="margin-bottom">
        <select name="colour" id="colour" class="form-control">
          <option value="">select colour variant</option>
          <option value="default">red</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="violet">violet</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><img src="<?php echo base_url(); ?>assets/home/img/template-mac.png" alt="" class="img-responsive"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
    <!-- Javascript files-->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/home/js/jquery-1.11.0.min.html"><\/script>')</script>
    <script src="<?php echo base_url();?>assets/home/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/home/js/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/home/js/owl.carousel.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/home/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
 
  </body>
<script type="text/javascript">
      
    jQuery(document).ready(function(){

    jQuery('#donor-registration').click(function(){
          jQuery('#donor-seach-form').hide();

    jQuery('#registration-form').show();


});
    $('#job-main-form-donor-register').submit(function () {


        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url();?>index.php/admin/ajaxfunction/savedonor",
            data:$('#job-main-form-donor-register').serialize(),
            success: function(msg){
                jQuery('#registration-form').hide();
                jQuery('#donor-seach-form').show();
                //alert(msg);

            }
        });

    });
  });

    jQuery(window).load(function(){
var frm = $('#job-main-form-donor-register');

    frm.submit(function (ev) {
      $('#registration-div').hide('#job-main-form-donor-register');
      $('.loader').show();


      $.ajax({
          type: frm.attr('method'),
          url: frm.attr('action'),
          data: frm.serialize(),
          success: function (data) {
      $('.loader').show();
        

          }
      });

    ev.preventDefault();

    
    });
  });

</script>

</html>
<!-- End Footer-->

