<div class="substances index">
	<h2><?php echo __('Substances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('formula_fid'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($substances as $substance): ?>
	<tr>
		<td><?php echo h($substance['Substance']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($substance['Formula']['formula'], array('controller' => 'formulas', 'action' => 'view', $substance['Formula']['fid'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($substance['User']['name'], array('controller' => 'users', 'action' => 'view', $substance['User']['id'])); ?>
		</td>
		<td><?php echo h($substance['Substance']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $substance['Substance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $substance['Substance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $substance['Substance']['id']), null, __('Are you sure you want to delete # %s?', $substance['Substance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Substance'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reactions'), array('controller' => 'reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New L H S'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
