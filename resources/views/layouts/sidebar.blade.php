<aside class="sidebar">
    <div class="logo">ZaguNet</div>

    <div class="user-role">
        {{ Auth::user()->role_id == 1 ? 'Administrador' : (Auth::user()->role_id == 2 ? 'Caja' : 'Usuario') }}
    </div>

    <nav>
        <ul>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="{{ request()->is('clientes') ? 'active' : '' }}">
                <a href="{{ url('/clientes') }}">Clientes</a>
            </li>
            <li class="{{ request()->is('finanzas') ? 'active' : '' }}">
                <a href="{{ url('/finanzas') }}">Finanzas</a>
            </li>
            <li class="{{ request()->is('sistema') ? 'active' : '' }}">
                <a href="{{ url('/sistema') }}">Sistema</a>
            </li>
            <li class="{{ request()->is('fichas') ? 'active' : '' }}">
                <a href="{{ url('/fichas') }}">Fichas HotSport</a>
            </li>
        </ul>
    </nav>

    <div class="logout">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    </div>
</aside>