<div class="subcultures view">
<h2><?php  echo __('Subculture'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C System Type'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_system_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C System Path'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_system_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Upgrade Type'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_upgrade_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Upgrade Path'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_upgrade_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Publish Type'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_publish_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Publish Path'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_publish_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Estimate Type'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_estimate_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Estimate Path'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_estimate_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Apply Type'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_apply_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Apply Path'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_apply_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Standard Type'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_standard_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Standard Path'); ?></dt>
		<dd>
			<?php echo h($subculture['Subculture']['c_standard_path']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subculture'), array('action' => 'edit', $subculture['Subculture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subculture'), array('action' => 'delete', $subculture['Subculture']['id']), null, __('Are you sure you want to delete # %s?', $subculture['Subculture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcultures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subculture'), array('action' => 'add')); ?> </li>
	</ul>
</div>
