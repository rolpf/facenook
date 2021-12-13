@extends('layouts.app')

@section('content')
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
                    echo "coucou ". $affichageProfil['login'];
                    echo "<a href='index.php?action=demandeami&id=".$affichageProfil['id']."'method='GET'>Ajouter en ami</a>"; // met l'id dans l'url
                //}
            }
                ?>
            
        </div>

        <div class="menu-droite">
            

        </div>



    </section>
@endsection