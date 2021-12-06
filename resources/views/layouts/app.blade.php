<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/typo.css" rel="stylesheet">
</head>

<body>
<header></header>





@isset($_SESSION['info'])
    <div>
        <strong>Information : </strong> {{$_SESSION['info']}}
    </div>
@endisset
@isset($_SESSION['id'])
<nav class="vertical-menu">
    <a href="index.php?action=timeline"><img src="css/img/icon_home.png" alt="Accueil" class="icone-vertical-menu"></a>


        <a href='index.php?action=profil'>Profil</a>

        <a href="index.php?action=page2"><img src="css/img/icon_people.png" alt="AjoutAmi" class="icone-vertical-menu"></a>
    @endisset


    @isset($_SESSION['id'])
        Bonjour  {{$_SESSION['login']}} <a href='index.php?action=deconnexion'><img src="css/img/icon_deconnexion.png" alt="Accueil" class="icone-vertical-menu"></a></li>
    @endisset
</nav>

<main class="container">
    @yield("content")
</main>

<!-- <footer>pied de page</footer> -->
</body>
</html>