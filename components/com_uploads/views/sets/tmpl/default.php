<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_uploads/css/uploads.css" />

<div class="headline">
	<h1 class="title">Project Information</h1>
</div>

<div class="uploads">
	<? if ($description): ?>
		<p><?= $description ?></p>
	<? endif; ?>

	<form action="<?= @route('view=sets') ?>" method="get" class="-koowa-grid">
		
		<div class="fields">
			<label><?= @text('User name') ?>:</label>
			<input type="text" name="title" />
		</div>
		
		<div class="fields">
			<label><?= @text('Password') ?>:</label>
			<input type="password" name="password" />
		</div>

		<div class="fields">
			<input type="submit" value="Submit" />
		</div>
		
		<?= $error ?>
	</form>
</div>
