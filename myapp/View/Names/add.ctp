<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="names form">
<?php echo $this->Form->create('Name'); ?>
	<fieldset>
		<legend><?php echo __('Add Names'); ?></legend>
	<?php
		echo $this->Form->input('name',array('type' => 'textarea','label'=>__('Names: one per line')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

