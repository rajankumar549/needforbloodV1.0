  <section class="job-form-section job-form-section--image">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">


<div class="job-form-box" id="registration-form" style="display: none;" >
              <h2 class="heading">Register as  <span class="accent">Volunteer Donor</span>we have served<span class="accent">millions</span>.</h2>

<form id="job-main-form-donor-register" method="post" class="job-main-form">
                <div class="controls" id="registration-div">
                  <div class="row">
                    <div class="col-sm-4">
            <div class="form-group">
              <label for="Name">Full Name</label>
              <input id="fullname" name="fullname" required="required" placeholder="Enter your name"  class="form-control" type="text">
            </div>
                    </div>
                    <div class="col-sm-4">
            <div class="form-group">
              <label for="bloodgroup">Blood Group</label>
              <select id="bg" name="bloodgroup" class="form-control" required="required" type="text">
                <option value="">Choose your blood group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="A1+">A1+</option>
                <option value="A1-">A1-</option>
                <option value="A1B+">A1B+</option>
                <option value="A1B-">A1B-</option>
                <option value="A2+">A2+</option>
                <option value="A2-">A2-</option>
                <option value="A2B+">A2B+</option>
                <option value="A2B-">A2B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="Bombay Blood Group">Bombay Blood Group</option>
                <option value="INRA">INRA</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>
          </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="dob">DOB</label>
                        <input id="dob" name="dob" required="required"  placeholder="select DOB" class="form-control" type="text"></div>
                    </div>

                    
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender"   placeholder="select gender" required="required" class="form-control" type="text">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
          </div>

                      </div>
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <select disabled="true" id="country" name="country" required="required" placeholder="Choose country" class="form-control" type="text">
  <option value="">Select Country</option>
  <option value="1" selected="true">India</option>

</select></div>

                      </div>
<div class="col-sm-4">
                      <div class="form-group">
                        <label for="State">State</label>
                        <select id="state-register" required="required" onchange="fetchdistrict($(this).val())" name="state" placeholder="Any particular location?" class="form-control" type="text">
                         <?php echo $state ?>
                        </select>
                      </div>
                    </div>
                    </div>
<div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="District">District</label>
                        <select id="district-register" required="required" name="district" placeholder="choose district" class="form-control" type="text" onchange="fetchCity()">
    <option value="">Select District</option>

</select></div>

                      </div>
                       <div class="col-sm-4">
                      <div class="form-group">
                        <label for="city">City</label>
                        <select id="city1" name="locatity" required="required"  placeholder="select DOB" class="form-control" type="text">
                            <option value="">Select City</option>


                        </select>
                      </div>

                      </div>
  <div class="col-sm-4">
                      <div class="form-group">
                        <label for="phone">Mobile Number</label>
                        <input id="phone" name="mobile_number" required="required" placeholder="Your Emergency Number" class="form-control" type="text">
                      </div>
                    </div>
                    </div>
<div class="row">
                    
                    
                    <div class="col-sm-4">
  <div class="form-group">
                        <label for="Email">Email</label>
                        <input id="email" name="email"required="required"  placeholder="your primary email name" class="form-control" onchange="checkemail(this.value);"type="text">
                      </div>                    </div>
 <div class="col-sm-4">
  <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password"  placeholder="Password" class="form-control" type="password">
                      </div>                    </div>
                       <div class="col-sm-4">
  <div class="form-group">
                        <label for="confirm password">Confirm Password</label>
                        <input id="confirmpassword"  name="comfirmpassword" placeholder="enter the password again" class="form-control" onchange="checkpassword(this.value);"type="text">
                      </div>                    </div>
                  
                  </div>
<div class="row">
                    
                    
                    <div class="col-sm-12">
  <div class="form-group">
                        <label for="status">status of avalaibility</label>
                        
<select id="status" name="status" placeholder="are you ready to get notfied for blood request people" class="form-control" type="text">

  <option value="">are you ready to get notfied for blood request people</option>
  <option value="1">Available</option>
    <option value="0">Unavalible</option>


</select>
                      </div>                    </div>
                   </div>
<div class="row">
                    
                    
                    <div class="col-sm-8">
  <div class="form-group">
                        
                        <label for="id_terms" class=" requiredField">
                                    <input class="input-ms checkboxinput" id="id_terms" checked="" name="terms" style="margin-bottom: 10px" type="checkbox">
                                        Agree with the terms and conditions
                                </label>
                      </div>                    </div>

                      <div class="col-sm-4">
  <div class="form-groups">
                        
                        <button id="submit-registration" name="submit" value="submit"  class=" btn btn-success " type="submit">Register Now</button></div>                    </div>
                   </div>
</div>
                    


                    
                    
                  </form>


    <!-- Endof
          registration function----->


                  <div class="loader" style="display: none;">
<div class="row">
  <div class="col-sm-6 col-sm-offset-4">
<img src="<?php echo base_url();?>assets/images/balls.gif">
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-sm-offset-4">
    <p>Thanks for the for your contribution.</p>  </div>
</div>
</div>
</div>






