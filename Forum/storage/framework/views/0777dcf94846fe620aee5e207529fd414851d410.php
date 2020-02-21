<?php $__env->startSection('content'); ?>
<!-- attuiamo delle modifiche al layout -->
<div id="banner" class="container" style="border-left:none;border-right: none; border-bottom: 30px solid rgba(255,255,255,.4)">
		<div class="heading">
			<h2>Benvenuto <?php echo e(Auth::user()->name); ?></h2>
			<p>Inizia a creare contenuti e a pubblicarli sul nostro sito, in modo da ottenere views e da aiutare altra gente</p>
			<a href="<?php echo e(route('new_article')); ?>" class="button" >Crea Contenuti</a>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/Forum/resources/views/articles/index.blade.php ENDPATH**/ ?>