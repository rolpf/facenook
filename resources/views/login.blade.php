@extends('layouts.app')

@section('content')



<div class="formulaire">

<form class="form_log" action='index.php?action=loginT' method='POST'>
<img src="css/img/feuille.png" class="logo"> 

  <legend>Connexion</legend>

  <input type='text' class="btn" name='user' placeholder='identifiant' >
  <input type='password' class="btn"name='mdp' placeholder='Mot de passe' >

  <!-- <label for="rememberme"> Se souvenir de moi ?</label>
  <input type="checkbox" id="rememberme" name="rememberme" value="rememberme" class="rememberme"> -->
  
  
  <!--<input type='submit' name='connecter' value='Connexion'id='submit'>-->
  <input type='submit' class="btn-submit" name='connecter' value='Connexion'>

</form>
</div>
@endsection
