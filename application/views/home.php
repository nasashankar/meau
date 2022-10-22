<?php include 'header.php';?>
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
<!-- navibar -->
<div>
	<img src="<?php echo base_url();?>/assets/images/screen.jpg">
</div>
<div style="margin-top: -200px;margin-left: 200px; margin-bottom: 165px;">
	<?php echo anchor("home/login","Find Your Chance",['class'=>'btn btn-danger']);?>
	
	<button class="btn btn-success" style="width: 200px;">Launch Your Audition</button>
</div>

<?php include 'footer.php';?>