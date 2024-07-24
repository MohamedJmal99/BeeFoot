<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <footer>
        <div class="main-footer">
            <div class="footer">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <div class="footer-savoir-plus">
                    <div class="footer-savoir-plus-title">
                        <h3>en savoir plus</h3>
                    </div>
                    <ul>
                        <li><a href="">Accueil</a></li>
                        <li><a href="">Nos Activités</a></li>
                        <li><a href="">Devenez Partenaire</a></li>
                        <li><a href="">Qui Sommes Nous ?</a></li>
                        <li><a href="">Comment Ça Marche ?</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <div class="footer-contact-title">
                        <h3>contact</h3>
                    </div>
                    <ul>
                        <li><a href="mailto:Kravel@Galion.Com">Kravel@Galion.Com</a></li>
                        <li><a href="tel:+216 71 308 500">+216 71 308 500</a></li>
                    </ul>
                </div>
                <div class="footer-rejoignez-nous">
                    <div class="footer-rejoignez-nous-title">
                        <h3>REJOIGNEZ-NOUS</h3>
                    </div>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
</body>
</html>