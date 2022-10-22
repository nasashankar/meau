
<?php include("header.php"); ?>
  <!-- navibar -->
<div>
  <nav class="navbar navbar-default" style="background-color: #212529;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left: 100px;margin-right: 100px;">
      <ul class="nav navbar-nav">
        <li class="active"><?php echo anchor("home/index","Home");?></li>
        <li><a href="#" style="color: #fff;">About Us</a></li>
        <li><a href="#" style="color: #fff;">Contact Us</a></li>
      </ul>
     
        
      
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="https://www.facebook.com/" style="color: #fff;"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="https://www.youtube.com/" style="color: #fff;"><i class="fa fa-youtube"></i></a>
        </li>
        <li><a href="" style="color: #fff;"><i class="fa fa-linkedin"></i></a></li>
        <li><a href=""><i class="fa fa-twitter" style="color: #fff;"></i></a></li>
        <li><a href=""><i class="fa fa-telegram" style="color: #fff;"></i></a></li>
        <li><a href=""><i class="fa fa-instragram" style="color: #fff;"></i></a></li>

        <?php 
        $username  = $this->session->userdata('username');
    if($username!=''){?>
      <li>
      <?php echo anchor("home/register","Sign Up");?>
    </li>

           <li>
      <?php echo anchor("home/login","Login");?>
    </li>
       
  <?php } else {?>
  
    <h3 style="color: white;">Welcome  <?php echo $username; ?></h3>
  <?php } ?>
            <!-- <li>
              <a href="" class="one" style="color: #fff;">
                <?php echo  date("D,d,M,Y");?>                  
              </a>      
      </li>  -->
      <li>
        
      </li>       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="main">
<div class="container">
   <h2 style="margin-left:250px;">Login</h2>
   <hr>
  <form class="form-horizontal" method="POST" action="<?php echo base_url('home/signin');?>">
    <?php if ($mgs=$this->session->flashdata('message')){?>
        <div class="row">
          <div class="col-sm-6">
            <div class="alert  alert-dismissible alert-success"><?php echo $mgs;?></div>
          </div>
        </div>
    <?php  } ?>

   
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo  set_value('email'); ?>">
      </div>
      <div class="col-sm-4">
        <?php echo form_error('email','<div class="text-danger">','</div>');?>
    </div>
    </div>
   
       <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="pwd" value="<?php echo  set_value('pwd'); ?>">
         <p  class="text-danger" id="password-strength-status"></p> 
      </div>

       <div class="col-sm-4">
        <?php echo form_error('pwd','<div class="text-danger">','</div>');?>
    </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-6">
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </div>



  </form>
</div>



  <?php include 'footer.php';?>


