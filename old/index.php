<?php include('header-home.php') ?>

				<div id="hero">
					<div id="cover-image" class="animated fadeIn">
						<div class="container">
							<h1 class="hero-text animated fadeIn">  Step outside the boX. 						<br>	<small>Trade cryptoequities with security, privacy and speed.</small>
							 </h1>
							<div class="cta animated fadeIn">
								<a href="wallet.php" class="button">Get the wallet</a>
								<a href="#" data-toggle="modal" data-target="#demo" class="demo">Watch a demo</a>
							</div>
							<div class="screenshot animated fadeInUp">
								<img src="images/ss2.png" class="img-responsive" alt="screenshot" />
							</div>
						</div>
					</div>
				</div>

				<div id="tabs">
					<div class="container">
						<div class="row header">
							<div class="col-md-12">
								<h3>Accomplish more with React</h3>
								<p>Choose your favorite formats for your own sites</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 tabs-wrapper">
								<ul class="nav nav-tabs">
								  	<li class="active"><a href="#home" data-toggle="tab">Upstart your development</a></li>
								  	<li><a href="#profile" data-toggle="tab">Get ready in half the time</a></li>
								  	<li><a href="#messages" data-toggle="tab">Collaborate with everyone</a></li>
								  	<li><a href="#settings" data-toggle="tab">Get more done faster</a></li>
								</ul>

								<div class="tab-content">
								  	<div class="tab-pane fade in active" id="home">
								  		<div class="col-md-6 info">
								  			<h4>You don't need to have any advanced technical</h4>
								  			<p>
								  				Whether you want to fill this paragraph with some text like I'm doing right now, this place is perfect to describe some features or anything you want - React has a complete solution for you.
								  			</p>
								  			<p>
								  				You have complete control over the look & feel of your website, we offer the best quality so you take your site up and running in no time.
								  			</p>
								  		</div>
								  		<div class="col-md-6 image">
								  			<img src="images/tabs/pic1.png" class="img-responsive" alt="pic1" />
								  		</div>
								  	</div>
								  	<div class="tab-pane fade" id="profile">
								  		<div class="col-md-6 image">
								  			<img src="images/portfolioitem1.png" class="img-responsive" alt="pic2" />
								  		</div>
								  		<div class="col-md-6 info">
								  			<h4>You don't need to have any advanced technical</h4>
								  			<p>
								  				Whether you want to fill this paragraph with some text like I'm doing right now, this place is perfect to describe some features or anything you want - React has a complete solution for you.
								  			</p>
								  		</div>					  		
								  	</div>
								  	<div class="tab-pane fade" id="messages">
								  		<div class="col-md-6 info">
								  			<h4>You don't need to have any advanced technical</h4>
								  			<p>
								  				Whether you want to fill this paragraph with some text like I'm doing right now, this place is perfect to describe some features or anything you want - React has a complete solution for you.
								  			</p>
								  			<p>
								  				You have complete control over the look & feel of your website, we offer the best quality so you take your site up and running in no time.
								  			</p>
								  		</div>
								  		<div class="col-md-6 image">
								  			<img src="images/tabs/pic2.png" class="img-responsive" style="position: relative;top: 15px;" alt="pic3" />
								  		</div>
								  	</div>
								  	<div class="tab-pane fade" id="settings">
								  		<div class="col-md-6 image">
								  			<img src="images/tabs/pic1.png" class="img-responsive" alt="pic4" />
								  		</div>
								  		<div class="col-md-6 info">
								  			<h4>You don't need to have any advanced technical</h4>
								  			<p>
								  				Whether you want to fill this paragraph with some text like I'm doing right now, this place is perfect to describe some features or anything you want - React has a complete solution for you.
								  			</p>
								  		</div>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div><!-- end .st-content -->
		</div><!-- end .st-pusher -->
	</div><!-- end .st-container -->

	<div class="modal fade" id="demo">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
	      		<div class="modal-body">
	      			<iframe src='https://vimeo.com/89948761' width='650' height='370' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	      		</div>
	    	</div>
	 	 </div>
	</div>

	<script type="text/javascript">
		$(function () {
			// Makes the demo video appear/disappear 
			var $demo = $("#demo");
			$('#demo').on('hidden.bs.modal', function () {
			  $demo.find("iframe").remove();
			})
			$('#demo').on('show.bs.modal', function () {
				if (!$demo.find("iframe").length) {
					$demo.find(".modal-body").append("<iframe src='http://player.vimeo.com/video/22439234' width='650' height='370' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>")
				}			  
			});

			// triggers the off-canvas panel
			$(".sidebar-toggle").click(function (e) {
				e.stopPropagation();
				$(".st-container").toggleClass("nav-effect");
			});
			$(".st-pusher").click(function () {
				$(".st-container").removeClass("nav-effect");
			});

			 // parallax header
			 $('#cover-image').css("background-position", "50% 50%");
		    $(window).scroll(function() {
				var scroll = $(window).scrollTop(), 
					slowScroll = scroll/4,
					slowBg = 50 - slowScroll;
					
				$('#cover-image').css("background-position", "50% " + slowBg + "%");
			});
		});
	</script>
</body>
</html>