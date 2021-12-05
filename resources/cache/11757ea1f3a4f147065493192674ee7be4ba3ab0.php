<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>