@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb bg-white shadow-1">
	    <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Estas Aquí</li>
	  </ol>
	</nav>

	<p class="typography-display-1">Cambios hechos desde mi fork</p>

	<div class="jumbotron text-center">
	  <h1 class="typography-display-3">Bienvenid@ a {{ config('app.name') }}</h1>
	  <p class="typography-headline">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	  <hr class="my-4">
	  <p class="typography-subheading">It uses utility classes for typography and spacing to space content out within the larger container.</p>
	  <a class="btn btn-lg btn-secondary" href="javascript:(void);" role="button">Ver más</a>
	</div>


@endsection
