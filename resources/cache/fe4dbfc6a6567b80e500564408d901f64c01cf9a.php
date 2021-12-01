<?php $__env->startSection('content'); ?>

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
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>