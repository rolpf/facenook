@extends('layouts.app')

@section('content')
    <section class="container-profil">

       
        <h1 class="title-page">Demandes d'amis</h1>
        <?php
            include("config/bd.php");
            include("config/actions.php");
            if (isset($_SESSION['id']) && !empty($_SESSION['id'])){
                $idUser = $_SESSION['id'];//id Utilisateur 1, l'id de l'utilisateur connecté


                //$sql='SELECT * FROM user WHERE id IN(SELECT idUtilisateur1 FROM lien WHERE idUtilisateur1=2 AND etat="attente")';
                $sql='SELECT user.* FROM user WHERE id IN(SELECT idUtilisateur1 FROM lien WHERE idUtilisateur2=? AND etat="attente")'; //OR (SELECT idUtilisateur2 FROM lien WHERE idUtilisateur1=? AND etat="attente")
                $query = $pdo->prepare($sql);
                $query->execute(array($idUser));
                $demandeAmi = $query->fetchAll(); // table utilisateur

                foreach($demandeAmi as $parcoursDemande) {
                    echo '<div class="search-result">'.$parcoursDemande['login'] ."<a class='btn-post' href='index.php?action=accepteami&id=". $parcoursDemande['id']."'method='GET'>Accepter</a><a class='btn-post' href='index.php?action=refusami&id=". $parcoursDemande['id']."'method='GET'>Refuser</a>
                      </form></div>";
                    }
                }
                ?>

        </div>

        
        <div class="menu-droite">
            
        </div>



    </section>
@endsection