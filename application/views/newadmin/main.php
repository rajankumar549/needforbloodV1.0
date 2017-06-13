<?php $this->load->view('newadmin/headerFile.php');?>
<!-- ############ LAYOUT START-->

  <!-- aside -->
 <?php $this->load->view('newadmin/aside.php');?>

  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
 <?php $this->load->view('newadmin/header.php');?>

     <?php $this->load->view('newadmin/footer.php');?>

<div class="app-body">
<!-- ############ PAGE START-->
     <?php $this->load->view('newadmin/dashboard.php');?>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->
  </div>
     <?php $this->load->view('newadmin/footerJs.php');?>

