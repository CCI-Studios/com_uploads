<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_uploads/css/uploads.css" />

<div class="headline">
	<h1 class="title">Project Information</h1>
</div>

<div class="uploads">
	<? if ($description): ?>
		<p><?= $description ?></p>
	<? endif; ?>

	<form action="<?= @route('view=files') ?>" method="get" class="-koowa-grid">

		<?= @helper('site::com.uploads.template.helper.listbox.sets', array('filter' => array('enabled' => '1'))) ?>
		<input type="submit" value="Go" />
	</form>
</div>
