<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>My Game</h1>
        <nav>
            <ul><li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/actions">Action</a></li>
                <li><a href="/">Accueil</a></li>
                <li><a href="/comptes">Comptes</a></li>
                <li><a href="/serveurs">Serveurs</a></li>
                <li><a href="/persos">Persos</a></li>
                <li><a href="/metiers">metier</a></li>
                
            </ul>
        </nav>
    </header>
    <div class="wrapper">
        @yield('wrapper')
    </div>
</body>
</html>