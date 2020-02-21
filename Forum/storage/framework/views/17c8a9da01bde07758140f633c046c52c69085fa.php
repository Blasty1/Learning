<?php $__env->startSection('home_riquadro'); ?>

<div class="container"> 
<div id="newsletter" class="container">
		<div class="title">
			<h2>Registrazione</h2>
		</div>
		<div class="content">
			<form method="post" action="<?php echo e(route('register')); ?> ">
				<?php echo csrf_field(); ?>
				<div class="row half">
					<div class="6u">
					<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id='error'><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<input type="text" class="text" name="name" id="name" placeholder="Name" />
					</div>
					</div>
					<div class="6u">
					<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id='error'><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<input type="email" class="text" name="email" id="email" placeholder="Email" />
					</div>
					<div class="6u">
					<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id="error"><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<input type="password" class="text" name="password" id="password" placeholder='Password'/>
					
					</div>
				</div>
		
				<div class="row">
					<div class="12u"> <Button type='submit' class="button">Registrati</div>
				</div>
			</form>
		</div>
	</div>

     </div>
   


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/Forum/resources/views/auth/register.blade.php ENDPATH**/ ?>