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
      <!-- PROPERTY DETAIL PANEL START -->
      <section class="property-detail-panel">
         <div class="container">
            <div class="row">
               <div class="col-lg-9">
               	<div class="main_title">
					<h2>Jungle Willow Cottage</h2>
					<p>Our Agriculture lab Property consisting of land and the buildings on it, along with its seds natural resources such as crops, minerals, or water; immovable property of this nature.Since this was a limited seds unit auction, we had approached by Developers to release incremental units to fulfill the demands at a stepped up cut-off price. Shortlisteed bidders will be called for unit allocation on First Come First Serve Basis. There are many variations of passages slightly believable.</p>
				</div>
				<div class="property-slides">
					<div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="images/property.png" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                           <img src="images/property.png" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                             <img src="images/property.png" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="3">
                             <img src="images/property.png" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                             <img src="images/property.png" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="images/property.png" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="6">
                            <img src="images/property.png" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="7">
                             <img src="images/property.png" class="img-fluid">
                        </div>

                        

                    </div>
                    <!-- main slider carousel nav controls -->


                    <ul class="carousel-indicators list-inline">
                      <li class="d-flex align-items-center">
                        
                    <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                      </li>
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                               <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                               <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
                               <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
                                <img src="images/property-ul.jpg" class="img-fluid">
                            </a>
                        </li>
                        <li class="d-flex align-items-center">
                           <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                        </li>
                    </ul>
                       
            </div>
				</div>
               </div>
               <div class="col-lg-3 col-sm-12">
               		<div class="property-feature">
               			<h2>Featured<span>$50,000</span></h2>
               			<ul>
               				<li>Tax:<span>T.M.I 2017</span></li>
               				<li>City:<span>Bonnechee Valley</span></li>
               				<li>Type:<span>Commercial</span></li>
               				<li>Style:<span>Sale of Business</span></li>
               				<li>Size:<span>1,500 Sq ft.</span></li>
               				<li>Basement:<span>Y</span></li>
               				<li>Garage:<span>Outside/Surface</span></li>
               			</ul>
               		</div>
               		<div class="loan-calculator">
               			<h2>Loan Calculator</h2>
               			<form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Loan Required</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Income Per Month</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Loan Tenture</label>
						    <select class="selectpicker">
                                <option>min Beds</option>
                            </select>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Rate of Interest</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="10%">
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
               		</div>
               </div>
            </div>
         </div>
      </section>
      <!-- PROPERTY DETAIL PANEL END -->
      <!-- FEATURED PROPERTY START-->
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
				      <div class="carousel-item">
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
				        </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
				        </div></div>
				      <div class="carousel-item active">
				        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
				        </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				        	<div class="single_properties">
								<span class="rent">Rent</span>
								<a href="property-details.html"><h4>North Parchrome Steet Australia - 58696</h4></a>
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
				        </div></div>
				    </div>
				    <a class="left carousel-control mt-3 p-4" href="#myCarousel" data-slide="prev"> <i class="fa fa-chevron-left"></i> </a>
				    <a class="right carousel-control mt-3 p-4" href="#myCarousel" data-slide="next"> <i class="fa fa-chevron-right"></i> </a>
				  </div>
				</div>


			</div>
		</div>
	</section>
	<!-- FEATURED PROPERTY END -->
   <!-- Query section START -->
      <section class="querypanel-form">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 text-center">
                  <h2>What to learn more about 192 Queen St (Hwy 41 & Hwy 609)</h2>
               </div>
            </div>
            <form>
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
               <div class="form-group text-event">
                
            </div>
              <div class="form-row">
                <div class="col">
                    <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" id='event_date' placeholder="Event date" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                </div>
                <div class="col">
                  <div class="input-group date" id="datetimepickertime">
                    <input class="form-control" type="text" id='event_time' placeholder="Event time" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <textarea class="form-control" placeholder="">I would like to learn more about 192 Queen St (Hwy 41 & Hwy 609)</textarea>
                </div>
              </div>
              <div class="form-group text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
         </div>
      </section>
   <!-- Query section End -->
   <?php 
include(__DIR__.'/include/footer.php');?>

