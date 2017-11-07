<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<!-- Viewport Meta Tag -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
  Museu Da Moeda
</title>
<!-- Bootstrap -->
<!-- bootstrapcdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="/engage/assets/css/bootstrap.min.css">
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

<style type="text/css">
.white{ color: #aef2bc; }
</style>

</head>
<body style="background-color: #fcf9fc";>
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

            <li class="nav-item">
              <a class="nav-link" href="/exposicoes">Exposição <span class="sr-only"></span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/eventos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/servicos/escola">Actividades Com Escolas</a>
                <a class="dropdown-item" href="/servicos/individual">Visitas Guiadas Individual</a>
                <a class="dropdown-item" href="/servicos/patio">Patio para Eventos</a>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registar</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('register') }}">Singular</a>
              <a class="dropdown-item" href="/register_org">Organização</a>
            </div>
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
          <a class="active" href="index.html">Home</a>
        </li>
        <li>
          <a href="#">Pages</a>
          <ul>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="about-us2.html">About Us 2</a></li>
            <li><a href="team-page.html">Team Members</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="service2.html">Services 2</a></li>
            <li><a href="contact1.html">Contact Us</a></li>
            <li><a href="contact1.html">Contact Us 2</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="404.html">404</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Shortcodes</a>
          <ul>
            <li><a href="accordions.html">Accordions</a></li>
            <li><a href="tabs.html">Tabs</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="skills.html">Progress Bars</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>
            <li><a href="clients.html">Clients</a></li>
            <li><a href="icon.html">Icon Boxes</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="carousel.html">Carousel</a></li>
            <li><a href="maps.html">Google Maps</a></li>
            <li><a href="pricing.html">Pricing tables</a></li>
            <li><a href="notification.html">Notification</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Portfolio</a>
          <ul>
            <li><a href="portfolio-col-2.html">Portfolio 2 Columns</a></li>
            <li><a href="portfolio-col-3.html">Portfolio 3 Columns</a></li>
            <li><a href="portfolio-col-4.html">Portfolio 4 Columns</a></li>
            <li><a href="portfolio-item.html">Portfolio Single</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Blog</a>
          <ul>
            <li><a href="sidebar-right.html">Sidebar Right</a></li>
            <li><a href="sidebar-left.html">Sidebar Left</a></li>
            <li><a href="sidebar-full.html">Full Width</a></li>
            <li><a href="blog-single.html">Single Post</a></li>
            <li><a href="blog-grids.html">Blog Grids</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Contact Us</a>
          <ul>
            <li><a href="contact1.html">Contact us 1</a></li>
            <li><a href="contact2.html">Contact us 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- Mobile Menu End -->
    </div>
  </nav>
  <!-- Main Carousel Section -->
  <div id="carousel-area">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="/engage/assets/img/slider/bg-4.jpg" alt="">
          <div class="carousel-caption">
            <h2 class="white">
              Museu Nacional Da Moeda
            </h2>
            <h3>
              ...
            </h3>
                        <!-- <a class="btn btn-lg btn-common" href="#">
                          <i class="fa fa-download">
                          </i>
                          Purchase
                        </a> -->
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="/engage/assets/img/slider/bg-6.jpg" alt="">
                      <div class="carousel-caption">
                        <h2 class="white">
                          Conhecendo A Nossa História
                        </h2>
                        <h3>
                         Precisa 
                       </h3>
                     </div>
                   </div>
                   <div class="carousel-item">
                    <img src="/engage/assets/img/slider/bg-5.jpg" alt="">
                    <div class="carousel-caption">
                      <h2 class="white">
                        Participe de nossas Visitas Guiadas
                      </h2>
                      <h3>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui
                      </h3>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="/engage/assets/img/slider/bg-7.jpg" alt="">
                    <div class="carousel-caption">
                      <h2 class="white">
                        Conheça Nossos Serviços
                      </h2>
                      <h3>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <!-- Header-wrap Section End -->
          <!-- Blog Section -->
          <section id="blog" class="section">
            <!-- Container Starts -->
            <div class="container">
              <h1 class="section-title wow fadeInUpQuick">
                EXPOSIÇÕES RECENTES
              </h1>
              <!-- Row Starts -->
              <div class="row">
                {{-- @forelse($exposicoes as $exposicao) --}}
                @foreach($exposicoes as $exposicao)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <!-- Blog Item Wrapper Starts-->
                  <div class="blog-item-wrapper wow fadeIn" data-wow-delay="0.9s">
                    <div class="blog-item-img">
                      <a href="/usuario_galerias/{{ $exposicao->id }}">
                        <img src="/expo-upload/{{ $exposicao->imagem}}">
                      </a>
                    </div>
                    <div class="blog-item-text">
                      <h3 class="small-title"><a href="#">{{ $exposicao->nome}}</a></h3>
                      <p>
                        {{ $exposicao->descricao}}
                      </p>
                      <div class="blog-one-footer">
                        {{-- <a href="/usuario_galerias/{{ $exposicao->id }}"><i class="fa fa-eye"></i>Ver Exposição</a> --}}
                        @foreach($nrlike as $like)
                        <?php 
                          // use DB;
                        if ($like->exposicao_id=$exposicao->id) {
                          $likesexposicao =count(DB::table('like_exposicaos')->where('exposicao_id', $exposicao->id)->get());
                        }
                        ?>
                        @endforeach
                        @foreach($comentexp as $nrcoment)
                        <?php 
                        if ($nrcoment->exposicao_id=$exposicao->id) {
                          $comentexposicao =count(DB::table('comtario_exposicaos')->where('exposicao_id', $exposicao->id)->get());
                        }
                        ?>
                        @endforeach
                        @empty(auth()->user()->id)
                        <a href="/usuario_galerias/{{ $exposicao->id }}"><i class="fa fa-eye"></i>Ver Exposição</a>
                        <a href=""><i class="icon-heart"></i> {!! $likesexposicao !!} Likes</a> 
                        <a href="/"><i class="icon-bubbles"></i> {!! $comentexposicao !!} Comments</a> 
                        
                        @else
                        <form method="post" action="/" id="like_form">
                          {!! csrf_field() !!}
                          <input type="hidden" name="like" value="1">
                          @empty(auth()->user()->id)
                          <input type="hidden" value="" name="usuario_id">
                          @else 
                          
                          <input type="hidden" value="{!! auth()->user()->id !!}" name="usuario_id">
                          @endif
                          @foreach($exposicoes as $e)                        
                          <input type="hidden" value="{{ $e->id }}" name="exposicao_id">
                          @endforeach
                          <a href="/usuario_galerias/{{ $exposicao->id }}"><i class="fa fa-eye"></i>Ver Exposição</a>
                          <a href="/" onClick="document.getElementById('like_form').submit();"><i class="icon-heart"></i> {!! $likesexposicao !!} Likes</a>
                          <a href="#"><i class="icon-bubbles"></i> {!! $comentexposicao !!} Comments</a>
                        </form>
                        @endempty
                        {{-- <a href="#"><i class="icon-heart"></i> {!! $likesexposicao !!} Likes</a> --}}
                        {{-- <a href="#"><i class="icon-bubbles"></i> {!! $comentexposicao !!} Comments</a> --}}
                      </div>
                    </div>
                  </div><!-- Blog Item Wrapper Ends-->
                </div>
                {{-- @empty --}}
                {{-- @endforelse --}}
                {{-- @endforeach --}}
                @endforeach
              </div><!-- Row Ends -->
            </div><!-- Container Ends -->
          </section>
          <!-- blog Section End -->
          <!-- Other Services Section -->
          <section id="other-services" class="section">
            <div class="container">
              <h1 class="section-title wow fadeInUpQuick">
                Os Serviços Do Museu
              </h1>
              <div class="row">
                <div id="accordion" role="tablist">
                  <div class="card section-subcontent">
                    <div class="card-header" role="tab" id="headingOne">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Actividade Com As Escolas
                        </a>
                      </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card section-subcontent">
                    <div class="card-header" role="tab" id="headingTwo">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Visitas Guiadas
                        </a>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="card section-subcontent">
                    <div class="card-header" role="tab" id="headingThree">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Pátio Para Eventos
                        </a>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                       O Pátio é uma area relacionada com o mundo lunático e que dá extremo valor à tradição. Ao solicitar um evento, você ira garantir que o seu evento se torne um momento único, inolvidavél e de grande qualidade.
                       
                       Este conjunto de profissionais, que se dedica à organização de eventos, põe ao vosso dispor uma série de eventos:
                       Casamentos (conta com decoração personalizada),
                       Gravações Televisivas,
                       Publicidade,
                       Recriações Históricas,
                       Feiras Gastronômicas,
                       Etc.
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- Other Service Item Wrapper Ends -->
         </section>
         <!-- Other Services Section End -->
         <!-- Blog Section -->
         <section id="blog" class="section">
          <!-- Container Starts -->
          <div class="container">
            <h1 class="section-title wow fadeInUpQuick">
              EVENTOS DO MUSEU
            </h1>
            <!-- Row Starts -->
            <div class="row">
              @foreach($eventos as $evento)
              @if($evento->estado=='active')
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper wow fadeIn" data-wow-delay="0.3s">
                  <div class="blog-item-img">
                    <a href="#">
                      <img src="/evento_upload/{{$evento->imagem}}" alt="">
                    </a>
                  </div>
                  <div class="blog-item-text">
                    <h3 class="small-title"><a href="#">{{ $evento->nome}}</a></h3>
                    <p>
                      {{$evento->descricao}}
                    </p>
                    <div class="blog-one-footer">
                      <a href="#">Read More</a>
                      <a href="#"><i class="icon-heart"></i> 59 Likes</a>
                      <a href="#"><i class="icon-bubbles"></i> 120 Comments</a>
                    </div>
                  </div>
                </div><!-- Blog Item Wrapper Ends-->
              </div>
              @else
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                Não há eventos agendados actualmente..!
              </div>
              @endif
              @endforeach
            </div><!-- Row Ends -->
          </div><!-- Container Ends -->
        </section>
        <!-- blog Section End -->
        <!-- Footer Section -->
        <footer>
          <!-- Container Starts -->
          <div class="container">
            <!-- Row Starts -->
            <div class="row section">
              <!-- Footer Widget Starts -->
              <div class="footer-widget col-md-4 col-xs-12 wow fadeIn">
                <h3 class="small-title">
                  CONTACTO
                </h3>
                <p>
                  Museu da Moeda Rua Consiglieri Pedroso Maputo
                  Contacto 84 533 6565
                  De 3ª a 6ª feiras: das 11:00h às 17:00h;
                  Sábado: das 9:00h às 15:00h;
                  Domingo e Feriados: das 14:00h às 17:00h;
                  2ª feira: Encerrada.
                </p>
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
                  Localização
                </h3>
                <div class="plain-flicker-gallery">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14348.154694117433!2d32.56303131580354!3d-25.966771980171107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3433553a713d269!2sMuseu+da+Moeda!5e0!3m2!1spt-PT!2smz!4v1508504507925" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div><!-- Footer Widget Ends -->
              <!-- Footer Widget Starts -->
              <div class="footer-widget col-md-4 col-xs-12 wow fadeIn" data-wow-delay=".8s">
                <h3 class="small-title">
                  SOBRE
                </h3>
                <div class="horizontal-menu">
                  <a href="/historias/museu" class="active">Museu da Moeda</a>
                  <br><br>
                  <a href="/historias/amarela">História da Casa Amarela</a>
                  <br><br>
                  <a href="#">Quem Somos</a>
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
        <i class="fa fa-angle-up">
        </i>
      </a>
      <i class="fa fa-angle-up">
      </i>
    </a>
    <!-- JavaScript & jQuery Plugins -->
    <script src="/engage/assets/js/jquery-min.js"></script>
    <!-- Tether Js -->
    <script src="/engage/assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <!-- Bootstrap JS -->
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
    <script src="/engage/assets/js/owl.carousel.js"></script>
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
    <script src="/engage/assets/js/main.js"></script>
    <script src="/engage/assets/js/main.js"></script>
    <!-- bootstrapcdn alfa -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- bootstrapcdn beta -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
  </html>

