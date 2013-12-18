<?php
include_once('header.php');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 parnership_content">
			
		</div>
	</div>
	<div class="row con">
		<div class="col-lg-2"></div>
		<div class="col-lg-4 parnership_content_left">
			<div class="row">
				<div class="col-lg-12">
					<ul class="media-list">
						<li class="media">
							<div class="media-body">
								<h2 class="media-heading">Are you a University or an Organisation? </h2>
								
						</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p>We work with universities to hold Design Innovation or DIy workshop. Interested? Drop us an email?</p>
				</div>
			</div>
		</div>



		<div class="col-lg-4">
			<div class="row">
				<div class="col-lg-12">
					<ul class="media-list">
						<li class="media">
							<div class="media-body">
								<h2 class="media-heading">Are you Interested in Maker Spaces?</h2>
								
						</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p>We build fabrication laboratories all across India, to spread the Maker Movement where anybody can break, hack, build and collaborate. Lets build one in your city.</p>
				</div>
			</div>
			

		</div>
		<div class="col-lg-2"></div>
	</div>


<div class="row">
		<div class="col-lg-12 parnership_content">
			
		</div>
</div>

	<div class="row">
		<div class="col-lg-12">
			<h3 class="media-heading">
			<center><label>Contact Us at &nbsp;&nbsp;&nbsp; <span style="color:#36C;"><a href="mailto:india@media.mit.edu">india@media.mit.edu</a></span></label></center>
			</h3>
		</div>
	</div>
	
	
	
	
</div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

   
<?php
include_once('footer.php');
?>  



<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.reveal.js"></script>


<script>
    $(document).ready(function(){
         $('#myCarousel').carousel();
    });
      
    </script>
<script type="text/javascript">
$(document).ready(function(){

  $('.boxgrid.captionfull').hover(
          function(){
            $(this).find('img').animate({opacity: ".6"}, 300);    
            $(this).find('.cover').animate({top:"100px"}, 300);
          }, 
          function(){
            $(this).find('img').animate({opacity: "1.0"}, 300);         
            $(this).find('.cover').animate({top:"260px"}, 100);
          }   
        );
});


</script>

</body>
</html>
