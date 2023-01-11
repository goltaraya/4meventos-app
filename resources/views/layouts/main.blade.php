<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - 4M Eventos</title>

    {{-- CSS do Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">
    {{-- CSS do Projeto --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <h1>@yield('title-header')</h1>
    @yield('content')

    {{-- Conteúdo da página --}}

    <footer>
        <p>4M Eventos &copy; 2023</p>
    </footer>
    <script src="/js/scripts.js"></script>
</body>

</html>
