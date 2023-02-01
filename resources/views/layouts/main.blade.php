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
    <link rel="shortcut icon" href="/img/4meventos_logo.svg" type="image/x-icon">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand"><img src="/img/4meventos_logo.svg" alt="4M Eventos Logo"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a href="/eventos/create" class="nav-link">Criar Evento</a>
                    </li>
                    {{-- Caso o usuário já esteja logado --}}
                    @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                    @endauth
                    {{-- Caso o usuário não esteja logado --}}
                    @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                    @endguest

                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>4M Eventos &copy; 2023</p>
    </footer>
    <script src="/js/scripts.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
