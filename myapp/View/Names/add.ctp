<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="names form">
<?php echo $this->Form->create('Name'); ?>
	<fieldset>
		<legend><?php echo __('Add Name'); ?></legend>
	<?php
		echo $this->Form->input('name',array('type' => 'text'));
		echo $this->Form->input('Substance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

