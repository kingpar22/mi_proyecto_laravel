<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZaguNet Dashboard')</title>
    @vite('resources/css/dashboard.css')
    @vite('resources/css/Lista_clientes.css')
    @vite('resources/css/registro_cliente.css')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div id="sidebar-overlay" onclick="toggleMenu()"></div>
        <div class="logo">ZaguNet</div>
        <div class="user-role">{{ Auth::user()->name ?? 'Invitado' }}</div>
        <nav>
            <ul>
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                </li>
                <li class="{{ request()->routeIs('clientes.*') ? 'active' : '' }}">
                    <a href="{{ route('clientes.index') }}"><i class="fas fa-users"></i><span>Clientes</span></a>
                </li>
                <li><a href="#"><i class="fas fa-coins"></i><span>Finanzas</span></a></li>
                <li><a href="#"><i class="fas fa-cogs"></i><span>Sistema</span></a></li>
                <li><a hr
                            ef="#"><i class="fas fa-file-alt"></i><span>Fichas HotSport</span></a></li>
            </ul>
        </nav>
        <div class="logout">
            <button onclick="confirmLogout()">Cerrar sesión</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </div>
    </aside>

    <!-- Main -->
    <main class="main">
        <header class="topbar">
            <button id="menuBtn" style="font-size:1.5rem;">☰</button>
            <div class="top-right">
                <span><i class="fas fa-question-circle"></i> Ayuda</span>
                <span><i class="fas fa-bell"></i></span>
                <div class="user-role">{{ Auth::user()->name ?? 'Invitado' }}</div>
            </div>
        </header>

        <div class="main-content">
            @yield('content')
        </div>
    </main>

</div>

<script>
const sidebar = document.getElementById('sidebar');
const menuBtn = document.getElementById('menuBtn');
const overlay = document.getElementById('sidebar-overlay');
const mainContent = document.querySelector('.main'); // Seleccionamos todo el main

function toggleMenu() {
    if (window.innerWidth < 768) {
        // Comportamiento Móvil
        sidebar.classList.toggle('expanded');
        overlay.classList.toggle('active');
    } else {
        // Comportamiento Escritorio
        sidebar.classList.toggle('collapsed');
    }
}

// Evento al botón hamburguesa
menuBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // Evita que el clic se propague
    toggleMenu();
});

// Cerrar si haces clic en el contenido (Móvil)
mainContent.addEventListener('click', () => {
    if (window.innerWidth < 768 && sidebar.classList.contains('expanded')) {
        sidebar.classList.remove('expanded');
        overlay.classList.remove('active');
    }
});

// Cerrar si haces clic en el overlay (Móvil)
overlay.addEventListener('click', () => {
    sidebar.classList.remove('expanded');
    overlay.classList.remove('active');
});
</script>
</body>
</html>