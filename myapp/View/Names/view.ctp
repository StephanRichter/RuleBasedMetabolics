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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Name'), array('action' => 'edit', $name['Name']['nid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Name'), array('action' => 'delete', $name['Name']['nid']), null, __('Are you sure you want to delete # %s?', $name['Name']['nid'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Substances'); ?></h3>
	<?php if (!empty($name['Substance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Sid'); ?></th>
		<th><?php echo __('Formula'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($name['Substance'] as $substance): ?>
		<tr>
			<td><?php echo $substance['sid']; ?></td>
			<td><?php echo $substance['formula']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'substances', 'action' => 'view', $substance['sid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'substances', 'action' => 'edit', $substance['sid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'substances', 'action' => 'delete', $substance['sid']), null, __('Are you sure you want to delete # %s?', $substance['sid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
