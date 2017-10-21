
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
            <a class="navbar-brand" href="index.html">
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
              <img src="/engage/assets/img/slider/bg-1.jpg" alt="">
              <div class="carousel-caption">
                <h2>
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
              <img src="/engage/assets/img/slider/bg-2.jpg" alt="">
              <div class="carousel-caption">
                <h2>
                  Conhecendo A Nossa História
                </h2>
                <h3>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                </h3>
                <a class="btn btn-common btn-lg " href="#service-block-main">
                  <i class="fa fa-coffee">
                  </i>
                  Mais
                </a>
              </div>
            </div>

            <div class="carousel-item">
              <img src="/engage/assets/img/slider/bg-3.jpg" alt="">
              <div class="carousel-caption">
                <h2>
                  Participe de nossas Visitas Guiadas
                </h2>
                <h3>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                </h3>
              </div>
            </div>

            <div class="carousel-item">
              <img src="/engage/assets/img/slider/bg-3.jpg" alt="">
              <div class="carousel-caption">
                <h2>
                  Conheça Nossos Serviços
                </h2>
                <h3>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                </h3>
              </div>
          </div>

          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>     
    </header>
    <!-- Header-wrap Section End -->
   
    <!-- Service Block-1 Section -->
    <section id="service-block-main" class="section">
      <!-- Container Starts -->
      <div class="container">
        <h1 class="section-title wow fadeIn animated" data-wow-delay=".2s">
        VISITE O MUSEU
        </h1>
        <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
        <div class="row">  
          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item wow fadeInUpQuick animated" data-wow-delay=".5s">
              <div class="icon-wrapper">
                <i class="icon-layers pulse-shrink">
                </i>
              </div>
              <h2>
                40+ Pages
              </h2>
              <p>
                Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item wow fadeInUpQuick animated" data-wow-delay=".8s">
              <div class="icon-wrapper">
                <i class="icon-settings pulse-shrink">
                </i>
              </div>
              <h2>
                Bootstrap4 and HTML5
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat Quidem!
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item wow fadeInUpQuick animated" data-wow-delay="1.1s">
              <div class="icon-wrapper">
                <i class="icon-energy pulse-shrink">
                </i>
              </div>
              <h2>
                Refreshing Design
              </h2>
              <p>
                Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
              </p>
            </div>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Service-Block-1 Item Starts -->
            <div class="service-item  wow fadeInUpQuick animated" data-wow-delay="1.4s">
              <div class="icon-wrapper">
                <i class="icon-cup pulse-shrink">
                </i>
              </div>
              <h2>
                Crafted Carefully
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat Quidem!
              </p>
            </div>
          </div><!-- Service-Block-1 Item Ends -->
        </div>
      </div><!-- Container Ends -->
    </section><!-- Service Main Section Ends -->

    <!-- Other Services Section -->
    <section id="other-services" class="section">
      <div class="container">
        <h1 class="section-title wow fadeInUpQuick">
          Os Serviços Do Museu
        </h1>
        <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
        <div class="row">          
          <!-- Other Service Item Wrapper Starts -->
          <div class="col-sm-6 col-md-6">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home"><i class="icon-screen-desktop"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"><i class="icon-settings"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"><i class="icon-heart"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings"><i class="icon-layers"></i></a>
            </li>
          </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">
                <div class="service-content wow fadeInUpQuick">
                  <h3>Responsive Design</h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>            
              <div class="tab-pane" id="profile" role="tabpanel">
                <div class="service-content">
                  <h3>Very useful custom widget </h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>
              <div class="tab-pane" id="messages" role="tabpanel">
                <div class="service-content">
                  <h3>Graphic Design</h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>
              <div class="tab-pane" id="settings" role="tabpanel">
                <div class="service-content">
                  <h3>Parallax Background</h3>
                  <p class="lead">At vero eos et accusamus et <a href="#">iusto</a> odio digniss- <br> imos <b>ducimus</b> qui blanditiis praesentium voluptatum deleniti</p>
                  <p>quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Other Service Item Wrapper Ends -->

          <!-- Porgress Strts -->
          <div class="col-sm-6 com-md-6">            
            <div class="skill-shortcode">
              <div class="skill">
                <p>
                  Web Design 91%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="91">
                    <span class="sr-only">
                    91% Complete
                    </span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>
                  HTML/CSS 86%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="86">
                    <span class="sr-only">
                    86% Complete
                    </span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>
                  Graphic Design 78%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="78">
                    <span class="sr-only">
                    60% Complete
                    </span>
                  </div>
                </div>
              </div>
              <div class="skill">
                <p>
                  WordPress 65%
                </p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar"  data-percentage="65">
                    <span class="sr-only">
                    60% Complete
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Other Service Image Ends-->
        </div>
      </div><!-- Container Ends -->
    </section>
    <!-- Other Services Section End -->      
   
    

    
    <!-- Featured Section Ends -->
      
    <!-- Pricing Table Section -->
    <!-- <section id="pricing" class="section">
      <div class="container">
        <h1 class="section-title wow fadeInUpQuick" data-wow-delay=".2s">
          OUR PRICING
        </h1>
        <p class="section-subcontent wow fadeInUpQuick" data-wow-delay=".3s">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
        <div class="row">         
          <div class="col-md-4 wow fadeInUpQuick" data-wow-delay=".5s">
            <div class="pricing-table pricing-table-x">
              <div class="table-header">
                <h3>
                  Single Website
                </h3>
              </div>
              <div class="plan">
                <h3 class="price">
                  $49
                </h3>
              </div>
              <div class="plan-info">
                <p>
                 <i class="fa fa-check"></i>
                 1 domains
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  1 developer
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  Minified source code
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  Free updates forever
                </p>
                <div class="button-area">
                  <a href="#" class="btn btn-common">
                    Get Started
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 wow fadeInUpQuick" data-wow-delay="1s">
            <div class="pricing-table pricing-table-x">
              <div class="table-header highlight">
                <h3>
                  Developer
                </h3>
              </div>
              <div class="plan">
                <h3 class="price">
                  $79
                </h3>
              </div>
              <div class="plan-info">
                <p>
                 <i class="fa fa-check"></i>
                 Unlimited domains
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  1 developer
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  Unlimited source code
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  Free updates forever
                </p>
                <div class="button-area">
                  <a href="#" class="btn btn-common">
                    Buy Now
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 wow fadeInUpQuick" data-wow-delay="1.5s">
            <div class="pricing-table pricing-table-x">
              <div class="table-header">
                <h3>
                  Business
                </h3>
              </div>
              <div class="plan">
                <h3 class="price">
                  $159
                </h3>
              </div>
              <div class="plan-info">
                <p>
                  <i class="fa fa-check"></i>
                  Unlimited domains
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  Unlimited developer
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  Unlimited source code
                </p>
                <p>
                  <i class="fa fa-check"></i>
                  Free updates forever
                </p>
                <div class="button-area">
                  <a href="#" class="btn btn-common">
                    Buy Now
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section> -->
    <!-- Pricing Table  End -->    

    
    
    
    <!-- Testimonial Section End -->                

    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">  
        <h1 class="section-title wow fadeInUpQuick">
          EVENTOS DO MUSEU
        </h1>
        <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>     
        <!-- Row Starts -->
        <div class="row">          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeIn" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="#">
                  <img src="/engage/assets/img/blog/home-items/img1.jpg" alt="">
                </a>   
              </div>
              <div class="blog-item-text">
                <h3 class="small-title"><a href="#">Amazing Blog Post One</a></h3>
                <p>
                  Lorem ipsum dolor sit amet, adipisicing elit. Eos rerum dolorum, est voluptatem modi accusantium perspiciatis ...
                </p>
                <div class="blog-one-footer">
                  <a href="#">Read More</a>
                  <a href="#"><i class="icon-heart"></i> 59 Likes</a>
                  <a href="#"><i class="icon-bubbles"></i> 120 Comments</a>                  
                </div>
              </div>
            </div><!-- Blog Item Wrapper Ends-->
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!-- Blog Item Wrapper Start-->
            <div class="blog-item-wrapper wow fadeIn" data-wow-delay="0.6s">
              <div class="blog-item-img">
                <a href="#">
                  <img src="/engage/assets/img/blog/home-items/img2.jpg" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <h3 class="small-title"><a href="#">Amazing Blog Post One</a></h3>
                <p>
                   Lorem ipsum dolor sit amet, adipisicing elit. Eos rerum dolorum, est voluptatem modi accusantium perspiciatis ...
                </p>
                
                <div class="blog-one-footer">
                  <a href="#">Read More</a>
                  <a href="#"><i class="icon-heart"></i> 59 Likes</a>
                  <a href="#"><i class="icon-bubbles"></i> 120 Comments</a>                  
                </div>
              </div>
            </div><!-- Blog Item Wrapper Ends-->
          </div>          
          
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!-- Blog Item Wrapper Starts-->
            <div class="blog-item-wrapper wow fadeIn" data-wow-delay="0.9s">
              <div class="blog-item-img">
                <a href="#">
                  <img src="/engage/assets/img/blog/home-items/img3.jpg" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <h3 class="small-title"><a href="#">Amazing Blog Post One</a></h3>
                <p>
                   Lorem ipsum dolor sit amet, adipisicing elit. Eos rerum dolorum, est voluptatem modi accusantium perspiciatis ...
                </p>
                <div class="blog-one-footer">
                  <a href="#">Read More</a>
                  <a href="#"><i class="icon-heart"></i> 59 Likes</a>
                  <a href="#"><i class="icon-bubbles"></i> 120 Comments</a>                  
                </div>
              </div>
            </div><!-- Blog Item Wrapper Ends-->
          </div>
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
    </section>
    <!-- blog Section End -->

    <!-- Clients Section -->
    <section id="clients" class="section">
      <!-- Container Ends -->
      <div class="container">
        <h1 class="section-title wow fadeInUpQuick" data-wow-delay=".5s">
          CLIENTS
        </h1>
        <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>
        <div class="wow fadeInUpQuick" data-wow-delay=".9s">
          <!-- Row and Scroller Wrapper Starts -->
          <div class="row" id="clients-scroller">
            <div class="client-item-wrapper">
              <img src="/engage/assets/img/clients/img1.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="/engage/assets/img/clients/img2.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="/engage/assets/img/clients/img3.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="/engage/assets/img/clients/img4.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="/engage/assets/img/clients/img5.png" alt="">
            </div>
            <div class="client-item-wrapper">
              <img src="/engage/assets/img/clients/img6.png" alt="">
            </div>
          </div><!-- Row and Scroller Wrapper Starts -->
        </div>
      </div><!-- Container Ends -->
    </section>
    <!-- Client Section End -->        
    
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
            <!-- <div class="plain-flicker-gallery">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14348.154694117433!2d32.56303131580354!3d-25.966771980171107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3433553a713d269!2sMuseu+da+Moeda!5e0!3m2!1spt-PT!2smz!4v1508504507925" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div> -->
          </div><!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-md-4 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
             SOBRE
            </h3>
            <div class="horizontal-menu">
              <a href="/historias/museu" class="active">Museu da Moeda</a> 
               <br><br>
              <a href="#">História da Casa Amarela</a>
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


 <script src="/bootstrap-4.0.0-beta/js/jquery-3.2.1.js"></script>

  </body>
</html>