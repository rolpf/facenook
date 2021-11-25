@extends('layouts.app')

@section('content')
<form action="index.php?action=creationT" method="post" enctype="multipart/form-data">
    <input type='text' name='user' placeholder='Identifiant'>
  <input type="text" id="input_prenom" name="prenom" placeholder="Prénom" required>
  <input type="text" id="input_nom" name="nom" placeholder="Nom" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="mdp" placeholder="Mot de passe" required>
  <input type="submit" name="valider" value="Inscription">
</form>
@endsection
