<div class="names form">
<?php echo $this->Form->create('Name'); ?>
	<fieldset>
		<legend><?php echo __('Edit Name'); ?></legend>
	<?php
		echo $this->Form->input('nid');
		echo $this->Form->input('name');
		echo $this->Form->input('Substance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Name.nid')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Name.nid'))); ?></li>
		<li><?php echo $this->Html->link(__('List Names'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
	</ul>
</div>
