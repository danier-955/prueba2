@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white shadow-1">
	    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="{{ route('planeamientos.index') }}">Planeaciones</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Estas Aquí</li>
	  </ol>
	</nav>

<div class="card">
	<div class="card-header">
  		<h1 class="typography-headline">
  			<i class="material-icons mr-1">local_library</i> lista de Planeaciónes
  		</h1>
  	</div>
	@include('partials.alerts')
	@if ($planeamientos->isNotEmpty())
		<div class="table-responsive">
			<table class="table table-striped datatable">
		        <thead>
		            <tr>
		            	<th>#</th>
		                <th>Titulo de Planeacion</th>
		                <th>Fecha</th>
		                <th>Documento</th>
		                <th>Responsable</th>
		                <th>Descripcion</th>
		                <th>Opciones</th>

		            </tr>
		        </thead>	
	        	<tbody>
	           		 @foreach($planeamientos as $planeamiento)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $planeamiento->titu_plan }}</td>
							<td>{{ optional($planeamiento->fech_plan)->format('d/m/Y')}} </td>
							<td><a href="{{ Storage::url($planeamiento->docu_plan)}}" download>Descargar</a></td>
							<td>{{ $planeamiento->getDocente() }}</td>
							<td>{{ $planeamiento->desc_plan}}</td>
							<td>
								<a  href="{{route('planeamientos.edit', $planeamiento->id)}}""><i class="material-icons">edit</i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@else
		@component('partials.empty')
			No hay registros de planeamientos.
		@endcomponent
	@endif
</div>
@endsection