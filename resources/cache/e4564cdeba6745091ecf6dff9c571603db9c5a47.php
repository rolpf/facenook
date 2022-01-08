<?php $__env->startSection('content'); ?>
     
<section class="profil">
        <div class="margin">
            <div class="container-gauche">
                <div class="informations">
                    <h1>Profil</h1>
                    <?php
                            include("config/bd.php");
                            include("config/actions.php");
                
                    if (isset($_GET['id']) && $_GET['id']>0) {
                    $sql = 'select id, login, avatar from user where id=?';
                        $query = $pdo->prepare($sql);
                        $query->execute(array($_GET['id']));
                        $affichageProfil = $query->fetch(); // un array php
                        // id, login, avatar
                        echo "<p>Page de ". $affichageProfil['login']."<br></p>";
                    } else {
                    echo "<p>Page de ". $_SESSION['login']."<br></p>";
                    }
                    ?>
                    <img src="css/img/pp.png">
                </div>
            </div>

            <div class="container-droit">
                            <div class="post-ultisateur">
                                <form action="index.php?action=postingT" method="POST">
                                <p>Quoi de neuf ?</p>
                                <textarea name="newPost" class="content-post"> </textarea>
                                <input type="submit" name="buttonNewPost" value="Poster" class="btn-post">
                             </form>
                            </div>

                            <hr class="solid"> 

                            <div>

                            </div>

                            <?php
        include("config/bd.php");
        include("config/actions.php");
        //include("config/blade.php");
        $idUser = $_SESSION['id']; // ça c'est pour afficher les msg sur la "timeline" de la personne"
        //$sql="SELECT * from ecrit WHERE idAuteur IN (SELECT user.id FROM user ) ORDER BY dateEcrit DESC";
        // ne pas oublier de changer la requête lorsqu'on aura créé les liens entre utilisateurs
        // pour afficher les messages postés par les amis
        $sql="SELECT * from ecrit JOIN user ON user.id=ecrit.idAuteur WHERE ecrit.idAuteur=? ORDER BY dateEcrit DESC";
        // id, contenu, dateEcrit, image, idAuteur, idAmi
        $query = $pdo->prepare($sql);
        $query->execute(array($idUser));
        $displayMessage = $query->fetchAll();
        ?>
        

        <div class="profil">
        <h1 class="title-page">Profil</h1>
            <?php if(isset($_SESSION['id'])): ?>
            <div bio>
                <img class="pdp" src="">
                    <ul>
                        
                    </ul>
            </div>
            <?php endif; ?>
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

                    $sqlverifLien = 'select * from lien where (idUtilisateur1=? AND idUtilisateur2=?) OR (idUtilisateur1=? AND idUtilisateur2=?)';
                    $query2 = $pdo->prepare($sqlverifLien);
                    // on selectionne le lien entre l'utilisateur connecté et l'utilisateur du profil
                    $query2->execute(array($affichageProfil['id'],$_SESSION['id'] , $_SESSION['id'] ,$affichageProfil['id']));
                    $verifLien = $query2->fetch(); // array php

                    if ($_GET['id']!=$_SESSION['id']){
                    //if ($verifLien['etat'] != false){
                    if (($verifLien['etat'] == 'attente')){ // probleme si le tableau est vide, trying to access array offset on value of type bool
                        echo "<br> Demande en attente";
                    } else if($verifLien['etat'] == 'ami'){
                        echo"affichage infos ami";
                        foreach($displayMessage as $row) {
                            echo '<div class="display_message">
                                    <div class="infos_message">'.$row['login'].'<p class="date_message">'.$row['dateEcrit'].'</p></div>
                                    <p>'.$row['contenu'].'</p>
                            </div>
                            ';
                        }
                    } else if ($verifLien['etat'] == 'block'){
                        echo "Vous êtes bloqué.";
                    } else{
                    //if(isset()) // verifier que les deux personnes ne soient pas déjà amies, ou alors que la demande n'est pas en attente 
                    echo "<a href='index.php?action=demandeami&id=".$affichageProfil['id']."'method='GET'>Ajouter en ami</a>"; // met l'id dans l'url
                //}
                    }
                }

                    


            }
             ?>
            
        </div>     
            </div>

            

            
        </div>
   
</section>
       

                
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>