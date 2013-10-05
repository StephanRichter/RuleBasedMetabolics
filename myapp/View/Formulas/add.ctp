<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="formulas form">
<?php echo $this->Form->create('Formula'); ?>
	<fieldset>
		<legend><?php echo __('Add Formula'); ?></legend>
	<?php
		echo $this->Form->input('formula',array('type'=>'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
