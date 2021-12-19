@extends('layouts.app')

@section('content')
    <section class="container-profil">
        <div class="menu-gauche">
            <h3></h3>

        </div>

        <div class="profil">
        <h1 class="title-page">Demandes d'amis</h1>
        <?php
            if (isset($_GET['id']) && !empty($_GET['id']) && !empty($_SESSION['id'])){

                $idUser = $_SESSION['id'];//id Utilisateur 1, l'id de l'utilisateur connecté
                $idAmi = $_GET['id'];


                $sql='SELECT * FROM user WHERE id IN(SELECT idUtilisateur1 FROM lien WHERE idUtilisateur2=? AND etat="attente")';
                $query = $pdo->prepare($sql);
                $query->execute(array($idUser));
                $demandeAmi->fetchAll(); // table utilisateur
                var_dump($demandeAmi);

               // echo $demandeAmi['login'];
                
                
                ?>

        </div>

        
        <div class="menu-droite">
            

        </div>



    </section>
@endsection