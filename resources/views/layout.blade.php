<!DOCTYPE html>
<head>
    <title>@yield('title', 'caca')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials/nav')
    {{-- para los mensajes de sesion --}}
    @include('partials.session-status')

    @yield('content')
</body>
</html>