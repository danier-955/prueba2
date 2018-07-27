@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white shadow-1">
	    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="{{ route('practicantes.index') }}">Practicantes</a></li>
	     <li class="breadcrumb-item"><a href="{{ route('practicantes.index') }}">ver</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Estas Aquí</li>
	  </ol>
	</nav>
	
	<div class="card-body">
		<blockquote class="blockquote my-3">
		  <p class="mb-0 typography-subheading">Información del Practicante</p>
		  <hr class="w-100">
		</blockquote>

		<div class="table-responsive">
			<table cellspacing="0" cellpadding="0" class="table table-striped mb-0">
				<tbody>
					<tr>
						<th>
							<span class="font-weight-bold">Tipo de Documento</span>
						</th>
						<td>{{ $practicante->tipo_docu }}</td>
						<th>
							<span class="font-weight-bold">No. Identificación</span>
						</th>
						<td>{{ $practicante->docu_prac }}</td>
						<th>
							<span class="font-weight-bold">Nombres</span>
						</th>
						<td>{{ $practicante->nomb_prac }}</td>
						<th>
							<span class="font-weight-bold">Apellidos</span>
						</th>
						<td>{{ "{$practicante->pape_prac} {$practicante->sape_prac}" }}</td>
					</tr>
					<tr>
						<th>
							<span class="font-weight-bold">Sexo</span>
						</th>
						<td>{{ $practicante->getSexo() }}</td>

						<th>
							<span class="font-weight-bold">Dirección de residencia</span>
						</th>
						<td>{{ $practicante->dire_prac }}</td>
						<th>
							<span class="font-weight-bold">Barrio de residencia</span>
						</th>
						<td>{{ $practicante->barr_prac }}</td>
					</tr>
					<tr>
						<th>
							<span class="font-weight-bold">Correo electrónico</span>
						</th>
						<td>{{ $practicante->corr_prac }}</td>
						<th>
							<span class="font-weight-bold">Teléfono</span>
						</th>
						<td>{{ $practicante->tele_prac }}</td>
						<th>
							<span class="font-weight-bold">Nombre del Padre</span>
						</th>
						<td>{{ $practicante->padr_prac }}</td>
						<th>
							<span class="font-weight-bold">Nombre de la Madre</span>
						</th>
						<td colspan="5">{{ $practicante->madr_prac }}</td>
					</tr>
					



					<tr>
						<th>
							<span class="font-weight-bold">Nombre del Instituto</span>
						</th>
						<td >{{($practicante->cole_prov)}}</td>
						
						<th>
							<span class="font-weight-bold">semestre cursado</span>
						</th>
						<td >{{($practicante->seme_curs)}}</td>
						
						<th>
							<span class="font-weight-bold">Horas a Pagar</span>
						</th>
						<td>{{($practicante->hora_paga) }}</td>
						<th>
							<span class="font-weight-bold">Fecha de Inicio</span>
						</th>
						<td>{{($practicante->inic_prac)}}</td>
					</tr>
					

					<tr>
						<th>
							<span class="font-weight-bold">Fecha Final</span>
						</th>
						<td >{!! nl2br($practicante->fina_prac) !!}</td>

						<th>
							<span class="font-weight-bold">Fecha Final</span>
						</th>
						<td >{{($practicante->fina_prac) }}</td>
						<th>
							<span class="font-weight-bold">Grado Asignado</span>
						</th>
						<td >{{ $practicante->getGrado() }}</td>
					</tr>
					
					<tr>
						<th>
							<span class="font-weight-bold">Observaciones</span>
						</th>
						<td colspan="5">{!! nl2br($practicante->obse_prac) !!}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

@endsection