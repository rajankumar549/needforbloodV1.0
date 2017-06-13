<?php
$this->load->view('admin/vwHeader');
?>
<div id="page-wrapper">
<div class="container">
    <div id="signupbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="margin-top: 1%; margin-left: 2%; width: 60%;">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Register A Volunteer Donor</div>
            </div>
            <div class="panel-body" >
                <form method="post" action="<?php echo base_url()?>admin/donormanage/savedonor" method="POST">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                    <div id="div_id_fullname" class="form-group required">
                        <label for="id_username" class="control-label col-md-4 requiredField">Full Name<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" onchange="validatename(this.value)" value="" id="id_fullname" maxlength="30" name="fullname" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                        </div>

                    </div>
                    <div id="div_id_bggroup" class="form-group required">
                        <label for="id_bloodgroup" class="control-label col-md-4 requiredField">Blood Group<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="form-control input-md" id="bloofgroup" onchange="validatebloodgroup(this.value)" name="bloodgroup" style="margin-bottom: 10px" type="text">
                                <option value="0" >Select Blood Group</option>
                                <option value="A+" >A+</option>
                                <option value="A-" >A-</option>
                                <OPTION VALUE=AB+>AB+</OPTION>
                                <OPTION VALUE="AB-">AB-</OPTION>
                                <OPTION VALUE="B+">B+</OPTION>
                                <OPTION VALUE=O+>O+</OPTION>
                                <OPTION VALUE="O-">0-</OPTION>
                                <option value="A1+" >A1+</option>
                                <option value="A1-" >A1-</option>
                                <option value="A1B+">A1B+</option>
                                <OPTION VALUE="A1B-">A1B-</OPTION>
                                <OPTION VALUE="A2+">A2+</OPTION>
                                <OPTION VALUE="A2-">A2-</OPTION>
                                <OPTION VALUE="A2B+">A2B+</OPTION>
                                <OPTION VALUE="A2B-">A2B-</OPTION>
                            </select>
                        </div>
                    </div>

                    <div id="div_id_dob" class="form-group required">
                        <label for="id_dob" class="control-label col-md-4 requiredField">DOB<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <div class="form-group ">
                                <div class="input-group">
                                    <input class="form-control input-md" id="date" onchange="validatedob(this.value);"name="dob" placeholder="MM/DD/YYYY" type="text"/>
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="div_id_gender" class="form-group required">
                        <label for="id_gender" class="control-label col-md-4 requiredField">Gender<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="form-control input-md" id="gender" onchange="validatesex(this.value)" name="gender" style="margin-bottom: 10px" type="text">
                                <option value="0">Select Gender</option>

                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div id="div_id_country" class="form-group required">
                        <label for="id_country" class="control-label col-md-4 requiredField">country<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="form-control input-md" id="country"  onchange="validatecountry(this.value);" name="country" style="margin-bottom: 10px" type="text">
                                <option value="0">Select Country</option>
                                <option value="1">India</option>
                            </select>
                        </div>
                    </div>

                    <div id="div_id_state" class="form-group required">
                        <label for="id_state" class="control-label col-md-4  requiredField">State<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="form-control input-md" id="state" name="state" style="margin-bottom: 10px" type="text" onchange="getDistrict(this.value);">
                                <option value="0">Select State</option>
                                <?php foreach($state as $value){?>
                                <option value="<?php echo $value['id'];?>"> <?php echo $value['name'];?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>


                    <div id="div_id_district" class="form-group required">
                        <label for="id_district" class="control-label col-md-4 requiredField">District<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="form-control input-md" id="district" name="district" onchange="getCity(this.value)" style="margin-bottom: 10px" type="text">
                                <option value="0">Select District</option>
                            </select>
                        </div>
                    </div>



                    <div id="div_id_locality" class="form-group required">
                        <label for="id_locality" class="control-label col-md-4 requiredField">Locality<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="form-control input-md" id="locality" name="locality" style="margin-bottom: 10px" type="text">
                                <option value="0">Select Locality</option>
                            </select>
                        </div>
                    </div>



    <div id="div_id_address" class="form-group required">
                        <label for="id_address" class="control-label col-md-4  requiredField">Address<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_address" maxlength="30" name="address" placeholder="Enter your mailing address" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>

  <div id="div_id_contact" class="form-group required">
                        <label for="id_contact" class="control-label col-md-4  requiredField">contact<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_contact" maxlength="30" name="contact" placeholder="Enter contact number" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>



                     <div id="div_id_email" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField">Email<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_email" maxlength="30" name="email" placeholder="Enter email id" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>

  <div id="div_id_password" class="form-group required">
                        <label for="id_password" class="control-label col-md-4  requiredField">Password<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_password" maxlength="30" name="password" placeholder="Enter Password" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>

  <div id="div_id_password2" class="form-group required">
                        <label for="id_password2" class="control-label col-md-4  requiredField">confirm Password<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <input class="input-md  textinput textInput form-control" id="id_password2" maxlength="30" name="password2" placeholder="Enter Password again" style="margin-bottom: 10px" type="text" />
                        </div>
                    </div>
                          <div id="div_id_status" class="form-group required">
                        <label for="id_status" class="control-label col-md-4  requiredField">Status of availbilty<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 ">
                            <select class="form-control input-md" id="status" name="status" style="margin-bottom: 10px" type="text">
                                <option value="1">Select Availabilty Status</option>
                                <option value="2">Available</option>
                                <option>Unavailable</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls col-md-offset-4 col-md-8 ">
                            <div id="div_id_terms" class="checkbox required">
                                <label for="id_terms" class=" requiredField">
                                    <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                        Agree with the terms and conditions
                                </label>
                            </div> 

                        </div>
                    </div> 
                    <div class="form-group"> 
                        <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                            <input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                        </div>
                    </div> 

                </form>
            </div>
        </div>
    </div> 
</div>






</div>     
</div>       
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
$(document).ready(function(){
var date_input=$('input[name="date"]'); //our date input has the name "date"
var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
date_input.datepicker({
format: 'mm/dd/yyyy',
container: container,
todayHighlight: true,
autoclose: true,
});
});
</script>
<script type="text/javascript">
    function getDistrict(value){
                        jQuery('#locality').html("<option value='0'>Select City</option>");


jQuery.ajax({
               type: "POST",
               url: "<?php echo base_url();?>admin/ajaxfunction/getdistrict",
               data: {'state_id' : value},
               dataType: "json",
               success: function(msg){
                jQuery('#district').html(msg);
                                    
               }
            });


    }
        function getCity(value){
jQuery.ajax({
               type: "POST",
               url: "<?php echo base_url();?>admin/ajaxfunction/getlocality",
               data: {'district_id' : value},
               dataType: "json",
               success: function(msg){
                jQuery('#locality').html(msg);
                                    
               }
            });


    }


</script>
    <script type="text/javascript">
                            function validatename(value){
                                alert(value);
                                if(value==''){
                                    alert('please enter the name');
                                    jQuery('#id_fullname').focus();
                                }
                            }
                        </script>