<div class="parametersUses form">
<?php echo $this->Form->create('ParametersUse'); ?>
	<fieldset>
		<legend><?php echo __('Add parameter definition for ').$names; ?></legend>
	<?php
		echo $this->Form->input('abbrevation');
		echo $this->Form->input('parameter',array('label'=>__('Select existing parameter here')));
		echo $this->Form->input('new_parameter',array('label'=>__('or enter new parameter description here')));
		echo $this->Form->input('selector'); ?>
		<div class="input select">
			<label for="Substance">Defining Substance</label>
			<select id="Substance" name="data[ParametersUse][ref_substance_id]">
				<option value=""><?php echo __("Enter a part of a substance name in the text field below to get substances here."); ?></option>
			</select>
			<input id="specification" maxlength="2000" size="10" type="hidden" name="data[ParametersUse][spcification]" value="define"/>
			<input id="query" maxlength="2000" size="10" type="text" value="Substance name here"/>
		</div>	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php 
$controller=array('controller' => 'substances', 'action' => 'search');
$options=array(
		'update' => '#Substance',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data' => "'name='+$(query).val()"
);

$this->Js->get('#query')->event('keyup', $this->Js->request($controller,$options));
?>
