<div class="formulas view">
<h2><?php echo __('Formula'); ?></h2>
	<dl>
		<dt><?php echo __('Fid'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['fid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formula'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['formula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formula['User']['name'], array('controller' => 'users', 'action' => 'view', $formula['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formula'), array('action' => 'edit', $formula['Formula']['fid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formula'), array('action' => 'delete', $formula['Formula']['fid']), null, __('Are you sure you want to delete # %s?', $formula['Formula']['fid'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
	