@extends('layouts.app')

@section('content')
    <section class="container-profil">
        <div class="menu-gauche">
            <h3></h3>

        </div>

        <div class="profil">
        <h1 class="text-timeline">Accueil</h1>
        <div class="poster">
            <p>Quoi de neuf ?</p>
            <form action="index.php?action=postingT" method="POST"></form>
            <input type="text" name="newPost">
            <input type="submit" name="buttonNewPost" value="Poster">
            </div>
            <div class="newPost">
                <img class="avatar_message" src=""> 
                <p class="pseudo">un pseudo</p><p class="date">la date</p>
                <p class="message">un message posté par l'utilisateur.</p>
            </div>
        </div>

        <div class="menu-droite">
            

        </div>



    </section>
@endsection