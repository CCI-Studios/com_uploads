<?= @helper('behavior.mootools'); ?>
<script src="media://com_uploads/js/accordian_folder.js" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_uploads/css/uploads.css" />

<h1 class="pagetitle"><?= $set_name ?></h1>

<div class="uploads">
	<? if ($verified): ?>
		<?= @helper('filelist.files', array('list'=>$list, 'path'=>$path)) ?>
	<? else: ?>
		<?= @template('default_password') ?>
	<? endif; ?>

	<p>&lt;&lt;&nbsp;Go <a href="<?= @route('view=sets&Itemid=12') ?>">back</a></p>
</div>