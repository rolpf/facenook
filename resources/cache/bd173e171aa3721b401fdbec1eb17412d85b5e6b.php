<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/typo.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>



    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body>






<?php if(isset($_SESSION['info'])): ?>
    <div>
        <strong>Information : </strong> <?php echo e($_SESSION['info']); ?>

    </div>
<?php endif; ?>
<?php if(isset($_SESSION['id'])): ?>


         <!-- <a href='index.php?action=profil&id=
          <?php //echo$_SESSION['id'] ?>
         '>Profil</a>  -->

      
    <?php endif; ?>


    <?php if(isset($_SESSION['id'])): ?>
        <!-- Bonjour  <?php echo e($_SESSION['login']); ?> <a href='index.php?action=deconnexion'><img src="css/img/icon_deconnexion.png" alt="Accueil" class="icone-vertical-menu"></a></li> -->
    <?php endif; ?>
</nav>

<?php if(isset($_SESSION['id'])): ?>



<header>
        <nav class="navbar">
            <div class="logo-nav">
                <p>Facenook</p>
            </div>

            <a href="#" class="toggle-btn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>

            <div class="navbar-links">
                <ul>
                    <li>
                        <a href="index.php?action=timeline">accueil</a>
                    </li>

                    <li>
                        <a href="index.php?action=page2">Amis</a>
                    </li>

                    <li>
                        <a href="index.php?action=profil&id=<?php echo$_SESSION['id']?>">Profil</a>
                    </li>
                    
                    <li>
                    <div class="searchbar">
                    <form action="index.php" method="GET"> 
                        <input type='hidden' name='action' value='recherche'>
                        <input name="recherche" type="text" placeholder="Chercher un utilisateur">
                        <button type="submit"> <i class='bx bx-search-alt' ></i></button>
                    </form>
                </div>  
                    </li>

                </ul>
                    
            </div>
            <a class="btn-nav" href="index.php?action=deconnexion"><i class='bx bx-log-out'></i></a>
        </nav>
    </header>














<!-- <div class="menu-gauche">
    <div class="logo-content">
        <div class="logo-menu">
            <div class="logo_name">Facenook</div>
        </div>
            <ul class="nav_list">
                <li>
                        
                <div class="searchbar">
                    <form action="index.php" method="GET"> 
                        <input type='hidden' name='action' value='recherche'>
                        <input name="recherche" type="text" placeholder="Chercher un utilisateur">
                        <button type="submit"> <i class='bx bx-search-alt' ></i></button>
                    </form>
                </div>  
                </li>

                <li>
                    <a href="index.php">
                        <i class='bx bxs-home'></i>
                        <span class="links_name">Acceuil</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?action=page2">
                        <i class='bx bx-group' ></i>
                        <span class="links_name">Amis</span>

                    </a>
                </li>

                <li>
                <a href='index.php?action=profil&id=<?php echo$_SESSION['id']?>'>
                     <i class='bx bx-show'></i>
                    <span class="links_name">Profil</span>

                </a> 
                       
                        
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class='bx bxs-comment-dots'></i>
                        <span class="links_name">Feed</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?action=deconnexion">
                        <i class='bx bxs-door-open'></i>
                        <span class="links_name">Déconnexion</span>
                    </a>
                </li>

            </ul>

    </div>
</div>  -->












    <!-- <div class="searchbar">
    <form action="index.php" method="GET"> 
    <input type='hidden' name='action' value='recherche'>
      <input name="recherche" type="text" placeholder="Chercher un utilisateur">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>    -->
    <?php endif; ?>

<main class="container">
    <?php echo $__env->yieldContent("content"); ?>
</main>

<!-- <footer>pied de page</footer> -->
</body>
</html>