<header class="topbar">
    <h2>@yield('page-title')</h2>
    <div class="top-actions">
        <span>Ayuda</span>
        <span>🔔</span>
        <span>{{ Auth::user()->name }}</span>
    </div>
</header>