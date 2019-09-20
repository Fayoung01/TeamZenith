<?php if(count($errors) > 0): ?>
	<div class="error">
		<?php foreach ($errors as $error): ?>
			<p style="font-size: 1rem;color: red;font-weight:lighter;"><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>

<?php endif ?>