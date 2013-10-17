<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add First User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('name',array('label' => __('Real Name'),'type'=>'string'));
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
