<div class="parametersUses form">
<?php echo $this->Form->create('ParametersUse'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parameters Use'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('parameter_pid');
		echo $this->Form->input('id_id');
		echo $this->Form->input('abbrevation');
		echo $this->Form->input('specification');
		echo $this->Form->input('selector');
		echo $this->Form->input('ref_substance_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('oldid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ParametersUse.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ParametersUse.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parameters Uses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('controller' => 'parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Parameters Uses'), array('controller' => 'old_parameters_uses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_parameters_uses', 'action' => 'add')); ?> </li>
	</ul>
</div>