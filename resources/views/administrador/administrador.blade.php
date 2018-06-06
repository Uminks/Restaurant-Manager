@extends('layouts.template')


@section('content')

		<h2 class="text-center" id="adminTitle">Administrador</h2>
	
		<div class="contenedorAgregar">
			
			<button id="btnAgregar" class="btn btnAgregar"><i class="fa fa-plus-circle" style="font-size:40px;"></i> </button>

			<div class="ingresoTipo"> <input type="text" class="form-control"  placeholder="Título"> <button class="guardarTipo btn btn-info pull-right" style="margin:10px">Guardar</button> </div>

		</div>

		<h2 class="text-center" id="adminFoot">Gracias por usar nuestros servicios!</h2>
		
@endsection