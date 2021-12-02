@extends('layouts.app')

@section('content')

<div class="acceuil">
    <div class="partie-gauche">
        <h2>Bienvenue sur Facenook !</h2>
        <img src="css/img/marie.png" class="marie">
        
    </div>

    <div class="partie-droite">
        <a href="index.php?action=login">Connexion</a>
        <a href="index.php?action=signin">Inscription</a>

    </div>

</div>
    
@endsection