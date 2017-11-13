@extends('layouts.master')

@section('title')
Exposição
@stop

@section('content')

<!-- Blog Section -->
<section id="blog" class="section">
  <!-- Container Starts -->
  <div class="container">
    <!-- Row Starts -->
    <div class="row">      
      @forelse($galerias as $galeria)
      <div>
        <a class="example-image-link" href="/galeria-upload/{{$galeria->imagem}}" data-lightbox="roadtrip" data-title="Click the right half of the image to move forward.">
          <img id="myImg" src="/galeria-upload/{{$galeria->imagem}}" alt="Trolltunga, Norway" width="200" height="150" style="margin: 10px;">
        </a>
      </div>
      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
      </div>
      @empty
      @endforelse
    </div><!-- Row Ends -->
  </div><!-- Container Ends -->
</section>
<!-- blog Section End -->

@endsection




