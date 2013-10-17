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
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['oldid']); ?>
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
		<li><?php echo $this->Html->link(__('List Old Formulas'), array('controller' => 'old_formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New History'), array('controller' => 'old_formulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Old Formulas'); ?></h3>
	<?php if (!empty($formula['History'])): ?>
		<dl>
			<dt><?php echo __('Oid'); ?></dt>
		<dd>
	<?php echo $formula['History']['oid']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fid'); ?></dt>
		<dd>
	<?php echo $formula['History']['fid']; ?>
&nbsp;</dd>
		<dt><?php echo __('Formula'); ?></dt>
		<dd>
	<?php echo $formula['History']['formula']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $formula['History']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
	<?php echo $formula['History']['date']; ?>
&nbsp;</dd>
		<dt><?php echo __('Oldid'); ?></dt>
		<dd>
	<?php echo $formula['History']['oldid']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit History'), array('controller' => 'old_formulas', 'action' => 'edit', $formula['History']['oid'])); ?></li>
			</ul>
		</div>
	</div>
	