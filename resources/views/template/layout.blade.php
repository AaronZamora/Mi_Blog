<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>BIENVENIDOS A MI BLOG!!!</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    

 </head>

  <body>
	
	<!-- Preloader Start -->
    <div class="preloader">
	  <p>Cargando...</p>
     </div>
     <!-- Preloader End -->

    
    
    <!-- Menu Section Start -->
    <header id="home">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="{{route('index')}}">DKN0042</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="{{route('index')}}">Inicio<div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="{{route('miPresentacion')}}">Cosas Sobre Mi</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="{{route('miExperiencia')}}">Experiencia</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </header>
     <!-- Menu Section End -->  
    
    
    <!-- Home Section Start -->
    <section class="home-section">
        <div class="container">
            <div class="row">
                 @yield('inicio')
            </div>
        </div>
    </section>
        <!-- Home Section End -->
    
    <!-- About Start -->
    <section id="about" class="about section-space-padding">
       <div class="container">
       @yield('presentacion')    
        </div>
    </section>   

    <!-- Experience Start -->
    <section class="section-space-padding">
        <div class="container">
           @yield('experiencia')
        </div>
    </section>

    <!-- Experience End -->        
        
    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
               
            <div class="col-md-12">
              <ul class="social-icon margin-bottom-30">
                 <li><a href="#" target="_blank" class="facebook"><i class="icon-social-facebook"></i></a></li>
                 <li><a href="#" target="_blank" class="twitter"><i class="icon-social-twitter"></i></a></li>
                 <li><a href="#" target="_blank" class="google-plus"><i class="icon-social-google"></i></a></li>
                 <li><a href="#" target="_blank" class="instagram"><i class="icon-social-instagram"></i></a></li>
                 <li><a href="#" target="_blank" class="dribbble"><i class="icon-social-dribbble"></i></a></li>
               </ul>
          </div>
              
             <div class="col-md-12 uipasta-credit">
                <p>Creado por <a href="http://www.uipasta.com" target="_blank" title="UiPasta">DKN0042</a></p>
                </div>
                
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="icon-arrow-up-circle"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  
  
  </body>
 </html>