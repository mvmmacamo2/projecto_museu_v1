@extends('layouts.master')




@section('title')
    Requisitando Visita Guiada Escolar
@stop
@section('content')

<<<<<<< HEAD
<!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row">      
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                
            </div>
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
    </section>
    <!-- blog Section End -->
=======
    <form method="post" action="">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="data">Data Realizacao do Evento</label>
                <input type="date" class="form-control" id="data" placeholder="" name="data">
            </div>
            <div class="form-group col-md-6">
                <label for="hora">Hora Da Visita</label>
                <input type="text" class="form-control" id="hora" placeholder="exemplo: 10h" name="hora">
            </div>
        </div>
>>>>>>> 87705c2123e7789b7b74053cfab2011262e2ad7d

        <div class="form-group">
            <label for="inputAddress">Descricao da Visita</label>

            <textarea class="form-control" cols="10" rows="5" placeholder="Coloque o motivo da Visita" name="descricao">

            </textarea>

        </div>


        <button type="submit" class="btn btn-success">Submeter</button>
    </form>


@stop
<br>