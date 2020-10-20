<!DOCTYPE html>
<head>
    <title>@yield('title', 'caca')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="/js/app.js" defer></script>
</head>
<body>
    @include('partials/nav')
    {{-- para los mensajes de sesion --}}
    @include('partials.session-status')

    @yield('content')
</body>
</html>