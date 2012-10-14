<div class="researches view">
<h2><?php  echo __('Research'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($research['Research']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo $this->Html->link($research['Year']['name'], array('controller' => 'years', 'action' => 'view', $research['Year']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rstype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($research['Rstype']['name'], array('controller' => 'rstypes', 'action' => 'view', $research['Rstype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rscode'); ?></dt>
		<dd>
			<?php echo $this->Html->link($research['Rscode']['name'], array('controller' => 'rscodes', 'action' => 'view', $research['Rscode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($research['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $research['Organization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Researcher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($research['Researcher']['name'], array('controller' => 'researchers', 'action' => 'view', $research['Researcher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subresearch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($research['Subresearch']['id'], array('controller' => 'subresearches', 'action' => 'view', $research['Subresearch']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($research['Research']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($research['Research']['budget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($research['Research']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($research['Research']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qc Rs Type'); ?></dt>
		<dd>
			<?php echo h($research['Research']['qc_rs_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qc Rs Path'); ?></dt>
		<dd>
			<?php echo h($research['Research']['qc_rs_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pb Rs Type'); ?></dt>
		<dd>
			<?php echo h($research['Research']['pb_rs_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pb Rs Path'); ?></dt>
		<dd>
			<?php echo h($research['Research']['pb_rs_path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Research'), array('action' => 'edit', $research['Research']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Research'), array('action' => 'delete', $research['Research']['id']), null, __('Are you sure you want to delete # %s?', $research['Research']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Researches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Research'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rstypes'), array('controller' => 'rstypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rstype'), array('controller' => 'rstypes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rscodes'), array('controller' => 'rscodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rscode'), array('controller' => 'rscodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Researchers'), array('controller' => 'researchers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Researcher'), array('controller' => 'researchers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subresearches'), array('controller' => 'subresearches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subresearch'), array('controller' => 'subresearches', 'action' => 'add')); ?> </li>
	</ul>
</div>
