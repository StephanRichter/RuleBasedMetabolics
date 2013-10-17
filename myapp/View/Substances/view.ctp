<div class="substances view">
<h2><?php echo __('Substance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($substance['Substance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($substance['Formula']['formula'], array('controller' => 'formulas', 'action' => 'view', $substance['Formula']['fid'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($substance['User']['name'], array('controller' => 'users', 'action' => 'view', $substance['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($substance['Substance']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
			<?php echo h($substance['Substance']['oldid']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Substance'), array('action' => 'edit', $substance['Substance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Substance'), array('action' => 'delete', $substance['Substance']['id']), null, __('Are you sure you want to delete # %s?', $substance['Substance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Substances'), array('controller' => 'old_substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reactions'), array('controller' => 'reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New L H S'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Old Substances'); ?></h3>
	<?php if (!empty($substance['History'])): ?>
		<dl>
			<dt><?php echo __('Oid'); ?></dt>
		<dd>
	<?php echo $substance['History']['oid']; ?>
&nbsp;</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $substance['History']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Formula Fid'); ?></dt>
		<dd>
	<?php echo $substance['History']['formula_fid']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $substance['History']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
	<?php echo $substance['History']['date']; ?>
&nbsp;</dd>
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
	<?php echo $substance['History']['oldid']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit History'), array('controller' => 'old_substances', 'action' => 'edit', $substance['History']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Names'); ?></h3>
	<?php if (!empty($substance['Name'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nid'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($substance['Name'] as $name): ?>
		<tr>
			<td><?php echo $name['nid']; ?></td>
			<td><?php echo $name['name']; ?></td>
			<td><?php echo $name['user_id']; ?></td>
			<td><?php echo $name['date']; ?></td>
			<td><?php echo $name['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'names', 'action' => 'view', $name['nid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'names', 'action' => 'edit', $name['nid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'names', 'action' => 'delete', $name['nid']), null, __('Are you sure you want to delete # %s?', $name['nid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reactions'); ?></h3>
	<?php if (!empty($substance['LHS'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Spontan'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($substance['LHS'] as $lHS): ?>
		<tr>
			<td><?php echo $lHS['id']; ?></td>
			<td><?php echo $lHS['spontan']; ?></td>
			<td><?php echo $lHS['user_id']; ?></td>
			<td><?php echo $lHS['date']; ?></td>
			<td><?php echo $lHS['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reactions', 'action' => 'view', $lHS['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reactions', 'action' => 'edit', $lHS['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reactions', 'action' => 'delete', $lHS['id']), null, __('Are you sure you want to delete # %s?', $lHS['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New L H S'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reactions'); ?></h3>
	<?php if (!empty($substance['RHS'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Spontan'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($substance['RHS'] as $rHS): ?>
		<tr>
			<td><?php echo $rHS['id']; ?></td>
			<td><?php echo $rHS['spontan']; ?></td>
			<td><?php echo $rHS['user_id']; ?></td>
			<td><?php echo $rHS['date']; ?></td>
			<td><?php echo $rHS['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reactions', 'action' => 'view', $rHS['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reactions', 'action' => 'edit', $rHS['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reactions', 'action' => 'delete', $rHS['id']), null, __('Are you sure you want to delete # %s?', $rHS['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New R H S'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
