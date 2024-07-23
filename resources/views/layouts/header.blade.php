<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav>
            <div class="main-header">
            <div class="header">
                <div class="header-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="BeeFoot-logo">
                </div>
                <div class="header-menu">
                    <li>
                        <a href="">Accueil</a>
                    </li>
                    <li>
                        <a href="">Nos Activités</a>
                    </li>
                    <li>
                        <a href="">Contactez-nous</a>
                    </li>
                    <li>
                        <a href="">Se Connectez</a>
                    </li>
                </div>
            </div>
        </div>
        </nav>
    </header>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
</body>

</html>
