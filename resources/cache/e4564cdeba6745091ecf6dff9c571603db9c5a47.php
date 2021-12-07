<?php $__env->startSection('content'); ?>
    <section class="container-profil">
        <div class="menu-gauche">
            <h3></h3>

        </div>

        <div class="profil">
        <h1 class="title-page">Profil</h1>
            <div bio>
            <!-- <?php if(isset($_SESSION['id'])): ?>
        Bonjour  <?php echo e($_SESSION['login']); ?>

    <?php endif; ?> -->

    
                    <!-- <h1> 
                        / */ 
                </h1> -->
            </div>

        </div>

        <div class="menu-droite">
            

        </div>



    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>