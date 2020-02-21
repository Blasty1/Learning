<?php $__env->startSection('content'); ?>
<?php $profile= Auth::user(); ?>
<div class='title'>
<h2>Benvenuto nel tuo profilo</h2></div>
<div id="three-column">
<p>Nome:<?php echo e($profile->name); ?></p>
<p>Email: <?php echo e($profile->email); ?></p>
<p>Ti sei iscritto il <?php echo e(date_format($profile->created_at,'d F o')); ?></p>
<p>Articoli scritti: <?php echo e($Num_articoli); ?></p>
<p>Ruolo: <?php echo e($profile->User_permess); ?></p></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/Forum/resources/views/articles/my_profile.blade.php ENDPATH**/ ?>