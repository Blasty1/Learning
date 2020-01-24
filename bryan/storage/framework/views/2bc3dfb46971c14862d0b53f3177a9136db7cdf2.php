<?php $__env->startSection('content'); ?>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
				<?php
				foreach($article as $al){
				echo '<div class="title"><h2><a href="/articles/'.$al->id.' ">'.$al->title.'</a></h2></div> <p><img src="/images/banner.jpg" alt="" class="image image-full" />'.$al->excerpt.'</p>';
				} 
				?>
			</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/bryan/resources/views/article/all.blade.php ENDPATH**/ ?>