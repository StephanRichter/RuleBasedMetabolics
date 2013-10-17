<div class="names form">
<?php echo $this->Form->create('Name'); ?>
	<fieldset>
		<legend><?php echo __('Edit Name'); ?></legend>
	<?php
		echo $this->Form->input('nid');
		echo $this->Form->input('name');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Name.nid')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Name.nid'))); ?></li>
		<li><?php echo $this->Html->link(__('List Names'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Names'), array('controller' => 'old_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_names', 'action' => 'add')); ?> </li>
	</ul>
</div>
