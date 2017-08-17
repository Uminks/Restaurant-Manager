@extends('layouts.template')

@section('content')
		
	<h2 class="text-center" id="Carta">Carta</h2>

   	<div id="inicio" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   	  <ul>
   		@for ($i = 0; $i < 8; $i++)
				<li id="Titulo" style="list-style:none">	
						<img src="http://lorempixel.com/800/400/food?{{random_int(1,50)}}">
						<a href="#cartaTitulo" data-toggle="modal"><p>TITULO</p></a>
				</li>
		@endfor
	  </ul>
	</div>


	<div class="flotante">
		<a style="font-family:Montserrat" href="#verOrden" data-toggle="modal"><button  id="tam" type="button" class="btn btn-warning"><span class="fa fa-cutlery"></span> Ver Orden</button></a>
	</div>
     
    

	<div class="row buen">
		<p class="text-center text-info" id="Buen">Buen Provecho!</p>
		@include('layouts.secciones.cartaEmergente')
    	@include('layouts.secciones.orden')
	</div>
	
@endsection


@section('emergente')
		@include('layouts.secciones.cartaEmergente')
    	@include('layouts.secciones.orden')
@endsection