@extends('layouts.master')

@section('title')
    Exposições
@stop

@section('content')
    
      <section class="portfolio-3-column-section section-padding" id="portfolios">
      <!-- Container Starts -->
      <div class="container">

        <div class="row">          
          <!-- Portfolio Controller/Buttons -->
          <div class="col-md-12">
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".branding">
                Branding 
              </a>
              <a class="filter btn btn-common" data-filter=".marketing">
                Marketing
              </a>
              <a class="filter btn btn-common" data-filter=".planning">
                Planning 
              </a>
              <a class="filter btn btn-common" data-filter=".research">
                Research 
              </a>
            </div>
          </div>
          <!-- Portfolio Controller/Buttons Ends-->

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mix marketing planning">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="/engage/assets/img/portfolio/img1.jpg" alt="" />                  
                </div> 
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="icon-link"></i></a>
                        <a class="right-link" href="#"><i class="icon-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#"><h4>TITLE HERE</h4></a>
                        <p class="sup-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mix branding planning">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="/engage/assets/img/portfolio/img2.jpg" alt="" />                  
                </div> 
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="icon-link"></i></a>
                        <a class="right-link" href="#"><i class="icon-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#"><h4>TITLE HERE</h4></a>
                        <p class="sup-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mix branding research">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="/engage/assets/img/portfolio/img3.jpg" alt="" />                  
                </div> 
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="icon-link"></i></a>
                        <a class="right-link" href="#"><i class="icon-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#"><h4>TITLE HERE</h4></a>
                        <p class="sup-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mix marketing research">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="/engage/assets/img/portfolio/img4.jpg" alt="" />                  
                </div> 
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="icon-link"></i></a>
                        <a class="right-link" href="#"><i class="icon-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#"><h4>TITLE HERE</h4></a>
                        <p class="sup-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mix marketing planning">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="/engage/assets/img/portfolio/img5.jpg" alt="" />                  
                </div> 
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="icon-link"></i></a>
                        <a class="right-link" href="#"><i class="icon-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#"><h4>TITLE HERE</h4></a>
                        <p class="sup-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 mix planning research">
              <div class="portfolio-item">
                <div class="portfolio-img">
                  <img src="/engage/assets/img/portfolio/img6.jpg" alt="" />                  
                </div> 
                <div class="portfoli-content">
                  <div class="sup-desc-wrap">
                    <div class="sup-desc-inner">
                      <div class="sup-link">
                        <a class="left-link" href="#"><i class="icon-link"></i></a>
                        <a class="right-link" href="#"><i class="icon-heart"></i></a>
                      </div>
                      <div class="sup-meta-wrap">
                        <a class="sup-title" href="#"><h4>TITLE HERE</h4></a>
                        <p class="sup-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>
          <!-- End Portfolio Recent Projects -->
          <div class="col-md-12">
            <div class="loadmore-button">
              <a href="#" class="btn btn-common"><i class="fa fa-arrows"></i> Show More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@endsection