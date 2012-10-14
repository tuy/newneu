<div class="researches form">
<?php echo $this->Form->create('Research'); ?>
	<fieldset>
		<legend><?php echo __('Edit Research'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year_id');
		echo $this->Form->input('rstype_id');
		echo $this->Form->input('rscode_id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('researcher_id');
		echo $this->Form->input('subresearch_id');
		echo $this->Form->input('name');
		echo $this->Form->input('budget');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('qc_rs_type');
		echo $this->Form->input('qc_rs_path');
		echo $this->Form->input('pb_rs_type');
		echo $this->Form->input('pb_rs_path');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Research.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Research.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Researches'), array('action' => 'index')); ?></li>
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
