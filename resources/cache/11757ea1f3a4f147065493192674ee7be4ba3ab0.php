<?php $__env->startSection('content'); ?>
    <section class="container-profil">
        <div class="menu-gauche">
            <h3></h3>

        </div>

        <div class="profil">
        <h1 class="text-timeline">Accueil</h1>
        <div class="poster">
            <form action="index.php?action=postingT" method="POST">
            <p>Quoi de neuf ?</p>
            <input type="text" name="newPost">
            <input type="submit" name="buttonNewPost" value="Poster">
            </form>
            </div>
            <div class="newPost">
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
        // comment afficher le pseudo ?
        $query = $pdo->prepare($sql);
        $displayMessage = $query->execute(array($idUser));

        foreach($displayMessage as $row) {
            echo '<div class="display_message">
                    <div class="auteur">'.$row['id'].'
            </div>
            ';
        }

    ?>
                <img class="avatar_message" src=""> 
                <p class="pseudo">un pseudo</p><p class="date">la date</p>
                <p class="message">un message posté par l'utilisateur.</p>
            </div>
        </div>

        <div class="menu-droite">
            

        </div>

    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>