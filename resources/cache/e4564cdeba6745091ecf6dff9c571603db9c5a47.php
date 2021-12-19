<?php $__env->startSection('content'); ?>
    <section class="container-profil">
        <div class="menu-gauche">
            <h3></h3>

        </div>

        <div class="profil">
        <h1 class="title-page">Profil</h1>
            <div bio>
                <img class="pdp" src="">
                    <ul>
                        
                    </ul>
            </div>
            <?php
                    include("config/bd.php");
                    include("config/actions.php");
                
                if (isset($_GET['id']) && $_GET['id']>0) {
                    $sql = 'select id, login, avatar from user where id=?';
                    $query = $pdo->prepare($sql);
                    $query->execute(array($_GET['id']));
                    $affichageProfil = $query->fetch(); // un array php
                    // id, login, avatar
                    //if ($_POST['id'] != $_GET['id']& ) {
                    echo "Page de ". $affichageProfil['login']."<br>";

                    $sqlverifLien = 'select * from lien where (idUtilisateur1=? AND idUtilisateur2=?) OR (idUtilisateur1=? AND idUtilisateur2=?)';
                    $query2 = $pdo->prepare($sqlverifLien);
                    // on selectionne le lien entre l'utilisateur connecté et l'utilisateur du profil
                    $query2->execute(array($affichageProfil['id'],$_SESSION['id'] , $_SESSION['id'] ,$affichageProfil['id']));
                    $verifLien = $query2->fetch(); // array php

                    if ($verifLien['etat'] == 'attente'){
                        echo "<br> Demande en attente";
                    } else {
                    //if(isset()) // verifier que les deux personnes ne soient pas déjà amies, ou alors que la demande n'est pas en attente 
                    echo "<a href='index.php?action=demandeami&id=".$affichageProfil['id']."'method='GET'>Ajouter en ami</a>"; // met l'id dans l'url
                //}
                    }
                    


            }
                ?>
            
        </div>

        <div class="menu-droite">
            

        </div>



    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>