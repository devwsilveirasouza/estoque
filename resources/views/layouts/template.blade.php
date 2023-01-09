<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CAMPO EDITÁVEL -->
    <title>@yield('title')</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}" >
</head>
<body>
    <!-- CRIANDO TEMPLATE PADRÃO -->
    <!-- CAMPO EDITÁVEL -->
    @yield('content')

    <!-- JQUERY E BOOTSTRAP -->
    
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
