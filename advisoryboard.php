<?php
include_once('header.php');
?>

<div class="container">
	<div class="row">
		<div class="col-lg-1">
		
		</div>
		<div class="col-lg-10">
						
			<div class="row" id="people" style="padding-top:20px">
				<div class="col-lg-4"></div>
				<div class="col-lg-4"><h3 class="orange_labels"><center>Advisory Board</center></h3></div>
				<div class="col-lg-4"></div>
			</div>

		<div class="row">
			<div class="col-lg-3"></div>
			<div class="img-grid">
					<ul>
						<li>
							<div class="boxgrid captionfull">
								<a href="#" data-reveal-id="Joi_Ito" data-animation="fade" class="big-link">
							<img src="content/di/delhi/faculty/Joi Ito.png" class="img-responsive"/></a>
							</div>
							<div>
								<a href="#" data-reveal-id="micahrye" data-animation="fade" class="big-link name-link"><center><h4>Joi Ito</h4>Director <br/>
									<br/>MIT Media Lab</center></a>
							</div>
						</li>
						<li>
							<div class="boxgrid captionfull">
								<a href="#" data-reveal-id="Ramesh_Raskar" data-animation="fade" class="big-link">
									<img src="content/di/bangalore/mentors/Ramesh Raskar.jpg" class="img-responsive"/></a>

							</div>
							<div>
								<a href="#" data-reveal-id="micahrye" data-animation="fade" class="big-link name-link"><center><h4>Ramesh Raskar</h4>Associate Professor, <br/><br/>MIT Media Lab</center></a>
							</div>
						</li>
						
					</ul>
				</div>		
			</div>
		</div>	
			
			
			
			
			
			
			
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>


<?php
	include_once('footer.php');
?>

<div class="reveal-modal" id="Joi_Ito" >
		<div class="row" style="padding-top:25px">
			<h3 style="color:gray;font-family:MuseoSlab;">Joi Ito</h3>
		</div>
		<hr>
		<p style="text-align:justify;margin: 0 0 15px 0;">
			<img src="content/di/delhi/faculty/Joi Ito.png" style="float:left;margin: 0px 10px 5px 0px;"/>
			Joichi Ito is the Chair of Creative Commons, on the Board of the MacArthur Foundation; on the Board of Trustees of The Knight Foundation and co-founder and board member of Digital Garage an Internet company in Japan. He is on board of a number of non-profit organizations including The Mozilla Foundation and WITNESS. He has created numerous Internet companies including PSINet Japan, Digital Garage and Infoseek Japan and was an early stage investor in Twitter, Six Apart, Wikia, Flickr, Last.fm, Kongregate, Fotonauts/Fotopedia, Kickstarter and other Internet companies. He is the Guild Custodian of the World of Warcraft guild, We Know. He is a PADI Master Scuba Diver Trainer, an Emergency First Responder instructor and a Divers Alert Network instructor.
Ito was named by Businessweek as one of the 25 Most Influential People on the Web in 2008. In 2011, Ito was chosen by Nikkei Business as one of the 100 most influential people for the future of Japan and by Foreign Policy Magazine as one of the "Top 100 Global Thinkers". In 2011, he received the Lifetime Achievement Award from the Oxford Internet Institute in recognition of his role as one of the world's leading advocates of Internet freedom.</p>
		<a class="close-reveal-modal">&#215;</a>
	  </div>
      
      <div class="reveal-modal" id="Ramesh_Raskar" >
		<div class="row" style="padding-top:25px">
			<h3 style="color:gray;font-family:MuseoSlab;">Ramesh Raskar</h3>
		</div>
		<hr>
		<p style="text-align:justify;margin: 0 0 15px 0;"><img src="content/di/bangalore/mentors/Ramesh Raskar.jpg" style="float:left;margin: 0px 10px 5px 0px;"/>Ramesh Raskar joined the Media Lab from Mitsubishi Electric Research Laboratories in 2008 as head of the Lab's Camera Culture research group. His research interests span the fields of computational photography, inverse problems in imaging, and human-computer interaction. Recent inventions include transient imaging to look around a corner, a next-generation CAT-scan machine, imperceptible markers for motion capture (Prakash ), long-distance barcodes (Bokode ), touch + hover 3D interaction displays (BiDi screen ), low-cost eye care devices (NETRA ) and new theoretical models to augment light fields (ALF ) to represent wave phenomena. In 2004, Raskar received the TR100 Award from *Technology Review,* presented to top young innovators under the age of 35, and in 2003, the Global Indus Technovator Award, instituted at MIT to recognize the top 20 Indian technology innovators worldwide. In 2009, he was awarded a Sloan Research Fellowship. In 2010, he received the DARPA Young Faculty award. He holds more than 40 US patents, and has received four Mitsubishi Electric Invention Awards. He is currently co-authoring a book on computational photography.</p>
		<a class="close-reveal-modal">&#215;</a>
	  </div>


<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/hover-dropdown.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
<script src="assets/js/jquery.js"></script>
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
