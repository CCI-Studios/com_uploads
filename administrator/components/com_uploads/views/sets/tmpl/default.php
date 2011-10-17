<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th align="center" width="1%"><?= @helper('grid.checkall') ?></th>
				
				<th><?= @helper('grid.sort', array('column' => 'title')) ?></th>
				<th width="150px"><?= @helper('grid.sort', array('column' => 'folder')) ?></th>
				<th width="150px"><?= @text('Password') ?></th>
			
				<!-- <th width="1%"><?= @helper('grid.sort', array('column'=>'enabled')) ?></th> -->
				<th width="1%"><?= @text('id') ?></th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($sets as $set): ?>
			<tr>
				<td><?= @helper('grid.checkbox', array('row' => $set)) ?></td>
				
				<td><a href="<?= @route('view=set&id='. $set->id) ?>">
					<?= $set->title ?>
				</a></td>
				<td align="center"><?= $set->folder ?></td>
				<td align="center"><?= $set->password ?></td>
				
				<!-- <td align="center"><?= @helper('grid.enable', array('row' => $set)) ?></td> -->
				<td align="center"><?= $set->id ?></td>
			</tr>
			<? endforeach; ?>
		</tbody>
		
		<tfoot>
			<tr>
				<td colspan="5" align="center"><?= @helper('paginator.pagination'); ?></td>
			</tr>
		</tfoot>
		
	</table>
</form>