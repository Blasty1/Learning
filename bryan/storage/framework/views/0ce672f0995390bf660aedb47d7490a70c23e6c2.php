<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="wrapper">
	<div id="page" class="container">
		<h1 class="heading has-text-weight-bold is-size-3">New articles</h1>
		<form method="POST" action="/articles">
			<?php echo csrf_field(); ?>
			<div class="field">
				<label class="label" for="title">Title</label>
				
				<div class="control">
					<input class="input <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="title" id="title" value="<?php echo e(old('title')); ?>">
					
					<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<p class="help is-danger"><?php echo e($errors->first('title')); ?></p>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div> 
			</div>
			<div class="field">
				<label class="label" for="excerpt">Excerpt</label>
				
				<div class="control">
					<textarea class="textarea <?php $__errorArgs = ['excerpt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="excerpt" id="excerpt"><?php echo e(old('excerpt')); ?></textarea> 
					<?php $__errorArgs = ['excerpt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<p class="help is-danger"><?php echo e($errors->first('excerpt')); ?></p>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>
			<div class="field">
				<label class="label" for="body">Body</label>
				
				<div class="control">
					<textarea class="textarea <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="body" id="body"><?php echo e(old('body')); ?></textarea> 
					<?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
					<p class="help is-danger"><?php echo e($errors->first('body')); ?></p>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
			</div>
			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link" type="submit">Invia</button>
					
				</div>
			</div>
		</form>
	</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/bryan/resources/views/article/create.blade.php ENDPATH**/ ?>