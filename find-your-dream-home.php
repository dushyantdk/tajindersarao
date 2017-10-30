<?php 
include(__DIR__.'/include/header.php');?>
<!-- Inner banner Start -->
	<section class="inner-banner d-flex align-items-center text-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h2>Find Your Dream Home</h2>
					<p>Home > Find Your Dream Home</p>
				</div>
			</div>
		</div>
	</section>
<!-- Inner banner End -->
<section class="inner-content find-home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h4>Personal Information</h4>
				<p>Please enter your personal information. Note all information is kept highly secured and confidential.
				</p>
			</div>
			<div class="col-md-12">	
				<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" placeholder="First name">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" placeholder="Last name">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" placeholder="Email">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" placeholder="Phone">
				    </div>
				  </div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center let-find-home">
				<h4>Let's Find Your Dream Home</h4>
				<p>Enter your desired criteria to be updated as soon as homes meeting your critiera hit the market.
				</p>
			</div>	
			<div class="col-md-12">
				<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Desired Location(s)*</label>	
				      <input type="text" class="form-control" placeholder="Enter Desired Address, City, Community etc.">
				    </div>
				    <div class="form-group col-md-6">
				      <label>Desired Price Range*</label>
				      <input type="text" class="form-control" placeholder="Last name">
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="form-group col-md-3">
				      <label>Desired Parking Spaces</label>
				      <input type="text" class="form-control" placeholder="Last name">
				    </div>
				    <div class="form-group col-md-3">
				    <label>Minimum Bedrooms</label>
				      <input type="text" class="form-control" placeholder="Minimum Bedrooms">
				    </div>
				    <div class="form-group col-md-3">
				     <label>Minimum Bathrooms</label>
				      <input type="text" class="form-control" placeholder="Minimum Bathrooms">
				    </div>
				    <div class="form-group col-md-3">
				     <label>Desired Basement</label>
				      <input type="text" class="form-control" placeholder="Desired Basement">
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="form-group col-md-3">
				      <label>Desired Type(s)*</label>
				      <div class="form-check">
						  <label class="form-check-label">
						    <input class="form-check-input" type="checkbox" value=""> Detached
						  </label>
					  </div>
					  <div class="form-check">
						  <label class="form-check-label">
						    <input class="form-check-input" type="checkbox" value=""> Semi-Detached
						  </label>
					  </div>
					  <div class="form-check">
						  <label class="form-check-label">
						    <input class="form-check-input" type="checkbox" value=""> Townhome
						  </label>
					  </div>
					  <div class="form-check">
						  <label class="form-check-label">
						    <input class="form-check-input" type="checkbox" value=""> Condo
						  </label>
					  </div>
					  <div class="form-check">
						  <label class="form-check-label">
						    <input class="form-check-input" type="checkbox" value=""> Land
						  </label>
					  </div>
					  <div class="form-check">
						  <label class="form-check-label">
						    <input class="form-check-input" type="checkbox" value=""> Farm
						  </label>
					  </div>
				    </div>
				    <div class="form-group col-md-9">
				    	<label>Additional Comments</label>
				    	<textarea class="form-control" id="" rows="10"></textarea>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
 <?php 
include(__DIR__.'/include/footer.php');?>

