<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="#">
    <title>
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="cabecera navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="logo">
            <a class="nav-link active" aria-current="page" href="{{ route('main') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
            <a class="nav-link active" aria-current="page" href="{{ route('main') }}">CV App</a>
        </div>
        <div class="navegadores">
            <a class="nav-link active" aria-current="page" href="{{ route('curriculums') }}">Show all cv</a>
            <a class="nav-link active" aria-current="page" href="{{ route('curriculums.create') }}">Insert</a>
        </div>
    </nav>
</body>
</html>