<div class="job-form-box" id="donor-seach-form" >
              <h2 class="heading">Find a <span class="accent">Donor</span>we have served<span class="accent">millions</span>.</h2>
              <form id="job-main-form" method="get" action="#" class="job-main-form">
                <div class="controls">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="profession">Blood Group</label>
                        <select id="profession" name="profession" placeholder="Profession you are looking for" class="form-control" type="text" >

                        <option value="Select">Blood Group you need?</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="A1+">A1+</option>
<option value="A1-">A1-</option>
<option value="A1B+">A1B+</option>
<option value="A1B-">A1B-</option>
<option value="A2+">A2+</option>
<option value="A2-">A2-</option>
<option value="A2B+">A2B+</option>
<option value="A2B-">A2B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="Bombay Blood Group">Bombay Blood Group</option>
<option value="INRA">INRA</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="location">Country</label>
                        <select disabled=true" id="location" name="location" placeholder="Any particular location?" class="form-control" type="text">
                      <option value="select">Select country</option>
                      <option value="india" selected="true">India</option>
                      </select></div>
                    </div>
                    
                  </div><div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="profession">State</label>
                        <select id="search_state" name="profession-search" placeholder="Profession you are looking for" class="form-control" type="text" onchange=" getdistrict(this.value)">
                              <?php echo $state ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="location">District</label>
                        <select id="district_search" name="location" placeholder="Any particular location?" class="form-control" type="text" onchange="getCity()">
                        <option >Select district</option>

                        </select>
                      </div>
                    </div>
                    
                  </div><div class="row">
                    
                    
                    <div class="col-sm-4">
  <div class="form-group">
                        <label for="location">City</label>
                        <select id="city" name="location" placeholder="Any particular city?" class="form-control" type="text">
                            <option value="">Select City</option>

                        </select>
                      </div>                    </div>

                    <div class="col-sm-8">
                      <button type="submit" name="submit" class="btn btn-primary job-main-form__button">Get the Volunteer Donor</button>
                    </div>
                  </div>
                  <div class="row">
<div class="col-sm-8">
  
  </div>
  <div class="col-sm-4">
    <a id="donor-registration">Register as donor</a>
  
  </div>
</div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="background: #fafafa;">
      <div class="container">
        <h3 class="heading">Our Projects</h3>
        <div class="row featured same-height-row">
          <div class="col-md-4">
            <div class="box-image-text bg-visible same-height"> 
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="<?php
                   echo base_url(); ?>assets/home/img/featured1.jpg" alt="" class="img-responsive"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="<?php echo base_url(); ?>assets/home/img/airbnb.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Software Engineer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="label featured__label label-success">Full Time</span></p>
                <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-image-text bg-visible same-height"> 
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="<?php echo base_url(); ?>assets/home/img/featured2.jpg" alt="" class="img-responsive"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="<?php echo base_url(); ?>assets/home/img/google.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Customer support</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>Palo Alto<span class="label featured__label label-success">Full Time</span></p>
                <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-image-text bg-visible same-height"> 
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="<?php echo base_url();?>assets/home/img/featured3.jpg" alt="" class="img-responsive"></div>
                  <div class="bg"></div>
                  <div class="logo"><?php echo base_url(); ?>assets/home/ src="img/dropbox.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Graphic designer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="label featured__label label-default">Part Time</span></p>
                <p>Fifth abundantly made Give sixth hath. Cattle creature i be dont them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center margin-top"><a href="category.html" class="btn btn-ghost">See more jobs</a></div>
      </div>
    </section>
    <section >
      <div class="container">
        <h4 class="heading">Hurrey ! 40000 people care about the society</h4>
        <div class="job-listing job-listing--featured ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/airbnb.png" alt="AirBnb " class="img-responsive hide"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html"> Praveen Kumar</a></h4>
                  <p class="job__company">
          Mobile number:+91 8860279717          
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Available</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Since 1 year</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/google.png" alt="Google " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Front End developer</a></h4>
                  <p class="job__company">
                     
                    Google                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Report Us if unavailable favourites" class="job__star__link"><i class="fa fa-caution"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/dropbox.png" alt="Dropbox " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Webdesigner</a></h4>
                  <p class="job__company">
                     
                    Dropbox                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>San Francisco</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 5 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/amazon.png" alt="Amazon " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Team Leader</a></h4>
                  <p class="job__company">
                     
                    Amazon                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/amazon.png" alt="Amazon " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Software Engineer</a></h4>
                  <p class="job__company">
                     
                    Amazon                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 14 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/google.png" alt="Google " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Front End developer</a></h4>
                  <p class="job__company">
                     
                    Google                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  ">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/dropbox.png" alt="Dropbox " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Webdesigner</a></h4>
                  <p class="job__company">
                     
                    Dropbox                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>San Francisco</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 5 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
        <div class="job-listing  job-listing--last">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="row">
                <div class="col-xs-2"><img src="<?php echo base_url(); ?>assets/home/img/amazon.png" alt="Amazon " class="img-responsive"></div>
                <div class="col-xs-10">
                  <h4 class="job__title"><a href="detail.html">Team Leader</a></h4>
                  <p class="job__company">
                     
                    Amazon                            
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0"><i class="fa fa-map-marker job__location"></i>Palo Alto</div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3">
              <p>Posted 10 days ago</p>
            </div>
            <div class="col-xs-10 col-xs-offset-2 col-sm-2 col-sm-offset-0 col-md-1">
              <div class="job__star"><a href="#" data-toggle="tooltip" data-placement="top" title="Save to favourites" class="job__star__link"><i class="fa fa-star"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="background: #fafafa;" class="section testimonails">
      <div class="container">
        <h2 class="heading">Some Words from the heping hands</h2>
        <p class="lead text-center">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  </p>
        <div class="row"> 
          <div class="col-md-12">
            <ul class="owl-carousel testimonials same-height-row">
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>We would like to thank friends2support.org for the wonderful service in saving life. As advised by my friend Pavagopal A we searched on net and called near by people around NH hospital Bangalore, we got donors quickly and helped for my father's Bypass surgery operation on the same day. BIG thanks are not enough! Now, I am also registered Donor. All the best to the service. Keep expand across the globe for maximum benefits to the people. Best Regards, Ramesha K.S
</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="<?php echo base_url(); ?>assets/home/img/person-1.jpg">
                      <h5>Dr. Ramesh K.S</h5>
                      <p>AIIMS,New Delhi</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>I don't know what to say, I got details of the donors in the area my uncle was joined in hospital and I contacted them through SMS as it's late night, as an intention not to disturb their sleep, I hope this site will help us and lot many people like us... God bless you admin and the all the donors... You people are the best.. ")</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="<?php echo base_url(); ?>assets/home/img/person-2.jpg">
                      <h5>Mr. Tushar</h5>
                      <p>Infosys,Noida</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>Thanks a lot for this organistion members .Recently my friend mom uregently needed b-ve blood group. In that time the memeber in your group Raja Prashat form Vadapalani, chennai i got his number from your group and by God Grace he came and donated blood thanks for him and to your memebers. So I also decided to join in this organisation and now i am became a memeber of your oraganisation .Thanks thanks thanks thanks thanks thanks thanks thanks .
