<header>
    <h1>TaskTracker</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home
                </a></li>
            <li><a href="{{ route('tasks.index') }}"
                    class="{{ request()->routeIs('tasks.index') ? 'active' : '' }}">Tareas
                </a></li>
            <li><a href="{{ route('nosotros') }}"
                    class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros
                </a></li>
            <li><a href="{{ route('contactanos.index') }}"
                    class="{{ request()->routeIs('contactanos') ? 'active' : '' }}">Contactanos
                </a></li>
        </ul>

    </nav>
</header>