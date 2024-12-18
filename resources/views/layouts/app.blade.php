{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MTG Catalog')</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @yield('styles')
</head>
<body>
    @include('partials.alerts')
    <div class="header">
        @include('partials.header')
        @include('partials.nav')
    </div>

    @yield('content')
    
    @include('partials.footer')

    <script src="{{ asset('js/theme-switcher.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>

