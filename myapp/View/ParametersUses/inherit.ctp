<div class="parametersUses form">
<?php echo $this->Form->create('ParametersUse'); ?>
	<fieldset>
		<legend><?php echo __('Add parameter definition for ').$names; ?></legend>
	<?php
		echo $this->Form->input('specification',array('type'=>'hidden','default'=>'inherited'));
		echo $this->Form->input('id_id',array('type'=>'hidden','default'=>$substance_id)); ?>
		<div class="input select">
			<label for="Substance"><?php echo __('Inherit from'); ?></label>
			<select id="Substance" name="data[ParametersUse][ref_substance_id]">
				<option value=""><?php echo __("Enter a part of a substance name in the text field below to get substances here."); ?></option>
			</select>
			<input id="query" maxlength="2000" size="10" type="text" value="Substance name here"/>
		</div><?php 
		echo $this->Form->input('repeat',array('type'=>'checkbox','label'=>__('add more definitions on the next page')));
		?>			
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php 
$controller=array('controller' => 'substances', 'action' => 'search_inheritable');
$options=array(
		'update' => '#Substance',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data' => "'name='+$(query).val()"
);

$this->Js->get('#query')->event('keyup', $this->Js->request($controller,$options));
?>
