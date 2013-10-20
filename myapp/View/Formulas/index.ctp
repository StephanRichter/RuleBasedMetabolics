<div class="formulas index">
	<h2><?php echo __('Formulas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('fid'); ?></th>
			<th><?php echo $this->Paginator->sort('formula'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('oldid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formulas as $formula): ?>
	<tr>
		<td><?php echo h($formula['Formula']['fid']); ?>&nbsp;</td>
		<td><?php echo h($formula['Formula']['formula']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($formula['User']['name'], array('controller' => 'users', 'action' => 'view', $formula['User']['id'])); ?>
		</td>
		<td><?php echo h($formula['Formula']['date']); ?>&nbsp;</td>
		<td><?php echo h($formula['Formula']['oldid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formula['Formula']['fid'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formula['Formula']['fid'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formula['Formula']['fid']), null, __('Are you sure you want to delete # %s?', $formula['Formula']['fid'])); ?>
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
		<li><?php echo $this->Html->link(__('New Formula'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
