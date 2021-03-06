<?php $this->extend('/Common/view');	
$this->assign('exclude','items');
?>
<div class="substances view">
	<h2>
		<?php echo __('Substance'); ?>
	</h2>
	<dl>
		<dt>
			<?php echo __('Id'); ?>
		</dt>
		<dd>
			<?php echo h($substance['Substance']['id']); ?>
			&nbsp;
		</dd>
		<dt>
			<?php echo __('Names'); ?>
		</dt>
		<dd>
			<?php if (!empty($substance['Name'])): ?>
				<?php foreach ($substance['Name'] as $name): ?>
				<?php echo $name['name']; ?><br/>
				<?php endforeach; ?>
			<?php endif; ?>

		</dd>
		<dt>
			<?php echo __('Formula'); ?>
		</dt>
		<dd>
			<?php echo $this->Html->link($substance['Formula']['formula'], array('controller' => 'formulas', 'action' => 'view', $substance['Formula']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3>
		<?php echo __('Related Parameters'); ?>
	</h3>
	<?php if (!empty($substance['Parameter'])): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($substance['Parameter'] as $parameter): ?>
		<tr>
			<td><?php echo $parameter['id']; ?></td>
			<td><?php echo $parameter['description']; ?></td>
			<td class="actions"><?php echo $this->Html->link(__('View'), array('controller' => 'parameters', 'action' => 'view', $parameter['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'parameters', 'action' => 'edit', $parameter['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'parameters', 'action' => 'delete', $parameter['id']), null, __('Are you sure you want to delete # %s?', $parameter['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
</div>
