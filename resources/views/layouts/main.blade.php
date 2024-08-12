<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('Title')</title>
        <!--boostrap css-->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">

        


        <!--fonte do google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--css da aplicação-->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        <header>
            <navbar class="navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar_brand">
                        <img src="/img/hdcevents_logo (1).svg" alt="HDC logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nac-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nac-item">
                            <a href="/evento1/criarevento" class="nav-link">Criar evento</a>
                        </li>
                        @auth
                            <li class="nac-item">
                                <a href="/profile/dashboard" class="nav-link">Meus eventos</a>
                            </li>
                            <li class="nac-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                    this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="nac-item">
                                <a href="/login" class="nav-link">Entrar</a>
                            </li>
                            <li class="nac-item">
                                <a href="/register" class="nav-link">Cadastro</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </navbar>
        </header>
        <main>
            <div class="container-fluid">
                <di class="row">
                    @if(@session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </di>
            </div>
        </main>
        <footer>
            <p>HDCevents &COPY; 2024 PROJETO LARAVEL</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
