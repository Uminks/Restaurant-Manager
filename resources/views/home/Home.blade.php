@extends('layouts.template')

@section('content')
		
	<h2 class="text-center" id="Carta">Carta</h2>

   	<div id="appHome"></div>


	<div class="flotante">
		<a style="font-family:Montserrat" href="#verOrden" data-toggle="modal"><button  id="tam" type="button" class="btn btn-warning"><span class="fas fa-utensils"></span> Ver Orden</button></a>
	</div>
     
    

	<div class="row buen">
		<p class="text-center text-info" id="Buen">Buen Provecho!</p>
		@include('home.secciones.cartaEmergente')
    	@include('home.secciones.orden')
	</div>
	
@endsection


@section('emergente')
		@include('home.secciones.cartaEmergente')
    	@include('home.secciones.orden')
@endsection