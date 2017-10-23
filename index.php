<?php 
include(__DIR__.'/include/header.php');?>
<!-- Slider Start -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		  	</ol>
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="carousel-item active">
		        <img class="d-block w-100" src="images/slider.jpg" alt="slider 1">
		        <div class="carousel-caption d-none d-md-block">
		          <h1>Home Prices Are Up!</h1>
		          <p>Find out what your home is worth in today's market</p>
		          <a href="about-us.html">Get Started</a>
		        </div>
		      </div>
		      <div class="carousel-item">
		        <img class="d-block w-100" src="images/slider.jpg" alt="slider 1">
		        <div class="carousel-caption d-none d-md-block">
		          <h1>Home Prices Are Up!</h1>
		          <p>Find out what your home is worth in today's market</p>
		          <a href="about-us.html">Get Started</a>
		        </div>
		      </div>
			  </div>
			<!-- Controls -->
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		    </a>
		</div>
<!-- Slider End -->
<!-- Form Start -->
	<section class="search-panel">
				<div class="container">
					<div class="row">
					<div class="col-xl-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">BUY</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">SELL</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						  	
						  	<form>
							  <div class="form-row">
							    <div class="form-group col-md-5">
							      <input type="email" class="form-control" id="inputEmail4" placeholder="type city name here">
							    </div>
							    <div class="form-group col-md-3">
							      <select class="selectpicker">
									  <option>Select City</option>
								  </select>
								</div>
							    <div class="form-group col-md-4">
							      <select class="selectpicker">
									  <option>Residential, Condominium, Commerical</option>
								  </select>
							    </div>
							  </div>
							  <div class="form-row">
							  	<div class="form-group col-md-2">
							      <select class="selectpicker">
									  <option>min Baths</option>
								  </select>
								</div>
								<div class="form-group col-md-2">
							      <select class="selectpicker">
									  <option>min Beds</option>
								  </select>
								</div>
								<div class="form-group col-md-5">
								  <p>Price range: <span>€ 100 to 15,000, 000</span></p>	
							      <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/>
								</div>
								<div class="form-group col-md-3">
							      <button type="submit" class="btn btn-primary">Sign in</button>
								</div>
							  </div>
							  
							</form>

						  </div>
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						  	
						  		<form>
							  <div class="form-row">
							    <div class="form-group col-md-5">
							      <input type="email" class="form-control" id="inputEmail4" placeholder="type city name here">
							    </div>
							    <div class="form-group col-md-3">
							      <select class="selectpicker">
									  <option>Select City</option>
								  </select>
								</div>
							    <div class="form-group col-md-4">
							      <select class="selectpicker">
									  <option>Residential, Condominium, Commerical</option>
								  </select>
							    </div>
							  </div>
							  <div class="form-row">
							  	<div class="form-group col-md-2">
							      <select class="selectpicker">
									  <option>min Baths</option>
								  </select>
								</div>
								<div class="form-group col-md-2">
							      <select class="selectpicker">
									  <option>min Beds</option>
								  </select>
								</div>
								<div class="form-group col-md-5">
								  <p>Price range: <span>€ 100 to 15,000, 000</span></p>	
							      <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/>
								</div>
								<div class="form-group col-md-3">
							      <button type="submit" class="btn btn-primary">Sign in</button>
								</div>
							  </div>
							  
							</form>
						  </div>
						</div>
					</div>
					</div>
				</div>
	</section>
<!-- Form End -->
<!-- Home About Start -->
	<section class="home-about">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="user-img"><img src="images/tej.png" alt="" /></div>
				</div>
				<div class="col-sm-7">
					<div class="homeabout-content">
						<h2><span>Welcome</span></h2>
						<h3>ARE YOU A FIRST TIME HOME BUYER? ARE YOU LOOKING TO SELL? ARE YOU AN EXPERIENCED INVESTOR?</h3>
						<p>If you’ve answered yes to any of the questions above, then you’ve come to the right place! I have a passion for assisting clients with various real estate needs. I am a trusted and well trained professional who strives to provide you with the best solution. Clients are impressed by the dedication and effort I put into making sure that they receive top quality service and amazing results. Explore my website to find detailed listing information, buying guides, selling guides and other features that suit your real estate requirements. Discover why I love real estate and why I am the best choice for you.</p>
						<a href="#">Learn more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Home About End -->
