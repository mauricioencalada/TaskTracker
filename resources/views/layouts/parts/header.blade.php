<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-yellow" >
    <div class="container">
      <a class="navbar-brand " href="{{ route('home') }}">TaskTracker</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} " aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('tasks.index') ? 'active' : '' }} "   href="{{ route('tasks.index') }}">Tareas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}"   href="{{ route('nosotros') }}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contactanos.index') ? 'active' : '' }}"  href="{{ route('contactanos.index') }}">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
