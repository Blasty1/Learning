<?php $__env->startSection('content'); ?>
<div id="wrapper3">
	<div id="portfolio" class="container">
		<div class="title">
			<h2>Articles </h2>
			<span class="byline">Ordinati secondo le tue recenti letture</span> </div>

			<?php $__currentLoopData = $Articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $i; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/Forum/resources/views/articles/all_articles.blade.php ENDPATH**/ ?>