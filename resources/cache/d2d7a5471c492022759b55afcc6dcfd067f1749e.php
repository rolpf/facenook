<?php $__env->startSection('content'); ?>



<div class="formulaire">

  <img src="css/img/feuille.png" class="logo"> 

<form action='index.php?action=loginT' method='POST'>
  

  <legend>Connexion</legend>

  <input type='text' name='user' placeholder='identifiant' id="login">
  <input type='password' name='pwd' placeholder='Mot de passe' id="password">

  <!-- <label for="rememberme"> Se souvenir de moi ?</label>
  <input type="checkbox" id="rememberme" name="rememberme" value="rememberme" class="rememberme"> -->
  
  
  <input type='submit' name='connecter' value='Login in'id='submit'>

</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>