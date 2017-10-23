<?php 
include(__DIR__.'/include/header.php');?>
<!-- Inner banner Start -->
	<section class="inner-banner d-flex align-items-center text-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h2>Property Listing</h2>
					<p>Home > Property listing</p>
				</div>
			</div>
		</div>
	</section>
<!-- Inner banner End -->
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
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
						</div>
					</div>
					</div>
				</div>
	</section>
<!-- Form End -->
<!-- PROPERTY LISTING PANEL START -->
<section class="propertylisting-panel">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="main_title">
					<h2>Properties For Sale</h2>
					<p>Thank you for your Choosing Real Estate. Property consisting of land and the buildings on it, along with its natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited unit auction, we had approached the Developers to release incremental units to fulfill the demand at a stepped up cut-off price. Shortlisted bidders will be called for unit allocation on First Come First Serve Basis. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
				</div>
				<div class="listing-search">
					<span class="left_side">28 Listing</span>
					<ul>
							<li class="border-right">
								<div class="dropdown">
									<button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenu11" data-toggle="dropdown" aria-haspopup="true">
										 Sort By Price
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu11">
									  	<li>Sort By Area</li>
										<li>Sort By Size</li>
										<li>Sort By Price</li>
									</ul>
								</div> <!-- End .dropdown -->
							</li>
							<li class="border-right">
								<div class="dropdown">
									<button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenu22" data-toggle="dropdown" aria-haspopup="true">
										 Ascending to Decending
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu22">
									  	<li>Ascending to Decending</li>
										<li>Ascending to Decending</li>
										<li>Ascending to Decending</li>
									</ul>
								</div> <!-- End .dropdown -->
							</li>
							<li class="back_home"><a href="index.php">Back to Home</a></li>
							<li>
								<a href="javascript:void(0)" class="listview"><i class="fa fa-th"></i></a>
								<a href="javascript:void(0)" class="grideview"><i class="fa fa-th-list"></i></a>
							</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row property-gridview">
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				    <div class="single_properties">
						<span class="rent">Rent</span>
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
						<a href="property-details.php"><h4>North Parchrome Steet Australia - 58696</h4></a>
						<div class="property-imgae"><img src="images/thumb1.png"></div>
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
		<div class="row property-listview">
				<div class="col-xl-12">
					<div class="gridproperty-single">
								<span>Featured</span>
								<div class="properties_details">
									<div class="img_holder">
										<img src="images/listin-img.jpg" alt="images">
										<div class="overlay">
											<a href="#" class=""><i class="fa fa-search-plus"></i></a>
										</div>
									</div> <!-- End .img_holder -->

									<div class="text">
										<div class="properties_info">
											<div class="properties_title">
												<a href="property-details.php"><h6>Downtown Penthouse</h6></a>
												<span><i class="fa fa-map-marker"></i> Washington / Seattle</span>
											</div> <!-- End .properties_title -->
										</div>
										<span>$ 95,00,000</span>

										<p>There are many variations of passages  of Lorem Ipsum available, but the majority have suffered alteration in some form slightly believable.</p>

										<ul class="properties_history">
											<li class=""><i class="fa fa-home"></i> Villa</li>
											<li class=""><i class="fa fa-trello"></i>East View</li>
											<li class=""><i class="fa fa-bed"></i>2 Br</li>
											<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
											<li class=""><i class="fa fa-compress"></i>1560 Sq Feet</li>
											<li class=""><i class="fa fa-car"></i> 2 Garages</li>
										</ul>
									</div> <!-- End .text -->
								</div> <!-- End .properties_details -->
					</div>
				</div>
				<div class="col-xl-12">
					<div class="gridproperty-single">
								<span>Featured</span>
								<div class="properties_details">
									<div class="img_holder">
										<img src="images/listin-img.jpg" alt="images">
										<div class="overlay">
											<a href="#" class=""><i class="fa fa-search-plus"></i></a>
										</div>
									</div> <!-- End .img_holder -->

									<div class="text">
										<div class="properties_info">
											<div class="properties_title">
												<a href="property-details.php"><h6>Downtown Penthouse</h6></a>
												<span><i class="fa fa-map-marker"></i> Washington / Seattle</span>
											</div> <!-- End .properties_title -->
										</div>
										<span>$ 95,00,000</span>

										<p>There are many variations of passages  of Lorem Ipsum available, but the majority have suffered alteration in some form slightly believable.</p>

										<ul class="properties_history">
											<li class=""><i class="fa fa-home"></i> Villa</li>
											<li class=""><i class="fa fa-trello"></i>East View</li>
											<li class=""><i class="fa fa-bed"></i>2 Br</li>
											<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
											<li class=""><i class="fa fa-compress"></i>1560 Sq Feet</li>
											<li class=""><i class="fa fa-car"></i> 2 Garages</li>
										</ul>
									</div> <!-- End .text -->
								</div> <!-- End .properties_details -->
					</div>
				</div>
				<div class="col-xl-12">
					<div class="gridproperty-single">
								<span>Featured</span>
								<div class="properties_details">
									<div class="img_holder">
										<img src="images/listin-img.jpg" alt="images">
										<div class="overlay">
											<a href="#" class=""><i class="fa fa-search-plus"></i></a>
										</div>
									</div> <!-- End .img_holder -->

									<div class="text">
										<div class="properties_info">
											<div class="properties_title">
												<a href="#"><h6>Downtown Penthouse</h6></a>
												<span><i class="fa fa-map-marker"></i> Washington / Seattle</span>
											</div> <!-- End .properties_title -->
										</div>
										<span>$ 95,00,000</span>

										<p>There are many variations of passages  of Lorem Ipsum available, but the majority have suffered alteration in some form slightly believable.</p>

										<ul class="properties_history">
											<li class=""><i class="fa fa-home"></i> Villa</li>
											<li class=""><i class="fa fa-trello"></i>East View</li>
											<li class=""><i class="fa fa-bed"></i>2 Br</li>
											<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
											<li class=""><i class="fa fa-compress"></i>1560 Sq Feet</li>
											<li class=""><i class="fa fa-car"></i> 2 Garages</li>
										</ul>
									</div> <!-- End .text -->
								</div> <!-- End .properties_details -->
					</div>
				</div>
				<div class="col-xl-12">
					<div class="gridproperty-single">
								<span>Featured</span>
								<div class="properties_details">
									<div class="img_holder">
										<img src="images/listin-img.jpg" alt="images">
										<div class="overlay">
											<a href="#" class=""><i class="fa fa-search-plus"></i></a>
										</div>
									</div> <!-- End .img_holder -->

									<div class="text">
										<div class="properties_info">
											<div class="properties_title">
												<a href="#"><h6>Downtown Penthouse</h6></a>
												<span><i class="fa fa-map-marker"></i> Washington / Seattle</span>
											</div> <!-- End .properties_title -->
										</div>
										<span>$ 95,00,000</span>

										<p>There are many variations of passages  of Lorem Ipsum available, but the majority have suffered alteration in some form slightly believable.</p>

										<ul class="properties_history">
											<li class=""><i class="fa fa-home"></i> Villa</li>
											<li class=""><i class="fa fa-trello"></i>East View</li>
											<li class=""><i class="fa fa-bed"></i>2 Br</li>
											<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
											<li class=""><i class="fa fa-compress"></i>1560 Sq Feet</li>
											<li class=""><i class="fa fa-car"></i> 2 Garages</li>
										</ul>
									</div> <!-- End .text -->
								</div> <!-- End .properties_details -->
					</div>
				</div>
				<div class="col-xl-12">
					<div class="gridproperty-single">
								<span>Featured</span>
								<div class="properties_details">
									<div class="img_holder">
										<img src="images/listin-img.jpg" alt="images">
										<div class="overlay">
											<a href="#" class=""><i class="fa fa-search-plus"></i></a>
										</div>
									</div> <!-- End .img_holder -->

									<div class="text">
										<div class="properties_info">
											<div class="properties_title">
												<a href="#"><h6>Downtown Penthouse</h6></a>
												<span><i class="fa fa-map-marker"></i> Washington / Seattle</span>
											</div> <!-- End .properties_title -->
										</div>
										<span>$ 95,00,000</span>

										<p>There are many variations of passages  of Lorem Ipsum available, but the majority have suffered alteration in some form slightly believable.</p>

										<ul class="properties_history">
											<li class=""><i class="fa fa-home"></i> Villa</li>
											<li class=""><i class="fa fa-trello"></i>East View</li>
											<li class=""><i class="fa fa-bed"></i>2 Br</li>
											<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
											<li class=""><i class="fa fa-compress"></i>1560 Sq Feet</li>
											<li class=""><i class="fa fa-car"></i> 2 Garages</li>
										</ul>
									</div> <!-- End .text -->
								</div> <!-- End .properties_details -->
					</div>
				</div>
				<div class="col-xl-12">
					<div class="gridproperty-single">
								<span>Featured</span>
								<div class="properties_details">
									<div class="img_holder">
										<img src="images/listin-img.jpg" alt="images">
										<div class="overlay">
											<a href="#" class=""><i class="fa fa-search-plus"></i></a>
										</div>
									</div> <!-- End .img_holder -->

									<div class="text">
										<div class="properties_info">
											<div class="properties_title">
												<a href="#"><h6>Downtown Penthouse</h6></a>
												<span><i class="fa fa-map-marker"></i> Washington / Seattle</span>
											</div> <!-- End .properties_title -->
										</div>
										<span>$ 95,00,000</span>

										<p>There are many variations of passages  of Lorem Ipsum available, but the majority have suffered alteration in some form slightly believable.</p>

										<ul class="properties_history">
											<li class=""><i class="fa fa-home"></i> Villa</li>
											<li class=""><i class="fa fa-trello"></i>East View</li>
											<li class=""><i class="fa fa-bed"></i>2 Br</li>
											<li class=""><i class="fa fa-wheelchair"></i>2 Ba</li>
											<li class=""><i class="fa fa-compress"></i>1560 Sq Feet</li>
											<li class=""><i class="fa fa-car"></i> 2 Garages</li>
										</ul>
									</div> <!-- End .text -->
								</div> <!-- End .properties_details -->
					</div>
				</div>
		</div>
	</div>
</section>
<!-- PROPERTY LISTING PANEL END -->
<!-- Footer END -->
 <?php 
include(__DIR__.'/include/footer.php');?>

