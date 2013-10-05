<div class="actions">
	<?php echo $this->Html->link(__('Logout'),array('controller'=>'users','action'=>'logout')); ?>
	<?php echo $this->Html->link(__('Profile'),array('controller'=>'users','action'=>'view')); ?>
</div>

<?php echo $this->fetch('content');
$exclude=explode(',',$this->fetch('exclude'));
?>

<div class="actions">
	<h3>
		<?php echo __('Actions'); ?>
	</h3>
	<ul>
		<li><?php if (!in_array('name', $exclude)) echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?>
		</li>
		<li><?php if (!in_array('formula', $exclude)) echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?>
		</li>
		<li><?php if (!in_array('parameter', $exclude)) echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?>
		</li>
		<li><?php if (!in_array('substance', $exclude)) echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?>
		</li>
	</ul>
</div>
<div class="actions">
	<h3>
		<?php echo __('Lists'); ?>
	</h3>
	<ul>
		<li><?php if (!in_array('name', $exclude)) echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?>
		</li>
		<li><?php if (!in_array('formula', $exclude)) echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?>
		</li>
		<li><?php if (!in_array('parameter', $exclude)) echo $this->Html->link(__('List Parameters'), array('controller' => 'parameters', 'action' => 'index')); ?>
		</li>
		<li><?php if (!in_array('substance', $exclude)) echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?>
		</li>
	</ul>
</div>
