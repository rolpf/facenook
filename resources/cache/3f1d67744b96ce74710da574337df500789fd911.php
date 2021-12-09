<?php $__env->startSection('content'); ?>
    <section class="container-profil">

        <div class="recherche">
            <h1 class="searchTitle">Voici le résultat de votre recherche</h1>
                 <?php
                   include("config/bd.php");
                    include("config/actions.php");

                    $recherche = $_GET['recherche'];
                    //$sql = "select * from user where login LIKE '%'?'%'";
                    $sql = "select * from user where login LIKE ?";
                    $query = $pdo->prepare($sql);
                    $query->execute(array($recherche));
                    $searchResult = $query->fetchAll();
                    // id, login
                    //var_dump($searchResult);

                    foreach($searchResult as $row) {
                        echo "<div class='resultatRecherche'>
                        <a href='#'>". $row['login'] ."</a> </div>";
                    }

                ?>  
        </div>



    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>