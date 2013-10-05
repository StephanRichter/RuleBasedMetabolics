<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="substances form">
<?php echo $this->Form->create('Substance'); ?>
	<fieldset>
		<legend><?php echo __('Add Substance'); ?></legend>
	<?php
		echo $this->Form->input('formula');
		echo $this->Form->input('Name');
		echo $this->Form->input('Parameter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
