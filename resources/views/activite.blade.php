@include('layouts.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos Activités</title>
</head>
<body>
    <div class="activite-container">
        <div class="activite-banner">
            <div class="activite-banner-content">
                <h1>Nos Activités</h1>
                <p><a href="{{ url('/') }}">Accueil</a> / Nos Activités</p>
            </div>
        </div>
    </div>
</body>
</html>
@include('layouts.footer')