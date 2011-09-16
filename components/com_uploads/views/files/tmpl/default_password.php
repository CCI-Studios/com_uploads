<p>You need to enter a password to access this project:</p>

<form action="<?= @route('view=files') ?>" method="get" class="-koowa-form">
	<input type="hidden" name="uploads_set_id" value="<?= $set_id ?>">
	
	<div class="fields">
		<label for="password"><?= @text('Password') ?>:</label>
		<input type="password" name="password" id="password" />
	</div>
	
	<div class="fields">
		<input type="submit" value="Continue" />
	</div>
</form>

<p>Please contact <a href="mailto:info@wellingtonbuilders.com">info@wellingtonbuilders.com</a> if you need a password.</p>