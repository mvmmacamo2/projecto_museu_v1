@extends('layouts.master')

@section('title')
    História Da Casa Amarela 
@stop

@section('content')
    <!-- Tabs Section Starts -->
    <section class="shortcode-tabs-section  section-padding">
      <div class="default-tab-area clearfix">
        <div class="container">
          <div class="row">
            
            <!-- Default Tab -->
            <div class="col-md-12 col-sm-12 clearfix wow slideInLeft" data-wow-delay="0.3s">
              <div id="default-tab">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"><a class="nav-link active" href="#home" aria-controls="home" role="tab" data-toggle="tab">A CASA AMARELA</a></li>
                <!--   <li class="nav-item"><a class="nav-link" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li> -->
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                    <p class="pull-left" style="margin: 15px 15px 15px 0px;"><img src="/Imagens/Lm-casa-amarela.jpg"></p>
					<p>
						A Casa Amarela, nome por que é normalmente conhecido o edifício onde funciona o Museu da Moeda de Maputo, é um dos mais antigos edifícios da cidade.
					</p>

					<p>
						Construída em 1860, era propriedade de um comerciante indiano, que depois a vendeu ao Governo português. Destinava-se então, 1873, a residência do Governador de Moçambique, mas foi, sucessivamente, Secretaria do Governo, Direcção dos Serviços de Administração Civil, Primeira Esquadra da Polícia e vários outros serviços públicos. 
					</p>
					<p>
						Em 1964, ano em que passou a receber o Museu da Cidade, foi-lhe atribuído o estatuto de monumento nacional, que mantém até hoje. Desde 1981 que nela funciona o Museu Nacional da Moeda, administrado pela Universidade Eduardo Mondlane.
					</p>
					<p>
						Inaugurado a 15 de Junho de 1981 por ocasião da criação do metical, a moeda nacional moçambicana, o Museu Nacional da Moeda possui um acervo que retrata a história da moeda e outros antigos meios de troca, não só do país como da região austral de África. Reúne cerca de 4300 moedas, peças moneteiformes, notas e medalhas, sendo 1000 referentes a Moçambique.
					</p>

                  </div>
                </div>
              </div>
            </div>
            <!-- Default Tab Ends -->

          </div>
        </div>
      </div>


 </section>
    <!-- Tabs Section Starts Ends -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@endsection

















