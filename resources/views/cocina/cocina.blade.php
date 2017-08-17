@extends('layouts.template')


@section('content')
		
		<h2 class="text-center" id="CocinaTitle">Cocina</h2>

		<div class="container">
			
		
		<table class="table">

			<tr class="alert-danger" id="Titulos_Tabla">
				<th>Orden</th>
				<th>Tipo</th>
				<th>Plato</th>
				<th>Mesa</th>
				<th>Enviar Orden</th>
			</tr>

			@for ($i = 0 ; $i < 10 ; $i++)
				<tr class="table-hover text-center">
					<td>#{{ $i+1 }}</td>
					<td>Seccion</td>
					<td>Lorem Ipsum dolor</td>
					<td>{{rand(1,6)}}</td>
					<td><a href=""><i class="fa fa-check" id="Cocina-Enviar" aria-hidden="true"></a></i></td>
				</tr>
			@endfor

		</table>

		</div>

		<h2 class="text-center" id="CocinaFoot">Gracias por usar nuestros servicios!</h2>
		
@endsection