@extends('layouts.app')
@section('title', 'Planeacion')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white shadow-1">
	    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
	    <li class="breadcrumb-item"><a href="{{ route('planeamientos.index') }}">Planeaciones</a></li>
	    <li class="breadcrumb-item"><a href="">Editar</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Estas Aquí</li>
	  </ol>
	</nav>
	<div class="card">
		
		<div class="card-header">
	  		<h1 class="typography-headline">
	  			<i class="material-icons mr-1">local_library</i> Editar Planeación
	  		</h1>
	  	</div>
	  	<div class="card-body">
			@include('partials.alert_full')

			<form  method="post" action="{{ route('planeamientos.update' ,$planeamiento->id) }}" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PUT') }}

				<div class="form-row">
					<div class="form-group col-md-3">
				    	<label>Titulo</label>
				   		 <input type="text" name="titu_plan" class="form-control {{ $errors->has('titu_plan') ? 'is-invalid' : '' }}" value="{{ old('titu_plan', $planeamiento->titu_plan) }}" required autofocus>
		                @if ($errors->has('titu_plan'))
		                    <div class="invalid-feedback">
		                    	{{ $errors->first('titu_plan') }}
		                    </div>
		               	@endif
			  		</div>

			  		<div class="form-group col-md-3">
				    	<label>Fecha </label>
				   		 <input type="text" name="fech_plan" class="datepicker form-control {{ $errors->has('fech_plan') ? 'is-invalid' : '' }}" value="{{ old('fech_plan', optional($planeamiento->fech_plan)->format('Y-m-d')) }}"  autofocus>
		                @if ($errors->has('fech_plan'))
		                    <div class="invalid-feedback">
		                    	{{ $errors->first('fech_plan') }}
		                    </div>
		               	@endif
			  		</div>

			  		<div class="form-group col-md-3">
				    	<label>Documento </label>
				   		 <input type="file" name="docu_plan" class="form-control {{ $errors->has('docu_plan') ? 'is-invalid' : '' }}" value="{{ old('docu_plan', $planeamiento->docu_plan) }}"  autofocus>
		                @if ($errors->has('docu_plan'))
		                    <div class="invalid-feedback">
		                    	{{ $errors->first('docu_plan') }}
		                    </div>
		               	@endif
			  		</div>
					
					<div class="form-group col-md-3">
					    <label>Docentes</label>
					    <select name="docente_id" class="form-control {{ $errors->has('docente_id') ? 'is-invalid' : '' }}" autofocus>
					    	@empty(old('docente_id'))
			                    <option value="{{ $planeamiento->docente_id }}" selected>
			                    	{{ $planeamiento->getDocente() }}
			                    </option>
			                @endempty
			                 @foreach($docentes as $docente)
			                  <option value="{{ $docente->id }}"
			                    @if (old('docente_id') === $docente->id){{ 'selected' }}@endif>
			                    {{ $docente->nomb_doce }}
			                  </option>
                			@endforeach
					    </select>
		                @if ($errors->has('docente_id'))
		                    <div class="invalid-feedback">
		                    	{{ $errors->first('docente_id') }}
		                    </div>
		               	@endif
		 			</div>

			 		<div class="form-group col-md-12">
				    	<label>Descripcion de ACtividad</label>
				    	<textarea name="desc_plan" rows="3" class="form-control {{ $errors->has('desc_plan') ? 'is-invalid' : '' }}" autofocus>
			    			{{ old('desc_plan', $planeamiento->desc_plan) }}
			    		</textarea>
		                @if ($errors->has('desc_plan'))
		                    <div class="invalid-feedback">
		                    	{{ $errors->first('desc_plan') }}
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

	</div>
@endsection
