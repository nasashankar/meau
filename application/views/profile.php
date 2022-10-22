
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
        $username  = $this->session->userdata('username');?>
    
    <li style="color: white;"><a href=""><?php echo $username; ?></a></li>
    <li><?php echo anchor("home/logout","Logout",['class'=>'btn btn-danger']);?></li>
            <!-- <li>
              <a href="" class="one" style="color: #fff;">
                <?php echo  date("D,d,M,Y");?>                  
              </a>      
      </li>  -->
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!-- navibar -->
<!-- grid --> 
<div class="container">
  <!-- left content -->
  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <h4>PROFILE</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
         <img src="<?php echo base_url();?>/assets/images/pro_photo.png">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h3>Personal Details</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        
              <table>
                <tr>
                  <td>Name</td><td>: </td><td>Anushka Retty</td>
                </tr>
                <tr>
                  <td>Skin Tone</td><td>: </td><td>Black</td>
                </tr>
                <tr>
                  <td>Height</td><td>: </td><td>5.1 Feet</td>
                </tr>
                 <tr>
                  <td>Eye Color</td><td>: </td><td>Black</td>
                </tr>
                <tr>
                  <td>Hair Color</td><td>: </td><td>Black</td>
                </tr>
              </table>
          
      </div>
    </div> 
    <div class="row">      
      <div class="col">
              <p class="info">Sociel Network Info</p>
      </div>      
    </div>
      <div class="row">
      <div class="col-lg-4">42<br>
                <p>Collection</p>
      </div>
      <div class="col-lg-4">12521<br>
        <p>Followers</p>
      </div>
      <div class="col-lg-4">120K<br>
        <p>Likes</p>
      </div>
    </div>
    <div class="row">
<div class="col Avatars">
<p>Type Of Avatars</p>
</div>
</div>
<div class="row">
<div class="col">
<button class="btn btn-default filter-button" data-filter="all">All</button><br>
<button class="btn btn-default filter-button" data-filter="Dance">Dance</button><br>
<button class="btn btn-default filter-button" data-filter="Fight">Fight</button><br>
<button class="btn btn-default filter-button" data-filter="Singing">Singing</button><br>
<button class="btn btn-default filter-button" data-filter="Crying">Crying</button>

</div>
</div>  
  </div>
    <!-- center content -->

  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <h4>GALLERY</h4>
      </div>
    </div>
    <div class="row title2">
<div class="col-lg-12">
<div class="mb-3">
<div class="accordion" id="accordionExample">
<!-- upload button -->
<div class="accordion-item ">
<h2 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed alert-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<p>Upload your New Videos here</p>

</button>

</h2>
<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
<div class="accordion-body">
<input class="form-control" type="file" id="formFileMultiple" multiple>
<button type="button" class="btn btn-success">Upload</button>
</div>
</div>
</div>
<!-- upload button -->
<!-- Gallery -->



<div class="row">

<div class="gallery_product filter Dance">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>

<div class="col">
<div class="gallery_product  filter Fight">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Singing">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Crying">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Dance">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Fight">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Singing">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Dance">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Dance">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Fight">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Fight">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
<div class="col">
<div class="gallery_product  filter Fight">
<img src="http://fakeimg.pl/210x150/" class="img-responsive">
</div>
</div>
</div>
</div>


</div>
</div>
</div>


  </div>
  <div class="col-lg-4">
    <div class="row">
      <div class="col-lg-12">
        <h4>MY SELF</h4>
      </div>
    </div>
    <div class="row">
<div class="col"><p>Anushka Sharma is an Indian actress and film producer who works in Hindi films. She has received several awards, including a Filmfare Award. She has appeared in Forbes India's Celebrity 100 since 2012 and was featured by Forbes Asia in their 30 Under 30 list of 2018.</p></div>
</div>


  </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/mauGallery.min.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- Gallery -->

<!-- grid -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$(".filter-button").click(function(){
var value = $(this).attr('data-filter');

if(value == "all")
{
//$('.filter').removeClass('hidden');
$('.filter').show('1000');
}
else
{
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
$(".filter").not('.'+value).hide('3000');
$('.filter').filter('.'+value).show('3000');

}
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
<script type="text/javascript">
var clockElement = document.getElementById('clock');

function clock() {
var date = new Date();

// Replace '400px' below with where you want the format to change.
if (window.matchMedia('(max-width: 400px)').matches) {
// Use this format for windows with a width up to the value above.
clockElement.textContent = date.toLocaleString();
} else {
// While this format will be used for larger windows.
clockElement.textContent = date.toString();
}
}



setInterval(clock, 1000);


</script>

<?php include 'footer.php';?>


