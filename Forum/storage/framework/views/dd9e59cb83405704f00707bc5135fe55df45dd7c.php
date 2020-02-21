<?php $__env->startSection('content'); ?>
<div class="container"> 
<div id="newsletter" class="container">
		<div class="title">
			<h2>Modify Your Article</h2>
		</div>
		<div class="content">
			<form method="POST" action="/<?php echo e($Article->id); ?>/edit">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				<div class="row half">
					<div class="6u">
						<input type="text" style="padding: 0.6em;" class="text" name="ArticleName" id="ArticleName" value="<?php echo e($Article->ArticleName); ?>" />
					</div>
					<div class="6u">
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePreface" id="ArticlePreface" value="<?php echo e($Article->ArticlePreface); ?>"/>
					</div>
					<div class="6u">
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePathImage" id="ArticlePathImage" value="<?php echo e($Article->ArticlePathImage); ?>"/>
					</div>
					<div class="6u">
						<textarea name="ArticlePathFileText" style="padding: 0.6em;" id="ArticlePathFileText"><?php echo e($TextArticle); ?></textarea>
				
					</div>
				</div>
				<div class="row">
					<div class="12u"> <Button type="submit" class="button">Modifica</div>
				</div>
			</form>
		</div>
	</div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/Forum/resources/views/articles/edit.blade.php ENDPATH**/ ?>