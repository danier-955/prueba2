@extends('layouts.landing')

@section('content')
  <section class="jumbotron jumbotron-fluid bg-primary jumbotron-landing text-center" id="inicio">
    <div class="container p-md-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
          <h1 class="typography-display-4">{{ config('app.name') }}</h1>
          <p class="font-weight-light typography-title">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="{{ route('login') }}" class="btn btn-lg btn-secondary my-2">Comenzar</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5" id="promociones">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center py-5">
            <h2 class="typography-display-1">Nuestras promociones</h2>
            <p class="lead text-muted">Cras facilisis mi vitae nunc</p>
          </div>
        </div>
      </div>
      <div class="row no-gutters mb-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Programas de formación</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="list-group list-group-flush" id="accordionTwo">
              <div class="expansion-panel list-group-item">
                <a aria-controls="collapseFour" aria-expanded="false" class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseFour" id="headingFour">
                  Natación
                  <div class="expansion-panel-icon ml-3 text-black-secondary">
                    <i class="collapsed-show material-icons">keyboard_arrow_down</i>
                    <i class="collapsed-hide material-icons">keyboard_arrow_up</i>
                  </div>
                </a>
                <div aria-labelledby="headingFour" class="collapse" data-parent="#accordionTwo" id="collapseFour">
                  <div class="expansion-panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                  </div>
                </div>
              </div>
              <div class="expansion-panel list-group-item">
                <a aria-controls="collapseFive" aria-expanded="false" class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseFive" id="headingFive">
                  Inglés
                  <div class="expansion-panel-icon ml-3 text-black-secondary">
                    <i class="collapsed-show material-icons">keyboard_arrow_down</i>
                    <i class="collapsed-hide material-icons">keyboard_arrow_up</i>
                  </div>
                </a>
                <div aria-labelledby="headingFive" class="collapse" data-parent="#accordionTwo" id="collapseFive">
                  <div class="expansion-panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                  </div>
                </div>
              </div>
              <div class="expansion-panel list-group-item">
                <a aria-controls="collapseSix" aria-expanded="false" class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseSix" id="headingSix">
                  Arte
                  <div class="expansion-panel-icon ml-3 text-black-secondary">
                    <i class="collapsed-show material-icons">keyboard_arrow_down</i>
                    <i class="collapsed-hide material-icons">keyboard_arrow_up</i>
                  </div>
                </a>
                <div aria-labelledby="headingSix" class="collapse" data-parent="#accordionTwo" id="collapseSix">
                  <div class="expansion-panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                  </div>
                </div>
              </div>
              <div class="expansion-panel list-group-item">
                <a aria-controls="collapseSix" aria-expanded="false" class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseSix" id="headingSix">
                  Baile
                  <div class="expansion-panel-icon ml-3 text-black-secondary">
                    <i class="collapsed-show material-icons">keyboard_arrow_down</i>
                    <i class="collapsed-hide material-icons">keyboard_arrow_up</i>
                  </div>
                </a>
                <div aria-labelledby="headingSix" class="collapse" data-parent="#accordionTwo" id="collapseSix">
                  <div class="expansion-panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                  </div>
                </div>
              </div>
              <div class="expansion-panel list-group-item">
                <a aria-controls="collapseSix" aria-expanded="false" class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseSix" id="headingSix">
                  Música
                  <div class="expansion-panel-icon ml-3 text-black-secondary">
                    <i class="collapsed-show material-icons">keyboard_arrow_down</i>
                    <i class="collapsed-hide material-icons">keyboard_arrow_up</i>
                  </div>
                </a>
                <div aria-labelledby="headingSix" class="collapse" data-parent="#accordionTwo" id="collapseSix">
                  <div class="expansion-panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Actividades realizadas</h5>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://vuetifyjs.com/themes/parallax-starter/assets/hero.jpeg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="typography-display-1">First slide</h5>
                    <p class="typography-body-1">Food truck quinoa nesciunt laborum eiusmod.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://vuetifyjs.com/themes/parallax-starter/assets/section.jpeg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="typography-display-1">Second slide</h5>
                    <p class="typography-body-1">Food truck quinoa nesciunt laborum eiusmod.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-light" id="eventos">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center py-5">
            <h2 class="typography-display-1">Nuestros eventos</h2>
            <p class="lead text-muted">Cras facilisis mi vitae nunc</p>
          </div>
        </div>
      </div>
      <div class="card-deck mb-5">
        <div class="card">
          <img class="card-img-top" src="https://vuetifyjs.com/static/doc-images/cards/desert.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Titulo Evento</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-actions">
            <button type="button" class="btn btn-sm btn-outline-secondary">Más información</button>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://vuetifyjs.com/static/doc-images/cards/desert.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Titulo Evento</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-actions">
            <button type="button" class="btn btn-sm btn-outline-secondary">Más información</button>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://vuetifyjs.com/static/doc-images/cards/desert.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Titulo Evento</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-actions">
            <button type="button" class="btn btn-sm btn-outline-secondary">Más información</button>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5" id="contactenos">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center py-5">
            <h2 class="typography-display-1">Contáctenos</h2>
            <p class="lead text-muted">Cras facilisis mi vitae nunc</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <h5 class="card-header">Completa la información</h5>
            <div class="card-body">
              <form>
                <div class="form-group row">
                  	<div class="col-md-4">
                  		<div class="floating-label">
	                    	<label for="nombres">Nombres</label>
	                    	<input type="text" class="form-control" id="nombres" placeholder="Nombres..." required>
	                    </div>
                  	</div>
                  	<div class="col-md-4">
                  		<div class="floating-label">
	                     	<label for="apellidos">Apellidos</label>
	                      <input type="text" class="form-control" id="apellidos" placeholder="Apellidos..." required>
	                    </div>
                  	</div>
                  	<div class="col-md-4">
                  		<div class="floating-label">
  	                  	<label for="correo">Correo Electrónico</label>
  	                  	<input type="email" class="form-control" id="correo" placeholder="Correo electrónico..." required>
  	                  	</div>
                  	</div>
                </div>
                <div class="form-group">
                	<div class="floating-label">
                  		<label for="asunto">Asunto</label>
                  		<input type="text" class="form-control" id="asunto" placeholder="Asunto..." required>
                	</div>
                </div>
                <div class="form-group">
                	<textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe aquí tu mensaje..." required></textarea>
                </div>
                <hr>
                <div class="form-group text-center">
                  	<button type="reset" class="btn btn-secondary">Limpiar</button>
                  	<button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection