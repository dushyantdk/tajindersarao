<?php 
include(__DIR__.'/include/header.php');?>
<!-- Inner banner Start -->
	<section class="inner-banner d-flex align-items-center text-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h2>Area Alert</h2>
					<p>Home > Area Alert</p>
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
				<p>Enter Your Personal Information. Note all information is highly secured and confidential.
				</p>
			</div>
			<div class="col-md-12">	
				<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				    	<label>First Name*</label>
				      <input type="text" class="form-control" placeholder="First name">
				    </div>
				    <div class="form-group col-md-6">
				    <label>Last Name*</label>
				      <input type="text" class="form-control" placeholder="Last name">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				    <label>Email*</label>
				      <input type="text" class="form-control" placeholder="Email">
				    </div>
				    <div class="form-group col-md-6">
				    <label>Phone*</label>
				      <input type="text" class="form-control" placeholder="Phone">
				    </div>
				  </div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center let-find-home">
				<h4>Area Alert</h4>
				<p>Enter Your Address and Select a Radius To Be Notified Of All Homes Selling In Your Neighbourhood.</p>
			</div>	
			<div class="col-md-12">
				<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Home Address*</label>	
				      <input type="text" class="form-control" placeholder="Enter Desired Address, City, Community etc.">
				    </div>
				    <div class="form-group col-md-6">
				      <label>Notify Me Of Homes Selling*</label>
				      <input type="text" class="form-control" placeholder="Last name">
				    </div>
				    <div class="form-group col-md-12">
				      <label>Additional Comments</label>
				      <textarea class="form-control" rows="6"></textarea>
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

