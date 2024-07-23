<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav>
            <div class="main-header">
                <div class="header">
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="BeeFoot-logo">
                        </a>
                    </div>
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ url('/nos-activites') }}">Nos Activités</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">Contactez-nous</a>
                            </li>
                            <li>
                                <a href="">Se Connecter</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
</body>

</html>
