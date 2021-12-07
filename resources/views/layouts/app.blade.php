<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/typo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <a href="index.php"><img src="css/img/icon_home.png" alt="Accueil" class="icone-vertical-menu"></a>



        <a href='index.php?action=profil&id=<?php echo$_SESSION['id']?>'>Profil</a>

        <a href="index.php?action=page2"><img src="css/img/icon_people.png" alt="AjoutAmi" class="icone-vertical-menu"></a>
    @endisset


    @isset($_SESSION['id'])
        Bonjour  {{$_SESSION['login']}} <a href='index.php?action=deconnexion'><img src="css/img/icon_deconnexion.png" alt="Accueil" class="icone-vertical-menu"></a></li>
    @endisset
</nav>

@isset($_SESSION['id'])
    <div class="searchbar">
    <form action="index.php" method="GET"> 
    <input type='hidden' name='action' value='recherche'>
      <input name="recherche" type="text" placeholder="Chercher un utilisateur">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>   
    @endisset

<main class="container">
    @yield("content")
</main>

<!-- <footer>pied de page</footer> -->
</body>
</html>