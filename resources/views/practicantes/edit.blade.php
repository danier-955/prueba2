@extends('layouts.app')
@section('title', 'Editar Practicante')

@section('content')

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white shadow-1">
	    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="{{ route('practicantes.index') }}">Practicantes</a></li>
	     <li class="breadcrumb-item"><a href="{{ route('practicantes.edit', $practicante->id) }}">Editar</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Estas Aquí</li>
	  </ol>
	</nav>

	<div class="card-body">
		@include('partials.alert_full')
		<form method="post" action="{{route('practicantes.update', $practicante->id)}}" autocomplete="off">
			{{ csrf_field() }}
			{{ method_field('PUT') }}


			<div class="form-row">
				
				<div class="form-group col-md-3">
				    <label>Tipo DE Documento</label>
				    <select name="tipo_docu" class="form-control {{ $errors->has('tipo_docu') ? 'is-invalid' : '' }}" required autofocus>
				    	@empty(old('tipo_docu'))
		                    <option value="{{ $practicante->tipo_docu }}" selected>
		                    	{{ $practicante->tipo_docu }}
		                    </option>
		                @endempty
		                @foreach(Documento::tipos() as $tipo)
				      		<option value="{{ $tipo }}"
				      		@if (old('tipo_doce') === $tipo){{ 'selected' }}@endif>
				      			{{ $tipo }}
				      		</option>
				      	@endforeach
				    	
				    </select>
	                @if ($errors->has('tipo_docu'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('tipo_docu') }}
	                    </div>
	               	@endif
		 		</div>

			  	<div class="form-group col-md-3">
			    	<label>No. Identificación</label>
			   		 <input type="number" name="docu_prac" class="form-control {{ $errors->has('docu_prac') ? 'is-invalid' : '' }}" value="{{ old('docu_prac', $practicante->docu_prac) }}" required autofocus>
	                @if ($errors->has('docu_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('docu_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Nombre</label>
			   		 <input type="text" name="nomb_prac" class="form-control {{ $errors->has('nomb_prac') ? 'is-invalid' : '' }}" value="{{ old('nomb_prac', $practicante->nomb_prac) }}" required autofocus>
	                @if ($errors->has('nomb_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('nomb_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Primer Apellido</label>
			   		 <input type="text" name="pape_prac" class="form-control {{ $errors->has('pape_prac') ? 'is-invalid' : '' }}" value="{{ old('pape_prac', $practicante->pape_prac) }}" required autofocus>
	                @if ($errors->has('pape_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('pape_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Segundo Apellido</label>
			   		 <input type="text" name="sape_prac" class="form-control {{ $errors->has('sape_prac') ? 'is-invalid' : '' }}" value="{{ old('sape_prac', $practicante->sape_prac) }}" required autofocus>
	                @if ($errors->has('sape_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('sape_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
				    <label>Sexo</label>
				    <select name="sexo_prac" class="form-control {{ $errors->has('sexo_prac') ? 'is-invalid' : '' }}" required autofocus>
				    	@empty(old('sexo_prac'))
		                    <option value="{{ $practicante->sexo_prac }}" selected>
		                    	{{ $practicante->getSexo() }}
		                    </option>
		                @endempty
				    	@foreach(Sexo::asociativos() as $sexo)
				      		<option value="{{ $sexo['id'] }}"
				      		@if (old('sexo_prac') === $sexo['id']){{ 'selected' }}@endif>
				      			{{ $sexo['texto'] }}
				      		</option>
				      	@endforeach
				    </select>
	                @if ($errors->has('sexo_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('sexo_prac') }}
	                    </div>
	               	@endif
		 		</div>

		 		<div class="form-group col-md-3">
			    	<label>Direcion</label>
			   		 <input type="text" name="dire_prac" class="form-control {{ $errors->has('dire_prac') ? 'is-invalid' : '' }}" value="{{ old('dire_prac', $practicante->dire_prac) }}" required autofocus>
	                @if ($errors->has('dire_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('dire_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Barrio</label>
			   		 <input type="text" name="barr_prac" class="form-control {{ $errors->has('barr_prac') ? 'is-invalid' : '' }}" value="{{ old('barr_prac', $practicante->barr_prac) }}" required autofocus>
	                @if ($errors->has('barr_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('barr_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Correo</label>
			   		 <input type="text" name="corr_prac" class="form-control {{ $errors->has('corr_prac') ? 'is-invalid' : '' }}" value="{{ old('corr_prac', $practicante->corr_prac) }}" required autofocus>
	                @if ($errors->has('corr_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('corr_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Telefono</label>
			   		 <input type="number" name="tele_prac" class="form-control {{ $errors->has('tele_prac') ? 'is-invalid' : '' }}" value="{{ old('tele_prac', $practicante->tele_prac) }}" required autofocus>
	                @if ($errors->has('tele_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('tele_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Nombre del Padre</label>
			   		 <input type="text" name="padr_prac" class="form-control {{ $errors->has('padr_prac') ? 'is-invalid' : '' }}" value="{{ old('padr_prac', $practicante->padr_prac) }}" required autofocus>
	                @if ($errors->has('padr_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('padr_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Nombre del Madre</label>
			   		 <input type="text" name="madr_prac" class="form-control {{ $errors->has('madr_prac') ? 'is-invalid' : '' }}" value="{{ old('madr_prac', $practicante->madr_prac) }}" required autofocus>
	                @if ($errors->has('madr_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('madr_prac') }}
	                    </div>
	               	@endif
			  	</div>
				
				<div class="form-group col-md-3">
			    	<label>Instituto</label>
			   		 <input type="text" name="cole_prov" class="form-control {{ $errors->has('cole_prov') ? 'is-invalid' : '' }}" value="{{ old('cole_prov', $practicante->cole_prov) }}" required autofocus>
	                @if ($errors->has('cole_prov'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('cole_prov') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Semestre cursado</label>
			   		 <input type="text" name="seme_curs" class="form-control {{ $errors->has('seme_curs') ? 'is-invalid' : '' }}" value="{{ old('seme_curs', $practicante->seme_curs) }}" required autofocus>
	                @if ($errors->has('seme_curs'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('seme_curs') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-3">
			    	<label>Horas A Pagar</label>
			   		 <input type="number" name="hora_paga" class="form-control {{ $errors->has('hora_paga') ? 'is-invalid' : '' }}" value="{{ old('hora_paga', $practicante->hora_paga) }}" required autofocus>
	                @if ($errors->has('hora_paga'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('hora_paga') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-2">
			    	<label>Fecha de ingreso</label>
			    	<input type="text" name="inic_prac" class="datepicker form-control {{ $errors->has('inic_prac') ? 'is-invalid' : '' }}" value="{{ old('inic_prac', optional($practicante->inic_prac)->format('Y-m-d')) }}" required autofocus>
	                @if ($errors->has('inic_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('inic_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-2">
			    	<label>Fecha de ingreso</label>
			    	<input type="text" name="fina_prac" class="datepicker form-control {{ $errors->has('fina_prac') ? 'is-invalid' : '' }}" value="{{ old('fina_prac', optional($practicante->fina_prac)->format('Y-m-d')) }}" required autofocus>
	                @if ($errors->has('fina_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('fina_prac') }}
	                    </div>
	               	@endif
			  	</div>

			  	<div class="form-group col-md-4">
				    <label>Grado Asignar</label>
				    <select name="sub_grado_id" class="form-control {{ $errors->has('sub_grado_id') ? 'is-invalid' : '' }}" required autofocus>
				    	@empty(old('sub_grado_id'))
	                        <option value="{{ $practicante-> getGradoId() }}">{{ $practicante->getGrado() }}</option>
	                    @endempty
				      	@foreach($grados as $grado)
							 @foreach($grado->subGrados as $subGrado)
							 <option value="{{ $subGrado->id }}"
				      			@if (old('sub_grado_id') === $subGrado->id){{ 'selected' }}@endif>
				      			{{ $grado->abre_grad }} &middot; {{ $subGrado->abre_subg }} &middot; Jornada {{$grado->getJornada() }}
				      		</option>
				      		@endforeach
				      	@endforeach
				    </select>
	                @if ($errors->has('sub_grado_id'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('sub_grado_id') }}
	                    </div>
	               	@endif
		 		</div>

				<div class="form-group col-md-12">
		    		<label>Observaciones</label>
		    		<textarea name="obse_prac" rows="3" class="form-control {{ $errors->has('obse_prac') ? 'is-invalid' : '' }}" autofocus>
		    			{{ old('obse_prac', optional($practicante)->obse_prac) }}
		    		</textarea>
	                @if ($errors->has('obse_prac'))
	                    <div class="invalid-feedback">
	                    	{{ $errors->first('obse_prac') }}
	                    </div>
	               	@endif
		  		</div>



			</div>

			<div class="form-row">
				<div class="form-group col-md-12 text-center">
		  			<hr class="w-100">
			  		<button type="reset" class="btn btn-secondary">Limpiar</button>
			  		<button type="submit" class="btn btn-primary">Actualizar</button>
			  	</div>
			</div>
		</form>
	</div>

@endsection