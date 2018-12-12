@extends('layouts.app')

@section('content')
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
                            <li><a>Registro</a>

                            <ul>

                                @if(Auth::user()->rol == 'Admin')
                                <li><a href="{{url('/fundacion/representante')}}">Representante</a>
                                <li><a href="{{url('/fundacion/medicamento')}}">Medicamento</a>
                                <li><a href="{{url('/fundacion/consultas')}}">Consulta</a>

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
                
                            
                    <!--//End-foote-->
                    
    </body>
@endsection



