<div class="names index">
	<h2><?php echo __('Names'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nid'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('oldid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($names as $name): ?>
	<tr>
		<td><?php echo h($name['Name']['nid']); ?>&nbsp;</td>
		<td><?php echo h($name['Name']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($name['User']['name'], array('controller' => 'users', 'action' => 'view', $name['User']['id'])); ?>
		</td>
		<td><?php echo h($name['Name']['date']); ?>&nbsp;</td>
		<td><?php echo h($name['Name']['oldid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $name['Name']['nid'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $name['Name']['nid'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $name['Name']['nid']), null, __('Are you sure you want to delete # %s?', $name['Name']['nid'])); ?>
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
		<li><?php echo $this->Html->link(__('New Name'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Names'), array('controller' => 'old_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_names', 'action' => 'add')); ?> </li>
	</ul>
</div>
