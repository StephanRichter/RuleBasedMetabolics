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
				
		echo $this->Form->input('abbrevation',array('default'=>$abbrevation,'disabled'=>'true'));		
		echo $this->Form->input('Parameter');		
		echo $this->Form->input('specification');
		echo $this->Form->input('selector');
		echo $this->Form->input('RefSubstance');
		echo $this->Form->input('Substance',array('label'=>false,'default'=>$substance['Substance']['id'],'hidden'=>true));
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
		<li><?php echo $this->Html->link(__('List Old Parameters Uses'), array('controller' => 'old_parameters_uses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_parameters_uses', 'action' => 'add')); ?> </li>
	</ul>
</div>
