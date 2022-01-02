@extends('layouts.app')

@section('content')
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
        

        foreach($displayMessage as $row) {
            echo '<div class="display_message">
                    <div class="infos_message">'.$row['login'].'<p class="date_message">'.$row['dateEcrit'].'</p></div>
                    <p>'.$row['contenu'].'</p>
                    <form action="index.php?action=supprPostT" method="POST">
                    <button>Supprimer</button>
                    </form
            </div>
            ';
        }

    ?>

        </div>

        <div class="menu-droite">
            

        </div>

    </section>


@endsection