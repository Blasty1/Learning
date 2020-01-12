;
<?php $__env->startSection('Content'); ?>:
<h1>
	<?php echo e($codice->title); ?>

</h1>
<p><?php echo e($codice->body); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/bryan/resources/views/sonobello.blade.php ENDPATH**/ ?>