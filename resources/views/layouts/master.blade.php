
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Museu Da Moeda
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/engage/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap-4.0.0-beta/css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="/engage/assets/css/main.css">
    <!-- Slicknav Css -->
    <link rel="stylesheet" type="text/css" href="/engage/assets/css/slicknav.css">
    <!-- Color Switcher -->
    <link rel="stylesheet" type="text/css" href="/engage/assets/css/color-switcher.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="/engage/assets/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="/engage/assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="/engage/assets/fonts/simple-line-icons.css">    
     
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="/engage/assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/engage/assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="/engage/assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="/engage/assets/extras/normalize.css">
    <link rel="stylesheet" type="text/css" href="/engage/assets/extras/settings.css">



    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="/engage/assets/css/colors/green.css" media="screen" />       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  </head>
  <body>

    <!-- Header area wrapper starts -->
    <header id="header-wrap">      
      <!-- Navbar Starts -->
      <nav class="navbar navbar-expand-md">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="/">
              <img src="/engage/assets/img/uem-logo-40x40.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>           
          </div>
          <div class="collapse navbar-collapse" id="main-menu">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">

              <li class="nav-item active">
                <a class="nav-link active" href="/">Inicio <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">História</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/historias/museu">Museu</a>
                  <a class="dropdown-item" href="/historias/amarela">Casa Amarela</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/exposicoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exposição</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/eventos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="contact1.html">Serviço 1</a>
                  <a class="dropdown-item" href="contact1.html">Serviço 2</a>
                  <a class="dropdown-item" href="contact1.html">Serviço 3</a>
                  <a class="dropdown-item" href="contact1.html">Serviço 4</a>
                </div>
              </li>

              
              @if (Route::has('login'))
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="{{ route('logout') }}"" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">olá {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                      <a href="{{ route('home') }}">
                          Home
                      </a>

                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </div>
                  </li>
                  @else
                    <li class="nav-item active">
                      <a class="dropdown-item active" href="{{ route('login') }}"><b>Login</b></a>
                    </li>

                    <li class="nav-item active">
                      <a class="dropdown-item" href="{{ route('register') }}"><b>Registar</b></a>
                    </li>
                @endauth
              @endif
            </ul>
            
            <form class="form-inline">
              <div class="top_search_con">
                <input class=" mr-sm-2" type="text" placeholder="Search Here ...">
                <span class="top_search_icon"><i class="icon-magnifier"></i></span>
              </div>            
            </form>
          </div>



          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
              <a class="active" href="/">Inicio</a>    
            </li>
            <li>
              <a href="#">História</a>
              <ul>
                <li><a class="dropdown-item" href="/historias/museu">Museu</a></li>
                <li><a class="dropdown-item" href="/historias/amarela">Casa Amarela</a></li>
              </ul>                      
            </li>
            <li>
              <a href="/exposicoes">Exposição</a>                       
            </li>
            <li>
              <a href="/eventos">Eventos</a>                      
            </li>  
            <li>
              <a href="/contactos">Contacto</a>                      
            </li> 

            @if (Route::has('login'))
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="{{ route('logout') }}"" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">olá {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                      <a href="{{ route('home') }}">
                          Home
                      </a>

                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </div>
                  </li>
                  @else
                    <li class="nav-item active">
                      <a class="dropdown-item active" href="{{ route('login') }}"><b>Login</b></a>
                    </li>

                    <li class="nav-item active">
                      <a class="dropdown-item" href="{{ route('register') }}"><b>Registar</b></a>
                    </li>
                @endauth
              @endif
          </ul>
          <!-- Mobile Menu End -->
        </div>
      </nav>

    </header>
    <!-- Header-wrap Section End -->


    <!-- Page Header -->
    <div class="page-header-section">
      <div class="container">
        <div class="row">
          <div class="page-header-area">
            <div class="page-header-content">
              <h2 class="section-title wow fadeInDown" data-wow-delay=".5s">
                @yield('title')
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->


        @yield('content')

    
    <!-- Footer Section -->
    <footer>
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-4 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              Sobre Nós
            </h3>
            <p>
              Etiam ornare condimentum massa et scelerisque. Mauris nibh ipsum, laoreet at venenatis ac, rutrum sed risus, 
            </p> 
            <p>Aliquam magna nibh, mattis a urna nec. Semper venenatis magna.</p>
            <div class="social-footer">
              <a href="#"><i class="fa fa-facebook icon-round"></i></a>
              <a href="#"><i class="fa fa-twitter icon-round"></i></a>
              <a href="#"><i class="fa fa-linkedin icon-round"></i></a>
              <a href="#"><i class="fa fa-google-plus icon-round"></i></a>
            </div>           
          </div><!-- Footer Widget Ends -->
          
          

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-4 col-xs-12 wow fadeIn" data-wow-delay=".5s">
            <h3 class="small-title">
              Nossa Localização
            </h3>
            <div class="plain-flicker-gallery">
            <!--   <a href="#" title="Pan Masala"><img src="/engage/assets/img/flicker/img1.jpg" alt=""></a>
              <a href="#" title="Sports Template for Joomla"><img src="/engage/assets/img/flicker/img2.jpg" alt=""></a> -->
              Mapa
              <!-- <a href="" title="Apple Keyboard"><img src="/engage/assets/img/flicker/img3.jpg" alt=""></a>
              <a href="" title="Hard Working"><img src="/engage/assets/img/flicker/img4.jpg" alt=""></a>
              <a href="" title="Smile"><img src="/engage/assets/img/flicker/img5.jpg" alt=""></a>
              <a href="" title="Puzzle"><img src="/engage/assets/img/flicker/img6.jpg" alt=""></a> -->
            </div>
          </div><!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-4 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
              Mensagem
            </h3>
            <div class="contact-us">
              <p>Tellus aliquam at. Pellentesque gravida vel eros et pretium</p>
              <form>
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
              </div>
              <button type="submit" class="btn btn-common">Submit</button>
            </form>
            </div>
          </div><!-- Footer Widget Ends -->
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
      
      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <p class="copyright-text">
                ©  2017. Todos Direitos Reservados. Developers <a href="#">MacHuMac</a>
              </p>
            </div>
            <div class="col-md-6  col-sm-6">
              <ul class="nav nav-inline  justify-content-end ">
                <li class="nav-item">
                  <a class="nav-link active" href="/">Início -</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Sitemap -</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Políticas De Privacidade -</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Termos de Serviço</a>
                </li>
              </ul>        
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright  End-->
      
    </footer>
    <!-- Footer Section End-->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up">
      </i>
    </a> 

    <!-- JavaScript & jQuery Plugins -->
    <script src="/engage/assets/js/jquery-min.js"></script>
    <!-- Tether Js -->
    <script src="/engage/assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->    
    <script src="/engage/assets/js/bootstrap.min.js"></script>
    <!-- Color Switcher Js -->
    <!-- <script src="/engage/assets/js/color-switcher.js"></script> -->
    <!--Text Rotator-->
    <script src="/engage/assets/js/jquery.mixitup.js"></script>
    <!--WOW Scroll Spy-->
    <script src="/engage/assets/js/wow.js"></script>
    <!-- OWL Carousel -->
    <script src="/engage/assets/js/owl.carousel.js"></script> 
    <!-- WayPoint -->
    <script src="/engage/assets/js/waypoints.min.js"></script>
    <!-- CounterUp -->
    <script src="/engage/assets/js/jquery.counterup.min.js"></script>
    <!-- Slicknav -->
    <script src="/engage/assets/js/jquery.counterup.min.js"></script>
    <!-- ScrollTop -->
    <script src="/engage/assets/js/jquery.slicknav.js"></script>
    <!-- Appear -->
    <script src="/engage/assets/js/jquery.appear.js"></script>
    <!-- Vide js -->
    <script src="/engage/assets/js/jquery.vide.js"></script>
     <!-- All JS plugin Triggers -->
    <script src="/engage/assets/js/main.js"></script> 


    <script src="bootstrap-4.0.0-beta/js/jquery.min.js"></script>
  </body>
</html>