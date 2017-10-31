<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="footer-address">
                        <h3>Tajinder Sarao</h3>
                        <p>Sales Representative</p><p>CENTURY 21 LEGACY LTD., BROKERAGE</p><p> 7420-B Bramalea Road, Mississauga, Ontario, L5S 1W9</p><p class="i"><span>e</span><a href="mailto:tssarao@gmail.com">tssarao@gmail.com</a></p><p class="i"><span>m</span><a href="tel:6472067222">(647) 206-7222</a></p><p class="i"><span>o</span><a href="tel:9056722200">(905) 672-2200</a></p>
				</div>
			</div>
			<div class="col-sm-7">
				<nav class="footer-nav">
                      <h3>Useful Links</h3>
                      <ul><li><a href="home">›&nbsp;&nbsp;Home</a></li><li><a href="property-search">›&nbsp;&nbsp;Property Search</a></li><li><a href="about-me">›&nbsp;&nbsp;About Me</a></li><li><a href="real-estate-news">›&nbsp;&nbsp;Real Estate News</a></li><li><a href="contact">›&nbsp;&nbsp;Contact</a></li><li><a href="blog">›&nbsp;&nbsp;Blog</a></li></ul>
                    </nav>
			</div>
		</div>
	</div>
</footer>
<!-- Footer END -->
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
      <script src="js/bootstrap-select.js"></script>
      <script src="js/bootstrap-slider.js"></script>
      <script src="js/bootstrap-datetimepicker.min.js"></script>
      <script type="text/javascript">
         $("#ex2").slider({});
         $('#myCarousel').carousel({
  interval: 3000
})    

$(function () {

    $(".property-gridview").hide();
    
    $(".listview, .grideview").bind("click", function () {

      $(".property-gridview").hide();        
        
      if ($(this).attr("class") == "listview")
      {
        $(".property-gridview").show();
      }
      else 
      { 
        $(".property-listview").show();
      }
    });

});
         
</script>
<script type="text/javascript">
$(document).ready(function () {
    if ($('#datetimepicker').length) {
        $('#datetimepicker').datetimepicker({
            viewMode: 'days',
            minDate: 0,
            minDate: new Date(),
            format: 'YYYY-MM-DD'
        });
    }
    if ($('#datetimepickertime').length) {
        $('#datetimepickertime').datetimepicker({
            format: 'LT'
        });
    }
});




$(document).ready(function() {
    function bindNavbar() {
        if ($(window).width() > 990) {
            $('.navbar-collapse .dropdown').on('mouseover', function(){
                $('.dropdown-toggle', this).next('.dropdown-menu').show();
            }).on('mouseout', function(){
                $('.dropdown-toggle', this).next('.dropdown-menu').hide();
            });
            
            $('.dropdown-toggle').click(function() {
                if ($(this).next('.dropdown-menu').is(':visible')) {
                    window.location = $(this).attr('href');
                }
            });
        }
        else {
            $('.navbar-collapse .dropdown').off('mouseover').off('mouseout');
        }
    }
    
    $(window).resize(function() {
        bindNavbar();
    });
    
    bindNavbar();
});

</script>
   </body>
</html>