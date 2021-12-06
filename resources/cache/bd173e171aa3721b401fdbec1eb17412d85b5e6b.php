<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/typo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>Facenook</header>

<?php if(isset($_SESSION['info'])): ?>
    <div>
        <strong>Information : </strong> <?php echo e($_SESSION['info']); ?>

    </div>
<?php endif; ?>

<nav>
    <a href="index.php">Accueil</a>

    <a href="index.php?action=page2">Page 2</a>
    <?php if(isset($_SESSION['id'])): ?>
        <a href='index.php?action=profil'>Profil</a>
    <?php endif; ?>


    <?php if(isset($_SESSION['id'])): ?>
        Bonjour  <?php echo e($_SESSION['login']); ?> <a href='index.php?action=deconnexion'>Deconnexion</a></li>
    <?php else: ?>
        <a href='index.php?action=login'>Login</a>
        <a href='index.php?action=signin'>Inscription</a>
        <a href="index.php?action=404">404</a>
    <?php endif; ?>
</nav>

<?php if(isset($_SESSION['id'])): ?>
    <div class="searchbar">
    <form action="index.php" method="GET"> 
    <input type='hidden' name='action' value='recherche'>
      <input name="recherche" type="text" placeholder="Chercher un utilisateur">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>   
    <?php endif; ?>

<main class="container">
    <?php echo $__env->yieldContent("content"); ?>
</main>

<!-- <footer>pied de page</footer> -->
</body>
</html>
