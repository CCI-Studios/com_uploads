<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route('id='. $set->id) ?>" method="post" class="-koowa-form">
	<div style="width: 55%; float: left">
		<table class="admintable">
			<tr>
				<td class="key"><label for="field_title"><?= @text('Title') ?>:</label></td>
				<td><input type="text" name="title" id="field_title" value="<?= $set->title ?>" /></td>
			</tr>
			<tr>
				<td class="key"><label for="field_folder"><?= @text('Folder') ?>:</label></td>
				<td><input type="text" name="folder" id="field_folder" value="<?= $set->folder ?>" /></td>
			</tr>
			<tr>
				<td class="key"><label for="field_password"><?= @text('Password') ?>:</label></td>
				<td><input type="text" name="password" id="field_password" value="<?= $set->password ?>" /></td>
			</tr>
		</table>
	</div>
	
	<div style="width: 44%; float: left; border: 1px dotted #ccc;">
		<div style="padding: 0 10px;">
			<h2>Files</h2>
			<?= @helper('filelist.files', array('list'=>$list, 'path'=>$path)) ?>
		</div>
	</div>
	
	<div class="style:both;"></div>
</form>