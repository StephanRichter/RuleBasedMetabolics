<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Abbrevations'), array('controller' => 'abbrevations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Abbrevation'), array('controller' => 'abbrevations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Containments'), array('controller' => 'containments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Containment'), array('controller' => 'containments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lhs'), array('controller' => 'lhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lh'), array('controller' => 'lhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parameters'), array('controller' => 'parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reactions'), array('controller' => 'reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reaction'), array('controller' => 'reactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rhs'), array('controller' => 'rhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rh'), array('controller' => 'rhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Substances'), array('controller' => 'substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Substance'), array('controller' => 'substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Urns'), array('controller' => 'urns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Urn'), array('controller' => 'urns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Abbrevations'); ?></h3>
	<?php if (!empty($user['Abbrevation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Abbrevation'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Abbrevation'] as $abbrevation): ?>
		<tr>
			<td><?php echo $abbrevation['id']; ?></td>
			<td><?php echo $abbrevation['abbrevation']; ?></td>
			<td><?php echo $abbrevation['user_id']; ?></td>
			<td><?php echo $abbrevation['date']; ?></td>
			<td><?php echo $abbrevation['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'abbrevations', 'action' => 'view', $abbrevation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'abbrevations', 'action' => 'edit', $abbrevation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'abbrevations', 'action' => 'delete', $abbrevation['id']), null, __('Are you sure you want to delete # %s?', $abbrevation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Abbrevation'), array('controller' => 'abbrevations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Containments'); ?></h3>
	<?php if (!empty($user['Containment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Compartment Id'); ?></th>
		<th><?php echo __('Container Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Containment'] as $containment): ?>
		<tr>
			<td><?php echo $containment['id']; ?></td>
			<td><?php echo $containment['compartment_id']; ?></td>
			<td><?php echo $containment['container_id']; ?></td>
			<td><?php echo $containment['user_id']; ?></td>
			<td><?php echo $containment['date']; ?></td>
			<td><?php echo $containment['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'containments', 'action' => 'view', $containment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'containments', 'action' => 'edit', $containment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'containments', 'action' => 'delete', $containment['id']), null, __('Are you sure you want to delete # %s?', $containment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Containment'), array('controller' => 'containments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Formulas'); ?></h3>
	<?php if (!empty($user['Formula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Fid'); ?></th>
		<th><?php echo __('Formula'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Formula'] as $formula): ?>
		<tr>
			<td><?php echo $formula['fid']; ?></td>
			<td><?php echo $formula['formula']; ?></td>
			<td><?php echo $formula['user_id']; ?></td>
			<td><?php echo $formula['date']; ?></td>
			<td><?php echo $formula['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'formulas', 'action' => 'view', $formula['fid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'formulas', 'action' => 'edit', $formula['fid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'formulas', 'action' => 'delete', $formula['fid']), null, __('Are you sure you want to delete # %s?', $formula['fid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lhs'); ?></h3>
	<?php if (!empty($user['Lh'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reaction Id'); ?></th>
		<th><?php echo __('Substance Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Lh'] as $lh): ?>
		<tr>
			<td><?php echo $lh['id']; ?></td>
			<td><?php echo $lh['reaction_id']; ?></td>
			<td><?php echo $lh['substance_id']; ?></td>
			<td><?php echo $lh['user_id']; ?></td>
			<td><?php echo $lh['date']; ?></td>
			<td><?php echo $lh['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lhs', 'action' => 'view', $lh['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lhs', 'action' => 'edit', $lh['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lhs', 'action' => 'delete', $lh['id']), null, __('Are you sure you want to delete # %s?', $lh['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lh'), array('controller' => 'lhs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Names'); ?></h3>
	<?php if (!empty($user['Name'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nid'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Name'] as $name): ?>
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
	<h3><?php echo __('Related Parameters'); ?></h3>
	<?php if (!empty($user['Parameter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Parameter'] as $parameter): ?>
		<tr>
			<td><?php echo $parameter['pid']; ?></td>
			<td><?php echo $parameter['description']; ?></td>
			<td><?php echo $parameter['user_id']; ?></td>
			<td><?php echo $parameter['date']; ?></td>
			<td><?php echo $parameter['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'parameters', 'action' => 'view', $parameter['pid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'parameters', 'action' => 'edit', $parameter['pid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'parameters', 'action' => 'delete', $parameter['pid']), null, __('Are you sure you want to delete # %s?', $parameter['pid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Parameter'), array('controller' => 'parameters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reactions'); ?></h3>
	<?php if (!empty($user['Reaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Spontan'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Reaction'] as $reaction): ?>
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
	<h3><?php echo __('Related Rhs'); ?></h3>
	<?php if (!empty($user['Rh'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reaction Id'); ?></th>
		<th><?php echo __('Substance Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Rh'] as $rh): ?>
		<tr>
			<td><?php echo $rh['id']; ?></td>
			<td><?php echo $rh['reaction_id']; ?></td>
			<td><?php echo $rh['substance_id']; ?></td>
			<td><?php echo $rh['user_id']; ?></td>
			<td><?php echo $rh['date']; ?></td>
			<td><?php echo $rh['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rhs', 'action' => 'view', $rh['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rhs', 'action' => 'edit', $rh['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rhs', 'action' => 'delete', $rh['id']), null, __('Are you sure you want to delete # %s?', $rh['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rh'), array('controller' => 'rhs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Substances'); ?></h3>
	<?php if (!empty($user['Substance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Formula Fid'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Substance'] as $substance): ?>
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
	<h3><?php echo __('Related Urns'); ?></h3>
	<?php if (!empty($user['Urn'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Uid'); ?></th>
		<th><?php echo __('Id Id'); ?></th>
		<th><?php echo __('Urn'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Urn'] as $urn): ?>
		<tr>
			<td><?php echo $urn['uid']; ?></td>
			<td><?php echo $urn['id_id']; ?></td>
			<td><?php echo $urn['urn']; ?></td>
			<td><?php echo $urn['user_id']; ?></td>
			<td><?php echo $urn['date']; ?></td>
			<td><?php echo $urn['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'urns', 'action' => 'view', $urn['uid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'urns', 'action' => 'edit', $urn['uid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'urns', 'action' => 'delete', $urn['uid']), null, __('Are you sure you want to delete # %s?', $urn['uid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Urn'), array('controller' => 'urns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($user['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('View'); ?></th>
		<th><?php echo __('Ins'); ?></th>
		<th><?php echo __('Edit'); ?></th>
		<th><?php echo __('Del'); ?></th>
		<th><?php echo __('Recover'); ?></th>
		<th><?php echo __('User Management'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['role']; ?></td>
			<td><?php echo $role['description']; ?></td>
			<td><?php echo $role['view']; ?></td>
			<td><?php echo $role['ins']; ?></td>
			<td><?php echo $role['edit']; ?></td>
			<td><?php echo $role['del']; ?></td>
			<td><?php echo $role['recover']; ?></td>
			<td><?php echo $role['user_management']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), null, __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
