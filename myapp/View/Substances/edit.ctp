<div class="substances form">
<?php echo $this->Form->create('Substance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Substance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('formula_fid');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('oldid');
		echo $this->Form->input('Name');
		echo $this->Form->input('LHS');
		echo $this->Form->input('RHS');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Substance.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Substance.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Substances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Substances'), array('controller' => 'old_substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reactions'), array('controller' => 'reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New L H S'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
