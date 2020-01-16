<?php $__env->startSection('content'); ?>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2><?php echo e($article->title); ?></h2>
				<span class="byline"><?php echo e($article->excerpt); ?></span> </div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p><?php echo e($article->body); ?></p>
		</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/bryan/resources/views/article/show.blade.php ENDPATH**/ ?>