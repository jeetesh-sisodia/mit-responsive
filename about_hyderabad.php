
<?php
include('header.php');
?>
<div class="container">
	<div class="row padd"></div>
	<div class="row">
		<div class="col-lg-2">		
			<ul class="contab">
				<li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="project_hyderabad.php" style="text-decoration:none;color:#acacac;">Recap</a></li>
				<li class="consubtab"><img src="assets/img/orange.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="about_hyderabad.php" style="text-decoration:none;color:black;">About</a></li>
				<li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="track_hyderabad.php" style="text-decoration:none;color:#acacac;">Tracks</a></li>
				<li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="people_hyderabad.php" style="text-decoration:none;color:#acacac;">People</a></li>
				<li class="consubtab"><img src="assets/img/gray.png" style="width:10px;height:10px;">&nbsp;&nbsp;<a href="sponsors_hyderabad.php" style="text-decoration:none;color:#acacac;">Sponsors</a></li>
			</ul>			
		</div>
		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6"><img src="assets/img/header_hyderabad.jpg"/></div>
				<div class="col-lg-3"></div>
			</div>

			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4"><h3 class="orange_labels"><center>About</center></h3></div>
				<div class="col-lg-4"></div>
			</div>

	<div class="row">    
        <div class="col-lg-12">
            <div class="content_slider">
              <div id="wrapper">
                  <div class="slider-wrapper theme-default">
                    <div id="myslider" class="nivoSlider">			             
								<img src="content/diy/hyderabad/slideshow/Pic2.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic2.jpg" alt="" />
								<img src="content/diy/hyderabad/slideshow/Pic3.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic3.jpg" alt=""/>		
								<img src="content/diy/hyderabad/slideshow/Pic6.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic6.jpg" alt=""/>
								<img src="content/diy/hyderabad/slideshow/Pic8.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic8.jpg" alt="" />
								<img src="content/diy/hyderabad/slideshow/Pic9.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic9.jpg" alt=""/>                    </div>
                  </div>
                </div>
        	</div>
        	<p>This July 7th through 13th, the Design Innovation Workshop series and the MIT Tata Center for Technology and Design are holding the first DIy event: Engineering the Eye, with the LV Prasad Eye Institute, BITS Pilani, Hyderabad Campus, and the Perkins School for the Blind.
The workshop will bring together students from across India to work closely with clinicians over seven days to develop fully functional prototypes which address both preventing blindness and enabling people with existing vision loss to lead fuller, more productive lives. Students will engage in a complete pipeline of device design: from ideation,
 to project definition, to prototyping, to user testing, and finally to presentation and demonstration of their achievements in an exhibition open to the public and press.
</p>
       	</div>
        
    </div>

    <!-- need to set slider -->

			<!-- <div class="row content_slider">
				<div id="wrapper">
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider">
								<img src="content/diy/hyderabad/slideshow/Pic2.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic2.jpg" alt="" />
								<img src="content/diy/hyderabad/slideshow/Pic3.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic3.jpg" alt=""/>		
								<img src="content/diy/hyderabad/slideshow/Pic6.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic6.jpg" alt=""/>
								<img src="content/diy/hyderabad/slideshow/Pic8.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic8.jpg" alt="" />
								<img src="content/diy/hyderabad/slideshow/Pic9.jpg" data-thumb="content/diy/hyderabad/slideshow/Pic9.jpg" alt=""/>
							</div>
						</div>
					<p style="text-align:justify;color:#acacac;padding-top:0px; margin-bottom:20px;">This July 7th through 13th, the Design Innovation Workshop series and the MIT Tata Center for Technology and Design are holding the first DIy event: Engineering the Eye, with the LV Prasad Eye Institute, BITS Pilani, Hyderabad Campus, and the Perkins School for the Blind.

The workshop will bring together students from across India to work closely with clinicians over seven days to develop fully functional prototypes which address both preventing blindness and enabling people with existing vision loss to lead fuller, more productive lives. Students will engage in a complete pipeline of device design: from ideation, to project definition, to prototyping, to user testing, and finally to presentation and demonstration of their achievements in an exhibition open to the public and press.


</p>
					</div>
				</div> -->
			
		<!--	
		//Social media
		<center>
			<div class="row col-lg-8 content_slider" style="float:center;">
				<div class="col-lg-3 social">
					<a href="#"><img src="assets/img/fb.png"/></a>
				</div>
				<div class="col-lg-3 social">
					<a href="#"><img src="assets/img/flickr.png"/></a>
				</div>
				<div class="col-lg-3 social">
					<a href="#"><img src="assets/img/pinterest.png"/></a>
				</div>
				<div class="col-lg-3 social">
					<a href="#"><img src="assets/img/picasa.png"/></a>
				</div>
			</div>
			</center>-->
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>

<?php
	include_once('footer.php');
?>


<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/hover-dropdown.min.js"></script>

<script type="text/javascript" src="assets/js/jquery.nivo.slider.js"></script>


<script type="text/javascript">
$(document).ready(function(){
  $("#myslider").nivoSlider();

});

</script>



  </body>
</html>
