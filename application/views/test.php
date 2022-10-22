
<?php include 'header.php';?>

<nav class="navbar navbar-dark bg-info">
		<?php $username  =$this->session->userdata('username');?>
		<h3>Welcome  <?php echo $username; ?></h3>
	</nav>
	<div class="container">
		<div class="col-lg-12  text-right">
			<?php echo anchor("home/logout","Logout",['class'=>'btn btn-primary']);?>
		</div>
	</div>