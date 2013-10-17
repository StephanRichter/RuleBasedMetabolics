<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Abbrevations'), array('controller' => 'abbrevations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abbrevation'), array('controller' => 'abbrevations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Containments'), array('controller' => 'containments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Containment'), array('controller' => 'containments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lhs'), array('controller' => 'lhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lh'), array('controller' => 'lhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Abbrevations'), array('controller' => 'old_abbrevations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Abbrevation'), array('controller' => 'old_abbrevations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Compartments'), array('controller' => 'old_compartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Compartment'), array('controller' => 'old_compartments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Compartments Enzymes'), array('controller' => 'old_compartments_enzymes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Compartments Enzyme'), array('controller' => 'old_compartments_enzymes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Containments'), array('controller' => 'old_containments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Containment'), array('controller' => 'old_containments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Enzymes'), array('controller' => 'old_enzymes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Enzyme'), array('controller' => 'old_enzymes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Enzymes Reactions'), array('controller' => 'old_enzymes_reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Enzymes Reaction'), array('controller' => 'old_enzymes_reactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Formulas'), array('controller' => 'old_formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Formula'), array('controller' => 'old_formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Lhs'), array('controller' => 'old_lhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Lh'), array('controller' => 'old_lhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Names'), array('controller' => 'old_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Name'), array('controller' => 'old_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Parameters'), array('controller' => 'old_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Parameter'), array('controller' => 'old_parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Reactions'), array('controller' => 'old_reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Reaction'), array('controller' => 'old_reactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Rhs'), array('controller' => 'old_rhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Rh'), array('controller' => 'old_rhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Substances'), array('controller' => 'old_substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Substance'), array('controller' => 'old_substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Urns'), array('controller' => 'old_urns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Urn'), array('controller' => 'old_urns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('controller' => 'parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reactions'), array('controller' => 'reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reaction'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rhs'), array('controller' => 'rhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rh'), array('controller' => 'rhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Urns'), array('controller' => 'urns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Urn'), array('controller' => 'urns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
