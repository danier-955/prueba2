<header class="py-4">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-full bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMD" aria-controls="navbarMD" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMD">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#inicio">Inicio</a>
                    <a class="nav-item nav-link" href="#promociones">Promociones</a>
                    <a class="nav-item nav-link" href="#eventos">Eventos</a>
                    <a class="nav-item nav-link" href="#contactenos">Contáctenos</a>
                    <a class="nav-item nav-link" href="{{ route('login') }}">Ingresar</a>
                </div>
            </div>
        </div>
    </nav>
</header>