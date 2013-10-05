<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="formulas form">
<?php echo $this->Form->create('Formula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Formula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('formula',array('type'=>'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
