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
		<li><?php echo $this->Html->link(__('List Old Abbrevations'), array('controller' => 'old_abbrevations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Abbrevation'), array('controller' => 'old_abbrevations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Compartments'), array('controller' => 'old_compartments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Compartment'), array('controller' => 'old_compartments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Compartments Enzymes'), array('controller' => 'old_compartments_enzymes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Compartments Enzyme'), array('controller' => 'old_compartments_enzymes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Containments'), array('controller' => 'old_containments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Containment'), array('controller' => 'old_containments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Enzymes'), array('controller' => 'old_enzymes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Enzyme'), array('controller' => 'old_enzymes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Enzymes Reactions'), array('controller' => 'old_enzymes_reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Enzymes Reaction'), array('controller' => 'old_enzymes_reactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Formulas'), array('controller' => 'old_formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Formula'), array('controller' => 'old_formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Lhs'), array('controller' => 'old_lhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Lh'), array('controller' => 'old_lhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Names'), array('controller' => 'old_names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Name'), array('controller' => 'old_names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Parameters'), array('controller' => 'old_parameters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Parameter'), array('controller' => 'old_parameters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Reactions'), array('controller' => 'old_reactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Reaction'), array('controller' => 'old_reactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Rhs'), array('controller' => 'old_rhs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Rh'), array('controller' => 'old_rhs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Substances'), array('controller' => 'old_substances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Substance'), array('controller' => 'old_substances', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Old Urns'), array('controller' => 'old_urns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Old Urn'), array('controller' => 'old_urns', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Old Abbrevations'); ?></h3>
	<?php if (!empty($user['OldAbbrevation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Abbrevation'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldAbbrevation'] as $oldAbbrevation): ?>
		<tr>
			<td><?php echo $oldAbbrevation['oid']; ?></td>
			<td><?php echo $oldAbbrevation['id']; ?></td>
			<td><?php echo $oldAbbrevation['abbrevation']; ?></td>
			<td><?php echo $oldAbbrevation['user_id']; ?></td>
			<td><?php echo $oldAbbrevation['date']; ?></td>
			<td><?php echo $oldAbbrevation['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_abbrevations', 'action' => 'view', $oldAbbrevation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_abbrevations', 'action' => 'edit', $oldAbbrevation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_abbrevations', 'action' => 'delete', $oldAbbrevation['id']), null, __('Are you sure you want to delete # %s?', $oldAbbrevation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Abbrevation'), array('controller' => 'old_abbrevations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Compartments'); ?></h3>
	<?php if (!empty($user['OldCompartment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldCompartment'] as $oldCompartment): ?>
		<tr>
			<td><?php echo $oldCompartment['oid']; ?></td>
			<td><?php echo $oldCompartment['id']; ?></td>
			<td><?php echo $oldCompartment['comment']; ?></td>
			<td><?php echo $oldCompartment['user_id']; ?></td>
			<td><?php echo $oldCompartment['date']; ?></td>
			<td><?php echo $oldCompartment['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_compartments', 'action' => 'view', $oldCompartment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_compartments', 'action' => 'edit', $oldCompartment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_compartments', 'action' => 'delete', $oldCompartment['id']), null, __('Are you sure you want to delete # %s?', $oldCompartment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Compartment'), array('controller' => 'old_compartments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Compartments Enzymes'); ?></h3>
	<?php if (!empty($user['OldCompartmentsEnzyme'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Compartment Id'); ?></th>
		<th><?php echo __('Enzyme Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldCompartmentsEnzyme'] as $oldCompartmentsEnzyme): ?>
		<tr>
			<td><?php echo $oldCompartmentsEnzyme['oid']; ?></td>
			<td><?php echo $oldCompartmentsEnzyme['id']; ?></td>
			<td><?php echo $oldCompartmentsEnzyme['compartment_id']; ?></td>
			<td><?php echo $oldCompartmentsEnzyme['enzyme_id']; ?></td>
			<td><?php echo $oldCompartmentsEnzyme['user_id']; ?></td>
			<td><?php echo $oldCompartmentsEnzyme['date']; ?></td>
			<td><?php echo $oldCompartmentsEnzyme['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_compartments_enzymes', 'action' => 'view', $oldCompartmentsEnzyme['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_compartments_enzymes', 'action' => 'edit', $oldCompartmentsEnzyme['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_compartments_enzymes', 'action' => 'delete', $oldCompartmentsEnzyme['id']), null, __('Are you sure you want to delete # %s?', $oldCompartmentsEnzyme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Compartments Enzyme'), array('controller' => 'old_compartments_enzymes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Containments'); ?></h3>
	<?php if (!empty($user['OldContainment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Compartment Id'); ?></th>
		<th><?php echo __('Container Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldContainment'] as $oldContainment): ?>
		<tr>
			<td><?php echo $oldContainment['oid']; ?></td>
			<td><?php echo $oldContainment['id']; ?></td>
			<td><?php echo $oldContainment['compartment_id']; ?></td>
			<td><?php echo $oldContainment['container_id']; ?></td>
			<td><?php echo $oldContainment['user_id']; ?></td>
			<td><?php echo $oldContainment['date']; ?></td>
			<td><?php echo $oldContainment['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_containments', 'action' => 'view', $oldContainment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_containments', 'action' => 'edit', $oldContainment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_containments', 'action' => 'delete', $oldContainment['id']), null, __('Are you sure you want to delete # %s?', $oldContainment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Containment'), array('controller' => 'old_containments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Enzymes'); ?></h3>
	<?php if (!empty($user['OldEnzyme'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ecnumber'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldEnzyme'] as $oldEnzyme): ?>
		<tr>
			<td><?php echo $oldEnzyme['oid']; ?></td>
			<td><?php echo $oldEnzyme['id']; ?></td>
			<td><?php echo $oldEnzyme['ecnumber']; ?></td>
			<td><?php echo $oldEnzyme['user_id']; ?></td>
			<td><?php echo $oldEnzyme['date']; ?></td>
			<td><?php echo $oldEnzyme['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_enzymes', 'action' => 'view', $oldEnzyme['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_enzymes', 'action' => 'edit', $oldEnzyme['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_enzymes', 'action' => 'delete', $oldEnzyme['id']), null, __('Are you sure you want to delete # %s?', $oldEnzyme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Enzyme'), array('controller' => 'old_enzymes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Enzymes Reactions'); ?></h3>
	<?php if (!empty($user['OldEnzymesReaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Enzyme Id'); ?></th>
		<th><?php echo __('Reaction Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldEnzymesReaction'] as $oldEnzymesReaction): ?>
		<tr>
			<td><?php echo $oldEnzymesReaction['oid']; ?></td>
			<td><?php echo $oldEnzymesReaction['id']; ?></td>
			<td><?php echo $oldEnzymesReaction['enzyme_id']; ?></td>
			<td><?php echo $oldEnzymesReaction['reaction_id']; ?></td>
			<td><?php echo $oldEnzymesReaction['user_id']; ?></td>
			<td><?php echo $oldEnzymesReaction['date']; ?></td>
			<td><?php echo $oldEnzymesReaction['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_enzymes_reactions', 'action' => 'view', $oldEnzymesReaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_enzymes_reactions', 'action' => 'edit', $oldEnzymesReaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_enzymes_reactions', 'action' => 'delete', $oldEnzymesReaction['id']), null, __('Are you sure you want to delete # %s?', $oldEnzymesReaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Enzymes Reaction'), array('controller' => 'old_enzymes_reactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Formulas'); ?></h3>
	<?php if (!empty($user['OldFormula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Fid'); ?></th>
		<th><?php echo __('Formula'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldFormula'] as $oldFormula): ?>
		<tr>
			<td><?php echo $oldFormula['oid']; ?></td>
			<td><?php echo $oldFormula['fid']; ?></td>
			<td><?php echo $oldFormula['formula']; ?></td>
			<td><?php echo $oldFormula['user_id']; ?></td>
			<td><?php echo $oldFormula['date']; ?></td>
			<td><?php echo $oldFormula['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_formulas', 'action' => 'view', $oldFormula['oid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_formulas', 'action' => 'edit', $oldFormula['oid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_formulas', 'action' => 'delete', $oldFormula['oid']), null, __('Are you sure you want to delete # %s?', $oldFormula['oid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Formula'), array('controller' => 'old_formulas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Lhs'); ?></h3>
	<?php if (!empty($user['OldLh'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reaction Id'); ?></th>
		<th><?php echo __('Substance Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldLh'] as $oldLh): ?>
		<tr>
			<td><?php echo $oldLh['oid']; ?></td>
			<td><?php echo $oldLh['id']; ?></td>
			<td><?php echo $oldLh['reaction_id']; ?></td>
			<td><?php echo $oldLh['substance_id']; ?></td>
			<td><?php echo $oldLh['user_id']; ?></td>
			<td><?php echo $oldLh['date']; ?></td>
			<td><?php echo $oldLh['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_lhs', 'action' => 'view', $oldLh['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_lhs', 'action' => 'edit', $oldLh['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_lhs', 'action' => 'delete', $oldLh['id']), null, __('Are you sure you want to delete # %s?', $oldLh['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Lh'), array('controller' => 'old_lhs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Names'); ?></h3>
	<?php if (!empty($user['OldName'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Nid'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldName'] as $oldName): ?>
		<tr>
			<td><?php echo $oldName['oid']; ?></td>
			<td><?php echo $oldName['nid']; ?></td>
			<td><?php echo $oldName['name']; ?></td>
			<td><?php echo $oldName['user_id']; ?></td>
			<td><?php echo $oldName['date']; ?></td>
			<td><?php echo $oldName['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_names', 'action' => 'view', $oldName['oid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_names', 'action' => 'edit', $oldName['oid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_names', 'action' => 'delete', $oldName['oid']), null, __('Are you sure you want to delete # %s?', $oldName['oid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Name'), array('controller' => 'old_names', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Parameters'); ?></h3>
	<?php if (!empty($user['OldParameter'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Pid'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldParameter'] as $oldParameter): ?>
		<tr>
			<td><?php echo $oldParameter['oid']; ?></td>
			<td><?php echo $oldParameter['pid']; ?></td>
			<td><?php echo $oldParameter['description']; ?></td>
			<td><?php echo $oldParameter['user_id']; ?></td>
			<td><?php echo $oldParameter['date']; ?></td>
			<td><?php echo $oldParameter['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_parameters', 'action' => 'view', $oldParameter['oid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_parameters', 'action' => 'edit', $oldParameter['oid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_parameters', 'action' => 'delete', $oldParameter['oid']), null, __('Are you sure you want to delete # %s?', $oldParameter['oid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Parameter'), array('controller' => 'old_parameters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Reactions'); ?></h3>
	<?php if (!empty($user['OldReaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Spontan'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldReaction'] as $oldReaction): ?>
		<tr>
			<td><?php echo $oldReaction['oid']; ?></td>
			<td><?php echo $oldReaction['id']; ?></td>
			<td><?php echo $oldReaction['spontan']; ?></td>
			<td><?php echo $oldReaction['user_id']; ?></td>
			<td><?php echo $oldReaction['date']; ?></td>
			<td><?php echo $oldReaction['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_reactions', 'action' => 'view', $oldReaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_reactions', 'action' => 'edit', $oldReaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_reactions', 'action' => 'delete', $oldReaction['id']), null, __('Are you sure you want to delete # %s?', $oldReaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Reaction'), array('controller' => 'old_reactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Rhs'); ?></h3>
	<?php if (!empty($user['OldRh'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reaction Id'); ?></th>
		<th><?php echo __('Substance Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldRh'] as $oldRh): ?>
		<tr>
			<td><?php echo $oldRh['oid']; ?></td>
			<td><?php echo $oldRh['id']; ?></td>
			<td><?php echo $oldRh['reaction_id']; ?></td>
			<td><?php echo $oldRh['substance_id']; ?></td>
			<td><?php echo $oldRh['user_id']; ?></td>
			<td><?php echo $oldRh['date']; ?></td>
			<td><?php echo $oldRh['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_rhs', 'action' => 'view', $oldRh['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_rhs', 'action' => 'edit', $oldRh['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_rhs', 'action' => 'delete', $oldRh['id']), null, __('Are you sure you want to delete # %s?', $oldRh['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Rh'), array('controller' => 'old_rhs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Substances'); ?></h3>
	<?php if (!empty($user['OldSubstance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Formula Fid'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldSubstance'] as $oldSubstance): ?>
		<tr>
			<td><?php echo $oldSubstance['oid']; ?></td>
			<td><?php echo $oldSubstance['id']; ?></td>
			<td><?php echo $oldSubstance['formula_fid']; ?></td>
			<td><?php echo $oldSubstance['user_id']; ?></td>
			<td><?php echo $oldSubstance['date']; ?></td>
			<td><?php echo $oldSubstance['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_substances', 'action' => 'view', $oldSubstance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_substances', 'action' => 'edit', $oldSubstance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_substances', 'action' => 'delete', $oldSubstance['id']), null, __('Are you sure you want to delete # %s?', $oldSubstance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Substance'), array('controller' => 'old_substances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Old Urns'); ?></h3>
	<?php if (!empty($user['OldUrn'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Oid'); ?></th>
		<th><?php echo __('Uid'); ?></th>
		<th><?php echo __('Id Id'); ?></th>
		<th><?php echo __('Urn'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Oldid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['OldUrn'] as $oldUrn): ?>
		<tr>
			<td><?php echo $oldUrn['oid']; ?></td>
			<td><?php echo $oldUrn['uid']; ?></td>
			<td><?php echo $oldUrn['id_id']; ?></td>
			<td><?php echo $oldUrn['urn']; ?></td>
			<td><?php echo $oldUrn['user_id']; ?></td>
			<td><?php echo $oldUrn['date']; ?></td>
			<td><?php echo $oldUrn['oldid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'old_urns', 'action' => 'view', $oldUrn['oid'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'old_urns', 'action' => 'edit', $oldUrn['oid'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'old_urns', 'action' => 'delete', $oldUrn['oid']), null, __('Are you sure you want to delete # %s?', $oldUrn['oid'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Old Urn'), array('controller' => 'old_urns', 'action' => 'add')); ?> </li>
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
