<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
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
