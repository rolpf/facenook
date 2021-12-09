<?php $__env->startSection('content'); ?>
<div class="inscription" id="inscription"> 
 
    <form class="form_log" action="index.php?action=creationT" method="post" enctype="multipart/form-data">
    <img class="logo" src="css/img/feuille.png">  
      <legend>Inscription</legend>
        <input type='text' class="btn"  name='user' placeholder='Identifiant'>
        <input type="text" class="btn"  name="prenom" placeholder="Prénom" required >
        <input type="text" class="btn"  name="nom" placeholder="Nom" required>
        <input type="email" class="btn" name="email" placeholder="Email" required>
        <input type="password" class="btn"  name="mdp" placeholder="Mot de passe" required>
        <input type="submit" class="btn-submit" name="valider" value="Inscription">
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>