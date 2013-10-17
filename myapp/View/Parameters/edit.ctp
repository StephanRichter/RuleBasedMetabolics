<div class="parameters form">
<?php echo $this->Form->create('Parameter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parameter'); ?></legend>
	<?php
		echo $this->Form->input('pid');
		echo $this->Form->input('description');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('oldid');
		echo $this->Form->input('Substance');
		echo $this->Form->input('OldSubstance');
		echo $this->Form->input('ReferredSubstance');
		echo $this->Form->input('OldReferredSubstance');
		echo $this->Form->input('Reaction');
		echo $this->Form->input('OldReaction');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Parameter.pid')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Parameter.pid'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Parameters'), array('controller' => 'old_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reactions'), array('controller' => 'reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reaction'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
