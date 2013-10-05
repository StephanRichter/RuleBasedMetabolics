<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="parameters form">
<?php echo $this->Form->create('Parameter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Parameter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('Substance');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
