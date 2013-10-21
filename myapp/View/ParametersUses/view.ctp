<div class="parametersUses view">
<h2><?php echo __('Parameters Use'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($parametersUse['ParametersUse']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parameter'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parametersUse['Parameter']['description'], array('controller' => 'parameters', 'action' => 'view', $parametersUse['Parameter']['pid'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Substance'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parametersUse['Substance']['id'], array('controller' => 'substances', 'action' => 'view', $parametersUse['Substance']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abbrevation'); ?></dt>
		<dd>
			<?php echo h($parametersUse['ParametersUse']['abbrevation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specification'); ?></dt>
		<dd>
			<?php echo h($parametersUse['ParametersUse']['specification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Selector'); ?></dt>
		<dd>
			<?php echo h($parametersUse['ParametersUse']['selector']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defining Substance'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parametersUse['DefiningSubstance']['id'], array('controller' => 'substances', 'action' => 'view', $parametersUse['DefiningSubstance']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parametersUse['User']['name'], array('controller' => 'users', 'action' => 'view', $parametersUse['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($parametersUse['ParametersUse']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
			<?php echo h($parametersUse['ParametersUse']['oldid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parameters Use'), array('action' => 'edit', $parametersUse['ParametersUse']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parameters Use'), array('action' => 'delete', $parametersUse['ParametersUse']['id']), null, __('Are you sure you want to delete # %s?', $parametersUse['ParametersUse']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters Uses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameters Use'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('controller' => 'parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
	</ul>
</div>
	