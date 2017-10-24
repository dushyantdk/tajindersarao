<?php 
include(__DIR__.'/include/header.php');?>
<!-- Inner banner Start -->
<section class="inner-banner d-flex align-items-center text-center">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <h2>Contact Us</h2>
                  <p>Home > Contact</p>
               </div>
            </div>
         </div>
</section>
<!-- Inner banner End -->
<section class="inner-content">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                First Name</label>
                            <input type="text" class="form-control" id="name" placeholder="First name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Last Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Last name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Phone Number</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" placeholder="Phone number" required="required" /></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="12" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <address>
                <img src="images/tej.png" width="200" alt="" />
                <strong>Tajinder Sarao </strong><br>
                Sales Representative<br>
                CENTURY 21 LEGACY LTD., BROKERAGE<br>
                <abbr title="Phone">
                    P:</abbr> (647) 206-7222 <br>
                    P:</abbr> (905) 672-2200
            </address>
            </form>
        </div>
    </div>
  </div>
  <div class="contact-map">
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
  </div>
</section>

<?php include(__DIR__.'/include/footer.php');?>

