@extends('layouts.app')

@section('content')



<div class="formulaire">

<form class="form_log" action='index.php?action=loginT' method='POST'>
<img src="css/img/feuille.png" class="logo"> 

  <legend>Connexion</legend>

  <input type='text' name='user' placeholder='identifiant' id="login">
  <input type='password' name='mdp' placeholder='Mot de passe' id="password">

  <!-- <label for="rememberme"> Se souvenir de moi ?</label>
  <input type="checkbox" id="rememberme" name="rememberme" value="rememberme" class="rememberme"> -->
  
  
  <input type='submit' name='connecter' value='Connexion'id='submit'>

</form>
</div>
@endsection
