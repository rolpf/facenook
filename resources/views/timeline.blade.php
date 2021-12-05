@extends('layouts.app')

@section('content')
    <section class="container-profil">
        <div class="menu-gauche">
            <h3></h3>

        </div>

        <div class="profil">
        <h1 class="text-timeline">Accueil</h1>
        <div class="new_post">
            <p>Quoi de neuf ?</p>
            <input type="text" name="newPost">
            <input type="submit" name="buttonNewPost" value="Poster">

        </div>
        </div>

        <div class="menu-droite">
            

        </div>



    </section>
@endsection