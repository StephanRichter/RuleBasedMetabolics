<div class="parametersUses index">
	<h2><?php echo __('Parameters Uses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('puid'); ?></th>
			<th><?php echo $this->Paginator->sort('parameter_pid'); ?></th>
			<th><?php echo $this->Paginator->sort('id_id'); ?></th>
			<th><?php echo $this->Paginator->sort('abbrevation'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('oldid'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parametersUses as $parametersUse): ?>
	<tr>
		<td><?php echo h($parametersUse['ParametersUse']['puid']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parametersUse['Parameter']['description'], array('controller' => 'parameters', 'action' => 'view', $parametersUse['Parameter']['pid'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($parametersUse['Substance']['id'], array('controller' => 'substances', 'action' => 'view', $parametersUse['Substance']['id'])); ?>
		</td>
		<td><?php echo h($parametersUse['ParametersUse']['abbrevation']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($parametersUse['User']['name'], array('controller' => 'users', 'action' => 'view', $parametersUse['User']['id'])); ?>
		</td>
		<td><?php echo h($parametersUse['ParametersUse']['date']); ?>&nbsp;</td>
		<td><?php echo h($parametersUse['ParametersUse']['oldid']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $parametersUse['ParametersUse']['puid'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $parametersUse['ParametersUse']['puid'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $parametersUse['ParametersUse']['puid']), null, __('Are you sure you want to delete # %s?', $parametersUse['ParametersUse']['puid'])); ?>
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
		<li><?php echo $this->Html->link(__('New Parameters Use'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('controller' => 'parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
	</ul>
</div>
