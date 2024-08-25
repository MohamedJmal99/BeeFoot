@include('layouts.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <div class="section1">
            <div class="section1-contain">
                <div class="section1-title">
                    <h2>Lorem ipsum</h2>
                </div>
                <div class="section1-paragraph">
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="section1-voir-plus">
                    <a href="">Voir Plus</a>
                </div>
            </div>
        </div>
        <div class="section2">
            <div class="section2-title">
                <h1>BEE FOOT</h1>
            </div>
            <div class="section2-content">
                <div class="section2-content-left">
                    <img src="../images/m2.png" alt="">
                </div>
                <div class="section2-content-right">
                    <div class="section2-content-right-title">
                        <h2>qui sommes nous ?</h2>
                    </div>
                    <div class="section2-content-right-content">
                        <p>en forme longue depuis 1875 la République française (Écouter), est un État souverain
                            transcontinental dont le territoire métropolitain s'étend en Europe de l'Ouest et dont le
                            territoire ultramarin s'étend dans les océans Indien, Atlantique, Pacifique, ainsi qu'en
                            Antarctique8 et en Amérique du Sud. Le pays a des frontières terrestres avec la Belgique, le
                            Luxembourg, l'Allemagne, la Suisse, l'Italie, l'Espagne, Monaco et l'Andorre en Europe,
                            auxquelles s'ajoutent les frontières terrestres avec le Brésil, le Suriname et les Pays-Bas
                            aux Amériques. La France dispose d'importantes façades maritimes sur l'Atlantique, la
                            Méditerranée, le Pacifique et l'océan Indien, lui permettant de bénéficier de la deuxième
                            plus vaste zone économique exclusive du monde.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="accueil-banner">
            <h1>Découvrez nos espaces</h1>
        </div>
        <div class="section3">
            <div class="section3-content">
                <div class="section3-content-left">
                    <div class="section3-content-left-title">
                        <h2>VOUS AVEZ UN ESPACE?</h2>
                    </div>
                    <div class="section3-content-left-content">
                        <p>en forme longue depuis 1875 la République française (Écouter), est un État souverain
                            transcontinental dont le territoire métropolitain s'étend en Europe de l'Ouest et dont le
                            territoire ultramarin s'étend dans les océans Indien, Atlantique, Pacifique, ainsi qu'en
                            Antarctique8 et en Amérique du Sud. Le pays a des frontières terrestres avec la Belgique, le
                            Luxembourg, l'Allemagne, la Suisse, l'Italie, l'Espagne, Monaco et l'Andorre en Europe,
                            auxquelles s'ajoutent les frontières terrestres avec le Brésil</p>
                    </div>
                    <div class="section3-content-left-button">
                        <a href="">Devenez Partenaire</a>
                    </div>
                </div>
                <div class="section3-content-right"></div>
            </div>
        </div>
    </div>
</body>

</html>
@include('layouts.footer')
