<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">	
<title>Fundacion manos vacias</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
 <!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/menu.css" rel='stylesheet' type='text/css' />
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

</head>
<body>
<!-- header -->
	<div class="main">
		<div class="header">
			<div class="container">
			<!-- logo -->
					<div class="logo">
						<a href="{{ url('') }}"><img src="images/logo.png" title="Manos vacías" />
							<h1>Manos vacías</h1>
					</div>
			<!-- /logo -->
				<!-- top-nav -->
				<div class="top-nav">
					<span class="menu"> </span>

						<ul id="menu">
							<!-- <li><a>Registro</a>

 							<ul>
    							<li><a href="{{ url('/fundacion/representante') }}">Representante</a>
    							<li><a href="{{ url('/fundacion/ninos')}}">Niño</a>
  							</ul>
  						    
							</li>-->
							<li><a href="{{ route('login') }}">Login</a>	
							<li><a href="{{ url('layouts/contact')}}">​​​​​Contáctanos</a></li>
							
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
	</div>
		<div class="banner">
			<div class="slider-caption">
				<h2>tú mano de ayuda sirve aquí</h2>
					<p> Somos una organización eficiente en la suma de esfuerzos y recursos hacia el logro del mejoramiento de la calidad de vida de los niños con cáncer y su grupo familiar durante su tratamiento</p>
					
			</div>
		</div>
		<!-- /header -->
	<!-- slider -->
	<!--/start-services-->
			 <div class="Service-section">
	 			<div class="container">
		 			<div class="service-grids">
			 				<div class="col-md-4 service-grid">
			 					<h3>Nuestra Misión</h3>
			 					<p>Ayudar al niño con cáncer a alcanzar su curación </p>
			 				</div>
			 					<div class="col-md-4 service-grid">
			 					<h3>Únete</h3>
			 					<p>Sé parte de nuestro equipo, involúcrate en nuestras actividades y forma parte de esta loable labor. </p>
			 				</div>
			 				<div class="col-md-4 service-grid">
			 					<h3>Como ayudar</h3>
			 					<p> Generar campañas para que nuestros niños reciban apoyo y orientación en la prevención, diagnostico y control de su salud fomentando su bienestar.</p>
			 				</div>
		 				<div class="clearfix"> </div>
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