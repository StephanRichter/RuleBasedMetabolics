<div class="parameters view">
<h2><?php echo __('Parameter'); ?></h2>
	<dl>
		<dt><?php echo __('Pid'); ?></dt>
		<dd>
			<?php echo h($parameter['Parameter']['pid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($parameter['Parameter']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($parameter['User']['name'], array('controller' => 'users', 'action' => 'view', $parameter['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($parameter['Parameter']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Parameter'), array('action' => 'edit', $parameter['Parameter']['pid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Parameter'), array('action' => 'delete', $parameter['Parameter']['pid']), null, __('Are you sure you want to delete # %s?', $parameter['Parameter']['pid'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameter'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reactions'), array('controller' => 'reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reaction'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
	<h3><?php echo __('Related Substances'); ?></h3>
	<?php if (!empty($parameter['Substance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Formula Fid'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parameter['Substance'] as $substance): ?>
		<tr>
			<td><?php echo $substance['id']; ?></td>
			<td><?php echo $substance['formula_fid']; ?></td>
			<td><?php echo $substance['user_id']; ?></td>
			<td><?php echo $substance['date']; ?></td>
			<td><?php echo $substance['oldid']; ?></td>
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

<div class="related">
	<h3><?php echo __('Related Reactions'); ?></h3>
	<?php if (!empty($parameter['Reaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Spontan'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parameter['Reaction'] as $reaction): ?>
		<tr>
			<td><?php echo $reaction['id']; ?></td>
			<td><?php echo $reaction['spontan']; ?></td>
			<td><?php echo $reaction['user_id']; ?></td>
			<td><?php echo $reaction['date']; ?></td>
			<td><?php echo $reaction['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reactions', 'action' => 'view', $reaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reactions', 'action' => 'edit', $reaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reactions', 'action' => 'delete', $reaction['id']), null, __('Are you sure you want to delete # %s?', $reaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reaction'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reactions'); ?></h3>
	<?php if (!empty($parameter['OldReaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Spontan'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($parameter['OldReaction'] as $oldReaction): ?>
		<tr>
			<td><?php echo $oldReaction['id']; ?></td>
			<td><?php echo $oldReaction['spontan']; ?></td>
			<td><?php echo $oldReaction['user_id']; ?></td>
			<td><?php echo $oldReaction['date']; ?></td>
			<td><?php echo $oldReaction['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reactions', 'action' => 'view', $oldReaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reactions', 'action' => 'edit', $oldReaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reactions', 'action' => 'delete', $oldReaction['id']), null, __('Are you sure you want to delete # %s?', $oldReaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Reaction'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
