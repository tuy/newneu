<div class="financials view">
<h2><?php  echo __('Financial'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($financial['Financial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financial['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $financial['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financial['Year']['name'], array('controller' => 'years', 'action' => 'view', $financial['Year']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subfinancial'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financial['Subfinancial']['id'], array('controller' => 'subfinancials', 'action' => 'view', $financial['Subfinancial']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Financial'), array('action' => 'edit', $financial['Financial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Financial'), array('action' => 'delete', $financial['Financial']['id']), null, __('Are you sure you want to delete # %s?', $financial['Financial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Financials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financial'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subfinancials'), array('controller' => 'subfinancials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subfinancial'), array('controller' => 'subfinancials', 'action' => 'add')); ?> </li>
	</ul>
</div>
