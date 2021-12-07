@extends('layouts.app')

@section('content')
    <section class="container-profil">
        <div class="menu-gauche">
            <h3></h3>

        </div>

        <div class="profil">
        <h1 class="title-page">Profil</h1>
            <div bio>
<<<<<<< HEAD
            <!-- @isset($_SESSION['id'])
        Bonjour  {{$_SESSION['login']}}
    @endisset -->

    
                    <!-- <h1> 
                        / */ 
                </h1> -->
=======
                <?php
                    include("config/bd.php");
                    include("config/actions.php");
                
                if (isset($_GET['id']) && $_GET['id']>0) {
                    $sql = 'select id, login, avatar from user where id=?';
                    $query = $pdo->prepare($sql);
                    $query->execute(array($_GET['id']));
                    $affichageProfil = $query->fetch(); // un array php
                    // id, login, avatar

                    echo "coucou". $affichageProfil['login'];

                }
                ?>
                <img class="pdp" src="">
                    <ul>
                        
                    </ul>
>>>>>>> 5abf3fa2bb6c8797b35f05c83695f85a0c24f4f0
            </div>

        </div>

        <div class="menu-droite">
            

        </div>



    </section>
@endsection