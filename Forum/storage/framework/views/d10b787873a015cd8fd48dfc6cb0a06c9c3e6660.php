<?php $__env->startSection('content'); ?>
<div id="wrapper3">
	<div id="portfolio" class="container" style="padding-bottom: unset;">
		<div class="title">
			<h2><?php echo e($Article->ArticleName); ?>

				<?php if(($Article->user_id == $WhoSee->id) || ($WhoSee->User_permess == 'admin')): ?>
						<a href="/<?php echo e($Article->id); ?>/edit"><img src="/images/img07.png" alt="" class="image-spirit" /></a>			
						<?php if($Article->Approved == 'No' and $WhoSee->User_permess == 'admin'): ?>
							<a href="/approve/<?php echo e($Article->id); ?>"><img src="/images/img09.png" alt="" class="image-spirit" /></a>			
						<?php endif; ?>
						<a href="/<?php echo e($Article->id); ?>/delete"><img src="/images/img08.png" alt="" class="image-spirit" /></a>
				<?php endif; ?>
				</h2>
			</div>
			<p id="textnormal"><?php echo str_replace("\n","<br>",$TextArticle); ?></p>
	<div id='written_by'>
	<p>Written by: <?php echo e($Author); ?></p>

</div>
<p id="written_by" style="text-align:left">Commenti:</p>
	
<div id="space-comment" class="container" style="padding:2em 0em">
	<?php for($i=0;$i<count($autore);$i++): ?>
	<p><?php echo e($autore[$i]); ?> scrive : <?php echo e($comment[$i]->body); ?></p>
	<p id="written_by"><?php echo e($comment[$i]->created_at); ?></p>
	<?php endfor; ?>
	</div>
<div class="content">
<form method="post" action="/articles/<?php echo e($Article->id); ?>">
				<?php echo csrf_field(); ?>
				
				<div class="row half">
					<div class="6u">
					<?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div id='error'><?php echo e($message); ?>

					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						<textarea name="body" style="padding: 0.6em;" id="body" placeholder="Write Your Comment"></textarea>
					</div>	
				</div>
			<div class="row">
					<div class="12u"> <Button type="submit" style="margin-top: 0;margin-left: 25em" class="button">Invia</div>
			</div>
				</div>
			</form>
</div>	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Learning/Forum/resources/views/articles/single_article.blade.php ENDPATH**/ ?>