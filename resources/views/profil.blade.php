@extends('layouts.app')

@section('content')
    <section class="container-profil">
        <div class="menu-gauche">

        </div>

        <div class="profil">
        <h1 class="title-page">Profil</h1>
            <div bio>
                <?php
                    include("config/bd.php");
                    include("config/actions.php");
                
                if (isset($_GET['id']) && $_GET['id']>0) {
                    $sql = 'select id, login, avatar from user where id=?';
                    $query = $pdo->prepare($sql);
                    $query->execute(array($_GET['id']));
                    $affichageProfil = $query->fetch(); // un array php
                    // id, login, avatar

                    echo "coucou ". $affichageProfil['login'];

                }
                ?>
               

                        <?php $affichageProfil['login']; ?>
                        
                
            </div>

        </div>

        
        </div>



    </section>
@endsection