<!-- feature propert Start -->
	<section class="home-fetaure-panel">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h2 class="panel-title">
						<span>Featured Properties</span>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				  <div class="carousel slide text-center" id="myCarousel" data-ride="carousel">
				    <div class="carousel-inner">
				      <div class="carousel-item active">
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				      </div>
				      <div class="carousel-item ">
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
								<div class="property-imgae"><img src="images/thumb1.png" /></div>
								<div class="property_details">
									<h4>$ 12,500 <span>/ Month</span></h4>
									<span>Marbella, Luxury Villa</span>
								</div>
								<ul>
									<li class=""><i class="fa fa-trello"></i>East</li>
									<li class=""><i class="fa fa-bed"></i>2 Br</li>
									<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
									<li class=""><i class="fa fa-compress"></i>560 Sq</li>
								</ul>
							</div>
				        </div>
				      </div>
				    </div>
				    <a class="left carousel-control mt-3 p-4" href="#myCarousel" data-slide="prev"> <i class="fa fa-chevron-left"></i> </a>
				    <a class="right carousel-control mt-3 p-4" href="#myCarousel" data-slide="next"> <i class="fa fa-chevron-right"></i> </a>
				  </div>
				</div>


			</div>
		</div>
	</section>
<!-- feature propert End -->
<!-- Property-tool Start -->
	<section class="property-tool-panel">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-xl-6 col-sm-12">
	 				<h2 class="panel-title">
						<span>Featured Properties</span>
					</h2>
					<ul>
						<li>
							<img src="images/icon-1.png" alt="" /> Mortgage
						</li>
						<li>
							<img src="images/icon-2.png" alt="" /> CMHC Insurance
						</li>
						<li>
							<img src="images/icon-3.png" alt="" /> Affordability
						</li>
						<li>
							<img src="images/icon-4.png" alt="" /> Land Transfer Tax
						</li>
					</ul>
	 			</div>
	 			<div class="col-xl-6 col-sm-12">
	 				<h2 class="panel-title">
						<span>Online Real Estate Tools</span>
					</h2>
					<ul>
						<li>
							<img src="images/icon-5.png" alt="" /> Land Transfer Tax
						</li>
						<li>
							<img src="images/icon-6.png" alt="" /> Area Alert
						</li>
						<li>
							<img src="images/icon-7.png" alt="" /> Market News
						</li>
						<li>
							<img src="images/icon-8.png" alt="" /> Mortgage Rates
						</li>
					</ul>
	 			</div>
	 		</div>
	 	</div>
	</section> 
<!-- Property-tool End -->
<!-- PRE PROPERTY START -->
<section class="predefine-property-panel">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<h2 class="panel-title">
					<span>Pre-Define Proerty Search</span>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<a class="pre-block d-flex align-items-center  flex-column">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h3>Brampton</h3>
					<p>Properties</p>
				</a>
			</div>
			<div class="col-md-3 col-sm-6">
				<a class="pre-block d-flex align-items-center  flex-column">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h3>Brampton</h3>
					<p>Properties</p>
				</a>
			</div>
			<div class="col-md-3 col-sm-6">
				<a class="pre-block d-flex align-items-center  flex-column">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h3>Brampton</h3>
					<p>Properties</p>
				</a>
			</div>
			<div class="col-md-3 col-sm-6">
				<a class="pre-block d-flex align-items-center  flex-column">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h3>Brampton</h3>
					<p>Properties</p>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- PRE PROPERTY END -->
<!-- Footer START -->
<?php 
include(__DIR__.'/include/footer.php');?>

