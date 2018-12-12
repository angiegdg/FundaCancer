<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">	
<title>Fundacion manos vacias</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
 <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<!-- Custom Theme files -->
		<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
		<link href="{{asset('css/menu.css')}}" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
		<!-- Custom Theme files -->
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
</head>
<body>
<!-- header -->
	<div class="what">
		<div class="header">
			<div class="container">
			<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="{{asset('images/logo.png')}}" title="Manos vacías" />
							<h1>Manos vacías</h1>
					</div>
			<!-- /logo -->
				<!-- top-nav -->
					<div class="top-nav">
					<span class="menu"> </span>
						<ul id="menu">
							<li><a href="{{ route('login') }}">Login</a></li>
							
							<li><a class="active" href="contact.html">​​​​​Contáctanos</a></li>
							
							<div class="clearfix"> </div>
						</ul>
				</div>
		<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="introduzca el termino..." type="search" name="search" id="search">
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
		<div class="contact">
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

					<div class="contact-section">
					<h3>Contáctanos</h3>

					 <form>

			<input type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}">
			<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			<input type="text" class="text" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Asunto';}">
            <textarea onfocus="if(this.value == 'Escribe tu mensaje...') this.value='';" onblur="if(this.value == '') this.value='Escribe tu mensaje';" >Escribe tu mensaje...</textarea>	

						 <div class="clearfix"> </div>
						 <input type="submit" value="ENVIAR MENSAJE">

					 </form>
			 	 </div>
			   </div>
			</div>
				
				

			<!--/start-footer-->
				<div class="footer">
						<div class="container">

						<div class="footer-grids">
							<div class="col-md-4 footer-grid-icons">
								<h3>Siguenos en:</h3>
										<ul>
											<li><a class="twitter" href="#"><span> </span></a></li>
											<li><a class="fb" href="#"><span> </span></a></li>
											<li><a class="you" href="#"><span> </span></a></li>
											<li><a class="in" href="#"><span> </span></a></li>
											<div class="clearfix"> </div>
										</ul>
							</div>
							
					<!--//End-foote-->

					
	</body>
</html>