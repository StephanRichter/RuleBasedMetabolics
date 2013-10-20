<div class="parametersUses form">
<?php echo $this->Form->create('ParametersUse'); ?>
	<fieldset>
		<legend><?php echo __('Parameter Settings for ').$formula; ?></legend>
		This parameter is applied to the formula "<?php print $formula ?>" of 
	<?php
	
	$names=array();
	foreach ($substance['Name'] as $name){
		$names[]='"'.$name['name'].'"';
	}
	$names=implode(' / ', $names);
	print $names;
	
	print '<input type="hidden" name="data[ParametersUse][id_id]" value="'.$substance['Substance']['id'].'">';
	echo $this->Form->input('abbrevation',array('default'=>$abbrevation,'readonly'=>'true'));
	echo $this->Form->input('Parameter',array('name'=>'data[ParametersUse][parameter_pid]'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Parameters Uses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('controller' => 'parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
	</ul>
</div>
