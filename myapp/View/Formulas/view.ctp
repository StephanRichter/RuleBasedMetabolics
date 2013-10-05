<?php $this->extend('/Common/view');	
	$this->assign('exclude','items');
?>
<div class="formulas view">
<h2><?php echo __('Formula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formula'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['formula']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formula'), array('action' => 'edit', $formula['Formula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formula'), array('action' => 'delete', $formula['Formula']['id']), null, __('Are you sure you want to delete # %s?', $formula['Formula']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Substances'); ?></h3>
	<?php if (!empty($formula['Substance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Formula Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formula['Substance'] as $substance): ?>
		<tr>
			<td><?php echo $substance['id']; ?></td>
			<td><?php echo $substance['formula_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'substances', 'action' => 'view', $substance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'substances', 'action' => 'edit', $substance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'substances', 'action' => 'delete', $substance['id']), null, __('Are you sure you want to delete # %s?', $substance['id'])); ?>
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
