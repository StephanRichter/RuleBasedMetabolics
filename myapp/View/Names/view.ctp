<div class="names view">
<h2><?php echo __('Name'); ?></h2>
	<dl>
		<dt><?php echo __('Nid'); ?></dt>
		<dd>
			<?php echo h($name['Name']['nid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($name['Name']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($name['User']['name'], array('controller' => 'users', 'action' => 'view', $name['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($name['Name']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
			<?php echo h($name['Name']['oldid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Name'), array('action' => 'edit', $name['Name']['nid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Name'), array('action' => 'delete', $name['Name']['nid']), null, __('Are you sure you want to delete # %s?', $name['Name']['nid'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Names'), array('controller' => 'old_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_names', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Old Names'); ?></h3>
	<?php if (!empty($name['History'])): ?>
		<dl>
			<dt><?php echo __('Oid'); ?></dt>
		<dd>
	<?php echo $name['History']['oid']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nid'); ?></dt>
		<dd>
	<?php echo $name['History']['nid']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $name['History']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $name['History']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
	<?php echo $name['History']['date']; ?>
&nbsp;</dd>
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
	<?php echo $name['History']['oldid']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit History'), array('controller' => 'old_names', 'action' => 'edit', $name['History']['oid'])); ?></li>
			</ul>
		</div>
	</div>
	