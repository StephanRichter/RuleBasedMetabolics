<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="substances form">
<?php echo $this->Form->create('Substance'); ?>
	<fieldset>
		<legend><?php echo __('Add Substance'); ?></legend>
	<?php
		echo $this->Form->input('Name',array('type' => 'textarea','label' => _('Names: one per line')));
		echo $this->Form->input('Formula',array('type'=>'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