</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="<?php echo base_url(); ?>assets/home/img/person-3.png">
                      <h5>R Krishanan</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="<?php echo base_url(); ?>assets/home/img/person-4.jpg">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="testimonial same-height-always">
                  <div class="text">
                    <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                  </div>
                  <div class="bottom">
                    <div class="icon"><i class="fa fa-quote-left"></i></div>
                    <div class="name-picture"><img alt="" src="<?php echo base_url(); ?>assets/home/img/person-4.jpg">
                      <h5>John McIntyre</h5>
                      <p>CEO, TransTech</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section style="display: none;">
      <div class="container">
        <h3 class="heading">Our Packages</h3>
        <p class="lead text-center margin-bottom--big">
                    
          One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  
        </p>
        <div class="row packages">
          <div class="col-md-3">
            <div class="package ">
              <div class="package-header">
                <h5>Basic</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>7</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-times"></i>Own config file</li>
                <li><i class="fa fa-times"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-3">
            <div class="package ">
              <div class="package-header">
                <h5>Standard</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>21</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-times"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-3">
            <div class="package best-value">
              <div class="package-header">
                <h5>Premium</h5>
                <div class="meta-text">Best Value</div>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>53</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-check"></i>Sharing Tools</li>
                <li><i class="fa fa-times"></i>Auto Backup</li>
                <li><i class="fa fa-times"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-3">
            <div class="package ">
              <div class="package-header">
                <h5>Standard</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>99</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>100GB Storage</li>
                <li><i class="fa fa-check"></i>Own config file</li>
                <li><i class="fa fa-check"></i>Sharing Tools</li>
                <li><i class="fa fa-check"></i>Auto Backup</li>
                <li><i class="fa fa-check"></i>Extended Security</li>
              </ul><a href="#" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
          <!-- end col-->
        </div>
      </div>
    </section>
    <section style="background-image: url('../assets/home/img/startup.jpg'); display: none;" class="section-divider">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Start searching for your new job now! <a href="#" class="btn btn-white">See our job offers</a></p>
          </div>
        </div>
      </div>
    </section>
    <section style="display: none;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <h4>From our blog</h4>
            </div>
            <p class="text-center text-muted">What's new in the world of human resources? Check out our blog!</p>
          </div>
        </div>
        <div id="blog-homepage" class="row">
          <div class="col-sm-6">
            <div class="post">
              <div class="image"><a href="post.html"><img src="<?php echo base_url(); ?>assets/home/img/blog1.jpg" alt="" class="img-responsive"></a></div>
              <h4><a href="post.html">Education in the IT</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="post">
              <div class="image"><a href="post.html"><img src="<?php echo base_url(); ?>assets/home/img/blog2.jpg" alt="" class="img-responsive"></a></div>
              <h4><a href="post.html">Best books for personal development</a></h4>
              <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
              <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

