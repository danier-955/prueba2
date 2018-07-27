<aside aria-hidden="true" class="navdrawer navdrawer-permanent-lg shadow-1" id="navdrawerMD" tabindex="-1">
  <div class="navdrawer-content" id="sidebar">
    <div class="navdrawer-header bg-primary navdrawer-lg-shadow">
      <span class="navbar-brand px-0">{{ config('app.name') }}</span>
    </div>
    @auth
      <nav class="navdrawer-nav">
        <li class="nav-item">
          <div class="jumbotron jumbotron-user shadow-none">
              <div class="typography-subheading">
                <i class="material-icons mr-2">security</i> Rol Usuario
              </div>
              <div class="typography-caption text-white-secondary mt-1">
                <i class="material-icons mr-3">hdr_strong</i> {{ Auth::user()->email }}
              </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-toggle="collapse" href="#user">
            <i class="material-icons mr-3">account_circle</i> {{ Auth::user()->nombre }}
          </a>
          <div class="collapse" data-parent="#sidebar" id="user">
            <a class="nav-item nav-link pl-5 py-3 text-black-secondary" href="javascript:(void);">
              <span class="font-weight-normal">
                <i class="material-icons mr-2">person_outline</i> Ver usuario
              </span>
            </a>
            <a class="nav-item nav-link pl-5 py-3 text-black-secondary" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <span class="font-weight-normal">
                <i class="material-icons mr-2">exit_to_app</i> Cerrar sesión
              </span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </li>
      </nav>
    @endauth
    <div class="navdrawer-divider"></div>
    <ul class="navdrawer-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">
          <i class="material-icons mr-3">home</i> Inicio
        </a>
        <a class="nav-link collapsed" data-toggle="collapse" href="#administrativos">
          <i class="material-icons mr-3">people_outline</i> Administrativos
        </a>
        <div class="collapse {{ Request::routeIs('administrativos.index', 'administrativos.create', 'administrativos.edit.*', 'administrativos.show.*') ? 'show' : '' }}" data-parent="#sidebar" id="administrativos">
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('administrativos.index') ? 'active' : 'text-black-secondary' }}" href="{{ route('administrativos.index') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">view_list</i> Listar administrativos
            </span>
          </a>
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('administrativos.create') ? 'active' : 'text-black-secondary' }}" href="{{ route('administrativos.create') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">add</i> Registrar administrativo
            </span>
          </a>
        </div>
        <a class="nav-link collapsed" data-toggle="collapse" href="#docentes">
          <i class="material-icons mr-3">group</i> Docentes
        </a>
        <div class="collapse {{ Request::routeIs('docentes.index', 'docentes.create', 'docentes.edit.*', 'docentes.show.*', 'planeamientos.index', 'planeamientos.create', 'planeamientos.edit.*', 'planeamientos.show.*') ? 'show' : '' }}" data-parent="#sidebar" id="docentes">
          <a class="nav-link collapsed pl-4" data-toggle="collapse" href="#subdocentes">
            <i class="material-icons mr-3">group</i> Profesores
          </a>
          <div class="collapse {{ Request::routeIs('docentes.index', 'docentes.create', 'docentes.edit.*', 'docentes.show.*') ? 'show' : '' }}" data-parent="#docentes" id="subdocentes">
            <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('docentes.index') ? 'active' : 'text-black-secondary' }}" href="{{ route('docentes.index') }}">
              <span class="font-weight-normal">
                <i class="material-icons mr-2">view_list</i> Listar docentes
              </span>
            </a>
            <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('docentes.create') ? 'active' : 'text-black-secondary' }}" href="{{ route('docentes.create') }}">
              <span class="font-weight-normal">
                <i class="material-icons mr-2">add</i> Registrar docente
              </span>
            </a>
          </div>
          <a class="nav-link collapsed pl-4" data-toggle="collapse" href="#planeacion">
            <i class="material-icons mr-3">local_library</i> Planeaciones
          </a>
          <div class="collapse {{ Request::routeIs('planeamientos.index', 'planeamientos.create', 'planeamientos.edit.*', 'planeamientos.show.*') ? 'show' : '' }}" data-parent="#docentes" id="planeacion">
            <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('planeamientos.index') ? 'active' : 'text-black-secondary' }}" href="{{ route('planeamientos.index') }}">
              <span class="font-weight-normal">
                <i class="material-icons mr-2">view_list</i> Listar planeacion
              </span>
            </a>

            <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('planeamientos.create') ? 'active' : 'text-black-secondary' }}" href="{{ route('planeamientos.create') }}">
              <span class="font-weight-normal">
                <i class="material-icons mr-2">add</i> Registrar planeacion
              </span>
            </a>
          </div>
        </div>
        <a class="nav-link collapsed" data-toggle="collapse" href="#practicantes">
          <i class="material-icons mr-3">group</i> Practicantes
        </a>
        <div class="collapse {{ Request::routeIs('practicantes.index', 'practicantes.create', 'practicantes.edit.*', 'practicantes.show.*') ? 'show' : '' }}" data-parent="#sidebar" id="practicantes">
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('practicantes.index') ? 'active' : 'text-black-secondary' }}" href="{{ route('practicantes.index') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">view_list</i> Listar Practicante
            </span>
          </a>
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('practicantes.create') ? 'active' : 'text-black-secondary' }}" href="{{ route('practicantes.create') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">add</i> Registrar Practicante
            </span>
          </a>
        </div>     
    
       
        <a class="nav-link" collapsed" data-toggle="collapse" href="#areas">
          <i class="material-icons mr-3">help</i> Areas
        </a>
        <div class="collapse {{ Request::routeIs('areas.index', 'areas.create', 'areas.edit.*', 'areas.show.*') ? 'show' : '' }}" data-parent="#sidebar" id="areas">
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('areas.index') ? 'active' : 'text-black-secondary' }}" href="{{ route('areas.index') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">view_list</i> Listar areas
            </span>
          </a>
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('areas.create') ? 'active' : 'text-black-secondary' }}" href="{{ route('areas.create') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">add</i> Registrar area
            </span>
          </a>
        </div>
        <a class="nav-link collapsed {{ Request::routeIs('grados.index', 'grados.create', 'grados.edit.*', 'grados.show.*') ? 'active' : '' }}" data-toggle="collapse" href="#grados">
          <i class="material-icons mr-3">help</i> Grados
        </a>
        <div class="collapse {{ Request::routeIs('grados.index', 'grados.create', 'grados.edit.*', 'grados.show.*') ? 'show' : '' }}" data-parent="#sidebar" id="grados">
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('grados.index') ? 'active' : 'text-black-secondary' }}" href="{{ route('grados.index') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">view_list</i> Listar grados
            </span>
          </a>
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('grados.create') ? 'active' : 'text-black-secondary' }}" href="{{ route('grados.create') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">add</i> Registrar grado
            </span>
          </a>
        </div>
        <a class="nav-link collapsed" data-toggle="collapse" href="#asignaturas">
          <i class="material-icons mr-3">help</i> Asignaturas
        </a>
        <div class="collapse {{ Request::routeIs('asignaturas.index', 'asignaturas.create', 'asignaturas.edit.*', 'asignaturas.show.*') ? 'show' : '' }}" data-parent="#sidebar" id="asignaturas">
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('asignaturas.index') ? 'active' : 'text-black-secondary' }}" href="{{ route('asignaturas.index') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">view_list</i> Listar asignaturas
            </span>
          </a>
          <a class="nav-item nav-link pl-5 py-3 {{ Request::routeIs('asignaturas.create') ? 'active' : 'text-black-secondary' }}" href="{{ route('asignaturas.create') }}">
            <span class="font-weight-normal">
              <i class="material-icons mr-2">add</i> Registrar asignatura
            </span>
          </a>
        </div>
      </li>
    </ul>
    <div class="navdrawer-divider"></div>
    <ul class="navdrawer-nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::routeIs('bitacoras.index') ? 'active' : '' }}" href="{{ route('bitacoras.index') }}">
          <i class="material-icons mr-3">library_books</i> Bitácoras
        </a>
      </li>
    </ul>
  </div>
</aside>