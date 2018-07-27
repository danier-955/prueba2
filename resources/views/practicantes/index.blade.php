@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white shadow-1">
	    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="{{ route('practicantes.index') }}">Practicantes</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Estas Aquí</li>
	  </ol>
	</nav>

<div class="card">
	
	<div class="card-header d-flex align-items-center justify-content-between">
		<h1 class="typography-headline">
			<i class="material-icons mr-1">group</i> Practicantes
		</h1>
	</div>
	<div class="card-body">
		@include('partials.alert_full')
		@if ($practicantes->isNotEmpty())
			<div class="table-responsive">
				<table class="table table-striped datatable">
			        <thead>
			            <tr>
			            	<th>#</th>
			                <th>N° Identificacion</th>
			                <th>Nombres</th>
			                <th>Apellidos</th>
			                <th>Nombre de la institucion</th>
			                <th>Opciones</th>
			            </tr>
			        </thead>
			        <tbody>
			           @foreach($practicantes as $practicante)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $practicante->docu_prac }}</td>
							<td>{{ $practicante->nomb_prac }}</td>
							<td>{{ "{$practicante->pape_prac} {$practicante->pape_prac}" }}</td>
							<td>{{ $practicante->cole_prov }}</td>
							<td>
								<a  href="{{route('practicantes.show', $practicante->id)}}" ><i class="material-icons">visibility</i></a>
								<a  href="{{route('practicantes.edit', $practicante->id)}}" ><i class="material-icons">edit</i></a>
							</td>

						</tr>
						@endforeach
					</tbody>
		        </table>
		@else
			@component('partials.alert_empty')
				No hay practicantes registrados.
			@endcomponent
		@endif
	</div>
</div>

@endsection
