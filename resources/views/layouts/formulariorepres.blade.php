<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Fundacion manos vacias</title>
		<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<!-- Custom Theme files -->
		<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
		<link href="{{asset('css/menu.css')}}" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
		<!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!--start-smoth-scrolling-->
		<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
		
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
						<a href={{ url('') }}><img src="{{asset('images/logo.png')}}" title="Manos vacias" />
							<h1>Manos vacías</h1>
						</div>
						<!-- /logo -->
						<!-- top-nav -->
						<div class="top-nav">
							<span class="menu"> </span>
							<ul id="menu">
								<li><a>Registro</a>
								<ul>
							    @if(Auth::user()->rol == 'Admin')
                                <li><a href="{{url('/fundacion/representante')}}">Representante</a>
                                <li><a href="{{url('/fundacion/medicamento')}}">Medicamento</a>
                                @endif
                                @if(Auth::user()->rol == 'Representante')
                                     <li><a href="{{url('/fundacion/ninos')}}">Niños</a>
                                @endif
								</ul>
							</li>
					
							
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
					<script src="{{asset('js/classie.js')}}"></script>
					<script src="{{asset('js/uisearch.js')}}"></script>
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
					
				</div>
				<div class="donate-main">
					@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif
					<div class="col-md-8 donate-right">
						<div class="donate-top">
							<h3>Información Personal</h3>
							
							<form method="POST" action="{{url('fundacion/representante')}}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								
								<div>
									<span>Nombre<label>:</label></span>
									<input type="text" name="name" placeholder="Nombre...">
								</div>
								<div class="clearfix"> </div>
								<div>
									<span>Apellido<label>:</label></span>
									<input type="text" name="apellido" placeholder="Apellido...">
								</div>
								<div class="clearfix"> </div>
								<div>
									<span>Email<label>:</label></span>
									<input type="email" name="email" id="email" placeholder="Email...">
									<div id="message"></div>
								</div>
								<div class="clearfix"> </div>
								<div>
									<span>Telefono<label>:</label></span>
									<input type="number" name="telefono" id="telefono" placeholder="telefono...">
								</div>
							
								
								<div class="clearfix"> </div>
								<div>
									<span>Ciudad<label>:</label></span>
									<select name="ciudad" id="">
										<option value="">Seleccione</option>
										@foreach($Ciudad as $issue)
										<option value="{{$issue->id}}">{{$issue->nombre}}</option>
										@endforeach
									</select> 
								
								</div>
									<div class="clearfix"> </div>
								<div>
									<span>Password<label>:</label></span>
									<input type="Password" name="password" placeholder="password...">
								</div>
								
								<div class="clearfix"> </div>
								<input type="submit" value="Registrar">
							</div>
							<div class="clearfix"> </div>
						</div>
						
					</div>
						<input type="hidden" name="Rol" value="Representante">

					</form>
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
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
			<script type="text/javascript">
				$('#telefono').change(function(){
					let email = $('#email').val();
					  $.ajax({
				      type: "GET",
				      url: "/ValidateEmail/"+email,
				      success: function(data) {
				      	$('#message').data(data.message)
				      	if(data.message == 'Ocupado')
				      	{
				      		$('#message').html('<p class="error">Correo ya usado</p>');
				      	}else{
				      		$('#message').html('<p class="success">Disponible</p>');
				      	}
				      }
				    });
					
					console.log(email);
				});
			</script>
		</html>