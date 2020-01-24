<?php $__env->startSection('content'); ?>
<div id="wrapper">
	<div id="page" class="container">
		<h1 class="heading has-text-weight-bold is-size-3">New articles</h1>
		<form method="POST" action="/articles">
			<?php echo csrf_field(); ?>
			<div class="field">
				<label class="label" for="title">Title</label>
				
				<div class="control">
					<input class="input" type="text" name="title" id="title">

				</div> 
			</div>
			<div class="field">
				<label class="label" for="excerpt">Excerpt</label>
				
				<div class="control">
					<textarea class="textarea" name="excerpt" id="excerpt"></textarea> 
				</div>
			</div>
			<div class="field">
				<label class="label" for="body">Body</label>
				
				<div class="control">
					<textarea class="textarea" name="body" id="body"></textarea> 
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