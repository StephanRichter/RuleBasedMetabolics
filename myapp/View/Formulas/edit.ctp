<div class="formulas form">
<?php echo $this->Form->create('Formula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Formula'); ?></legend>
	<?php
		echo $this->Form->input('fid');
		echo $this->Form->input('formula');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Formula.fid')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Formula.fid'))); ?></li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Formulas'), array('controller' => 'old_formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_formulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
