<div class="qasystems view">
<h2><?php  echo __('Qasystem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($qasystem['Qasystem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qasystem['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $qasystem['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qasystem['Year']['name'], array('controller' => 'years', 'action' => 'view', $qasystem['Year']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subqasystem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($qasystem['Subqasystem']['id'], array('controller' => 'subqasystems', 'action' => 'view', $qasystem['Subqasystem']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Qasystem'), array('action' => 'edit', $qasystem['Qasystem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Qasystem'), array('action' => 'delete', $qasystem['Qasystem']['id']), null, __('Are you sure you want to delete # %s?', $qasystem['Qasystem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Qasystems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Qasystem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subqasystems'), array('controller' => 'subqasystems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subqasystem'), array('controller' => 'subqasystems', 'action' => 'add')); ?> </li>
	</ul>
</div>
