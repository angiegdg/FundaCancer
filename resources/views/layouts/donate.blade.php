<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fundacion manos vacias</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
 <!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
 <!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!-- webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- webfonts-->
<!--start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
	<!--//End-top-nav-script-->
</head>
<body>
<!-- header -->
	<div class="what">
		<div class="header">
			<div class="container">
			<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" title="Help hand" />
							<h1>Help Hand</h1><span>Help-Line: +01 000 000 0</span></a>
					</div>
			<!-- /logo -->
				<!-- top-nav -->
				<div class="top-nav">
					<span class="menu"> </span>
						<ul>
							<li><a href="index.html">About us</a></li>
							<li><a href="what.html"> What we do</a></li>
							<li class="active"><a href="donate.html">  Donate </a></li>
							<li><a href="blog.html"> Blog</a></li>
							<li><a href="contact.html">Contact us</a></li>
								<div class="clearfix"> </div>
						</ul>
				</div>
		<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(300);
						});
					});
				</script>
		<!-- script-for-nav -->
		<!-- /top-nav -->
			<div class="clearfix"> </div>
		</div>
<!-- /header -->
	<div class="donate">
	<div class="container">
		<div class="ad728x90" style="text-align:center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- w3layouts_demo_728x90 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:728px;height:90px"
				     data-ad-client="ca-pub-9153409599391170"
				     data-ad-slot="8639520288"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
		   </div>

		<div class="donate-main">
			<div class="col-md-8 donate-right">
				<div class="donate-top">
					<h3>Personal information</h3>
					<form>
						
						<div>
							<span>First Name<label>:</label></span>
								<input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
								<span>Last Name<label>:</label></span>
								<input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
								 <span>Email Address<label>:</label></span>
								 <input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
					 		<div>
								 <span>Address<label>:</label></span>
								 <input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
							<span>Credit card No<label>:</label></span>
								<input type="text"> 
							 </div>
							 	 <div class="clearfix"> </div>
							<div>
								<span>City<label>:</label></span>
								 <input type="text"> 
							 </div>
							 <div class="clearfix"> </div>
							 <div>
									<span>State<label>:</label></span>
						 		<select name="city">
								<option value="select your location"> states</option>
								<option value="saab">location1</option>
								<option value="fiat">location2</option>
								<option value="audi">location3</option>
								</select>
								</div>
								<div class="clearfix"> </div>
					   			<div>
								 <span>Zip<label>:</label></span>
									<input type="text"> 
								</div>
								<div class="clearfix"> </div>
						<input type="submit" value="Donate">
					
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4 donate-left">
				<div class="login-form">
					<h1>PayPal Account</h1>
						<form>
								<input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
								<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
								<div class="submit">
									<input type="submit" onclick="myFunction()" value="LOGIN" >
							</div>	
							<p><a href="#">Forgot Password ?</a></p>
						</form>
					</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="donator-section">
        <div class="container"> 
        	<div class="ad728x90" style="text-align:center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- w3layouts_demo_728x90 -->
				<ins class="adsbygoogle"
				     style="display:inline-block;width:728px;height:90px"
				     data-ad-client="ca-pub-9153409599391170"
				     data-ad-slot="8639520288"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
		   </div>

        	<h3>OUR DONATORS</h3>
        			<div class="donate-head-grids">
							<div class="col-md-4 donate-head-grid">
								<img src="images/tr1.jpg" alt="" />
								<h4>Kimberly Thompson</h4>
								<ul class="top-social-icons">
									<li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li> <a class="twr simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li> <a class="u simptip-position-bottom simptip-movable" data-tooltip="Youtube" href="#"> </a> </li>
									<div class="clearfix"> </div>
								</ul>
							</div>
							<div class="col-md-4 donate-head-grid">
								<img src="images/tr2.jpg" alt="" />
								<h4>Rico Massimo</h4>
								<ul class="top-social-icons">
									
									<li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li> <a class="twr simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li> <a class="u simptip-position-bottom simptip-movable" data-tooltip="Youtube" href="#"> </a></li>
									<div class="clearfix"> </div>
								</ul>
							</div>
							<div class="col-md-4 donate-head-grid">
								<img src="images/tr3.jpg" alt="" />
								<h4>Uku Mason</h4>
								<ul class="top-social-icons">
									<li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li> <a class="twr simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li> <a class="u simptip-position-bottom simptip-movable" data-tooltip="Youtube" href="#"> </a></li>
									<div class="clearfix"> </div>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
				</div>
			</div>
<!--strat-image-cursuals-->
                  <div class="scroll-slider">
                  	<div class="container"> 											 
							<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s1.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s4.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s2.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s3.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s4.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s1.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s2.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="images/s2.png"></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div> 
							<div class="clear"> </div>      
						  <!--strat-image-cursuals-->
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
								<!--End-image-cursuals-->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 5,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 1
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 2
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
				  			</div>				
						</div>

		<!--/start-footer-->
				<div class="footer">
						<div class="container">

						<div class="footer-grids">
							<div class="col-md-4 footer-grid-icons">
								<h3>Follow Us:</h3>
										<ul>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="fb" href="#"><span> </span></a></li>
											<li><a class="you" href="#"><span> </span></a></li>
											<li><a class="in" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
							</div>
							<div class="col-md-4 footer-grid-text">
								<h3>Join our news letter</h3>
								<p>Lorem Ipsum is simply dummy text of theprinting and typesetting industry.</p>
								form method="post" action="contact-post.html">
								 <a class="sign-btn" href="signup.html">Sign up</a>
							</div>
							<div class="col-md-4 copy-right">
								<p>&copy; Design by &nbsp;<a href="http://w3layouts.com">W3Layouts</a></p>
							</div>
							<div class="clearfix"> </div>	
						</div>							
					</div>
				</div>
					<!--//End-foote-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</body>
</html>