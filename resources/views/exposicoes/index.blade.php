@extends('layouts.master')

@section('title')
    Exposições
@stop

@section('content')

<!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row">      
          @forelse($exposicoes as $exposicao)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <!-- Blog Item Wrapper Starts-->
            <div class="blog-item-wrapper wow fadeIn" data-wow-delay="0.9s">
              <div class="blog-item-img">
                <a href="#">
                  <img src="/expo-upload/{{ $exposicao->imagem}}" alt="">
                </a>
              </div>
              <div class="blog-item-text">
                <h3 class="small-title"><a href="#">{{ $exposicao->nome}}</a></h3>
                <p>
                   {{ $exposicao->descricao}}
                </p>
                <div class="blog-one-footer">
                  <a href="/usuario_galerias/{{ $exposicao->id }}"><i class="fa fa-eye"></i>Ver Exposição</a>
                  <a href="#"><i class="icon-heart"></i> 59 Likes</a>
                  <a href="#"><i class="icon-bubbles"></i> 120 Comments</a>                  
                </div>
              </div>
            </div><!-- Blog Item Wrapper Ends-->
          </div>
          @empty
          @endforelse
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
    </section>
    <!-- blog Section End -->

@endsection




