<!DOCTYPE html>
<html>
<head>
    <title>BarberApp</title>
    <!-- Puedes añadir Bootstrap o tus estilos aquí -->
</head>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<body>
    @include('bootstrap.template')
    @yield('content')
</body>
</html>
