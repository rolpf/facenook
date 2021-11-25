@extends('layouts.app')

@section('content')
    <form action='index.php?action=loginT' method='POST'>
      <input type='text' name='user' placeholder='Identifiant'>
      <input type='password' name='mdp' placeholder='Mot de passe'>
      <input type="checkbox" id="rememberme" name="rememberme" value="">
      <label for="rememberme">Se souvenir de moi ?</label>
      <input type='submit' name='connecter' value='Connexion'>
    </form>
@endsection
