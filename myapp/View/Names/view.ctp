<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="names view">
<h2><?php echo __('Name'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($name['Name']['id']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Name'), array('action' => 'edit', $name['Name']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Name'), array('action' => 'delete', $name['Name']['id']), null, __('Are you sure you want to delete # %s?', $name['Name']['id'])); ?> </li>
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
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Formula'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($name['Substance'] as $substance): ?>
		<tr>
			<td><?php echo $substance['id']; ?></td>
			<td><?php echo $substance['formula']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'substances', 'action' => 'view', $substance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'substances', 'action' => 'edit', $substance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'substances', 'action' => 'delete', $substance['id']), null, __('Are you sure you want to delete # %s?', $substance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
