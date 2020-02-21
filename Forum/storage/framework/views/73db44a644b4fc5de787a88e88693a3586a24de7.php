<?php $__env->startSection('content'); ?>
<div class="container"> 
<div id="newsletter" class="container">
		<div class="title">
			<h2>Create your Article</h2>
		</div>
		<div class="content">
			<form method="post" action="<?php echo e(route('new_article')); ?> ">
				<?php echo csrf_field(); ?>
				<div class="row half">
					<div class="6u">
					<?php $__errorArgs = ['ArticleName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id='error'><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<input type="text" style="padding: 0.6em;" class="text" name="ArticleName" id="ArticleName" placeholder="Name of Article" />
					</div>
					<div class="6u">
					<?php $__errorArgs = ['ArticlePreface'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id='error'><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePreface" id="ArticlePreface" placeholder='Preface of Article'/>
					</div>
					<div class="6u">
					<?php $__errorArgs = ['ArticlePathImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id='error'><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<input type="text" style="padding: 0.6em;"  class="text" name="ArticlePathImage" id="ArticlePathImage" placeholder='Link of image'/>
					</div>
					<div class="6u">
					<?php $__errorArgs = ['ArticlePathFileText'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id='error'><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<textarea name="ArticlePathFileText" style="padding: 0.6em;" id="ArticlePathFileText" placeholder="Write Your Article"></textarea>
				
					</div>
				</div>
				<div class="row">
					<div class="12u"> <Button type="submit" class="button">Crea</div>
				</div>
			</form>
		</div>
	</div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/Forum/resources/views/articles/create_article.blade.php ENDPATH**/ ?>