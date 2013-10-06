<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="substances index">
	<h2><?php echo __('Substances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('formula_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($substances as $substance): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($substance['Name'][0]['name'], array('controller' => 'formulas', 'action' => 'view', $substance['Formula']['id'])); ?>
		</td>
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
