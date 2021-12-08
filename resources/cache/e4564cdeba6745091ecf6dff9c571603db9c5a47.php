<?php $__env->startSection('content'); ?>
        
    <!-- <link href="/css/profil.css" rel="stylesheet"> -->

     
    <section class="container-profil">
        <div class="nav-bar">
            <!-- <h1 class="searchTitle">Voici le résultat de votre recherche</h1> -->
            <?php if(isset($_SESSION['id'])): ?>
                <div class="searchbar">
                    <form action="index.php" method="GET" class="searchbar-btn"> 
                        <input type='hidden' name='action' value='recherche'>
                        <input name="recherche" type="text" placeholder="Chercher un utilisateur" id="searchbox">
                         <button type="submit" id="submit-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>   
    <?php endif; ?>
        </div>
        
        <div class="menu-gauche">

        </div>

        <div class="profil">
             <h1 class="title-page">Profil utilisateur</h1>
            <div class="right-contener">    
                    <div class="pseudo-part">

                            <?php
                                include("config/bd.php");
                                include("config/actions.php");
                    
                        if (isset($_GET['id']) && $_GET['id']>0) {
                        $sql = 'select id, login, avatar from user where id=?';
                            $query = $pdo->prepare($sql);
                            $query->execute(array($_GET['id']));
                            $affichageProfil = $query->fetch(); // un array php
                            // id, login, avatar

                        }
                        ?>

                     <h3 class="utilisateur-name"> <?php echo $affichageProfil['login']; ?> </h3>
                     <p>Nom de la ville</p>

                     <a class="btn-button" href="#">Ajoutez post </a>

                    
            
                    </div>

                    <!-- <div class="btn-part">
                    <a class="btn-post" href="#">Ajouter un post</a>
                    </div> -->
                
               </div>




               <div class="left-contener">

            </div>
        
                        

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>