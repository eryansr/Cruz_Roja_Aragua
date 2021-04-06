<div class="bg-dark border-right" id="sidebar-wrapper">
    <div class="list-group list-group-flush">

        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="bg-dark my-3" width="200px" height="80px"
                src="/laravel/public/img/logo3-01.png"
                alt="SICR">
        </a>

        <div class="btn-group dropright">
          <button type="button" class="list-group-item list-group-item-action list-group-item-info dropdown-toggle {{ setActive('voluntarios.*') }} {{ setActive('papeleras.*') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Voluntarios
          </button>
          
          <div class="dropdown-menu" x-placement="right-start">
            <a class="dropdown-item {{ setActive('voluntarios.*') }}" href="{{ route('voluntarios.index') }}">Índice</a>
            @auth
            @if ( auth()->user()->hasRoles(['admin']) )
            <a class="dropdown-item {{ setActive('papeleras.index') }}" href="{{ route('papeleras.index') }}">Eliminados</a>
            @endif
            @endauth
          </div>
        </div>

        <div class="btn-group dropright">
          <button type="button" class="list-group-item list-group-item-action list-group-item-info dropdown-toggle {{ setActive('censos.*') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Censos
          </button>
          
          <div class="dropdown-menu" x-placement="right-start">
            <a class="dropdown-item {{ setActive('censos.*') }}" href="{{ route('censos.index') }}">Índice</a>
            @auth
            @if ( auth()->user()->hasRoles(['admin']) )
            <a class="dropdown-item {{ setActive('papelerascenso.index') }}" href="{{ route('papelerascenso.index') }}">Eliminados</a>
            @endif
            @endauth
          </div>
          
        </div>

        @auth
            @if ( auth()->user()->hasRoles(['admin', 'moderador']) )
                <a class="list-group-item list-group-item-action list-group-item-info {{ setActive('historias.*') }}" href="{{ route('historias.index') }}">
                    Historias
                </a>
            @endif

            @if ( auth()->user()->hasRoles(['admin']) )
                <a class="list-group-item list-group-item-action list-group-item-info {{ setActive('usuarios.*') }}" href="{{ route('usuarios.index') }}">
                    Usuarios
                </a>
            @endif
        @endauth
  	</div>
</div>