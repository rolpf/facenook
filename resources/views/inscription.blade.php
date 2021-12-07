@extends('layouts.app')

@section('content')
<div class="inscription"> 
 
    <form class="form_log" action="index.php?action=creationT" method="post" enctype="multipart/form-data">
    <img class="logo" src="css/img/feuille.png">  
      <legend>Inscription</legend>
        <input type='text' name='user' placeholder='Identifiant' id="login">
        <input type="text" id="input_prenom" name="prenom" placeholder="Prénom" required >
        <input type="text" id="input_nom" name="nom" placeholder="Nom" required>
        <input type="email" id='input_email'name="email" placeholder="Email" required>
        <input type="password" id="input_password" name="mdp" placeholder="Mot de passe" required>
        <input type="submit" id="input_submit"name="valider" value="Inscription">
</form>
@endsection
