
<?php
require_once("menu.php");
?>
<section>
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img32.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img33.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img34.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">About us</h3>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/img7.png" class="w-100" style="height: 290px">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">I am obaidullah</h2>
			<p class="py-2">As Covid-19 cases kept going up in mid-April, the government formed a national technical advisory committee to find ways to prevent the spread of the deadly virus in the country.The 17-member committee, led by Bangladesh Medical and Dental Council President Dr Mohammad Shahidullah, was also tasked with making recommendations for improving the quality of medical services at hospitals.Since its formation on April 18, the committee sat nine times and came up with various suggestions and strategies for containing the novel coronavirus.</p>
			<a href="about.php" class="btn btn-success">click me</a>
		</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Our services</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
                 <img class="card-img-top" src="images/img36.png" alt="Card image">
                  <div class="card-body">
                   <h4 class="card-title">Beautiful nature</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                    </div>
			     </div>
			      <div class="col-lg-4 col-md-4 col-12">
				<div class="card">
                <img class="card-img-top" src="images/img36.png" alt="Card image">
               <div class="card-body">
              <h4 class="card-title">Beautiful nature</h4>
              <p class="card-text">Some example text.</p>
             <a href="#" class="btn btn-primary">See Profile</a>
            </div>
            </div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
               <img class="card-img-top" src="images/img36.png" alt="Card image">
               <div class="card-body">
               <h4 class="card-title">Beautiful nature</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
             </div>
         </div>
		</div>
	</div>
	</section>
	<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Gallery</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img3.png" class="img-fluid pb-4">
			</div>
		</div>
		
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Contact us</h3>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea  class="form-control" name="comment" required></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
	</section>
	<?php
	require_once("footer.php");
	?>