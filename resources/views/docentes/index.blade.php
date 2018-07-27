@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white shadow-1">
	    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="{{ route('docentes.index') }}">Docentes</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Estas Aquí</li>
	  </ol>
	</nav>

<div class="card">
	<div class="card-header">
		<h1 class="typography-headline">
			<i class="material-icons mr-1">group</i> Docentes
		</h1>
	</div>
	<div class="card-body">
		@include('partials.alerts')
		@if ($docentes->isNotEmpty())
			<div class="table-responsive">
				<table class="table table-striped datatable">
			        <thead>
			            <tr>
			            	<th>#</th>
			                <th>N° Identificacion</th>
			                <th>Nombres</th>
			                <th>Apellido Paterno</th>
			                <th>Titulo Profesional</th>
			                <th>Opciones</th>

			            </tr>
			        </thead>
			        <tbody>
			            @foreach($docentes as $docente)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $docente->docu_doce }}</td>
								<td>{{ $docente->nomb_doce }}</td>
								<td>{{ "{$docente->pape_doce} {$docente->pape_doce}" }}</td>
								<td>{{ $docente->titu_doce }}</td>
								<td>
								
									<a  href="{{route('docentes.show', $docente->id)}}" ><i class="material-icons">visibility</i></a>
									<a  href="{{route('docentes.edit', $docente->id)}}" ><i class="material-icons">edit</i></a>
								</td>

							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		@else
			@component('partials.alert_empty')
				No hay Docentes registrados.
			@endcomponent
		@endif
	</div>

@endsection
