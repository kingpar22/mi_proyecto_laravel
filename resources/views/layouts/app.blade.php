<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ZaguNet - @yield('title')</title>
    @vite('resources/css/dashboard.css')
</head>
<body>

<div class="container">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <main class="main">
        <!-- Top Bar -->
        @include('layouts.topbar')

        <!-- Contenido de la página -->
        @yield('content')
    </main>
</div>

</body>
@push('js')
<script>
  function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('active');
  }
</script>
@endpush
</html>