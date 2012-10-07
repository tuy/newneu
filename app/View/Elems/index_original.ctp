<div class="elems index">
    <h2><?php echo __('Elements'); ?></h2>
    <?php echo $this->Form->create('Elem', array( 'action' => 'index')); ?>
    <?php 
        echo $this->Form->input('organization_id');
        echo $this->Form->input('year_id');
    ?>
    <?php echo $this->Form->end(__('Search')); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('organization_id'); ?></th>
            <th><?php echo $this->Paginator->sort('year_id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('date'); ?></th>
            <th><?php echo $this->Paginator->sort('relay_id'); ?></th>
            <th><?php echo $this->Paginator->sort('action_id'); ?></th>
            <th><?php echo $this->Paginator->sort('indicator_id'); ?></th>
            <th><?php echo $this->Paginator->sort('operation_id'); ?></th>
            <th><?php echo $this->Paginator->sort('report_id'); ?></th>
            <th><?php echo $this->Paginator->sort('evaluate_id'); ?></th>
            <th><?php echo $this->Paginator->sort('suggestion_id'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            foreach ($elems as $elem): ?>
            <tr>
                <td><?php echo h($elem['Elem']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($elem['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $elem['Organization']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($elem['Year']['name'], array('controller' => 'years', 'action' => 'view', $elem['Year']['id'])); ?>
                </td>
                <td><?php echo h($elem['Elem']['name']); ?>&nbsp;</td>
                <td><?php echo h($elem['Elem']['date']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link(($elem['Relay']['type'] == 0) ? 'No' : 'Yes', array('controller' => 'relays', 'action' => 'view', $elem['Relay']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($elem['Action']['id'], array('controller' => 'actions', 'action' => 'view', $elem['Action']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($elem['Indicator']['id'], array('controller' => 'indicators', 'action' => 'view', $elem['Indicator']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($elem['Operation']['id'], array('controller' => 'operations', 'action' => 'view', $elem['Operation']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($elem['Report']['id'], array('controller' => 'reports', 'action' => 'view', $elem['Report']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($elem['Evaluate']['id'], array('controller' => 'evaluates', 'action' => 'view', $elem['Evaluate']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($elem['Suggestion']['id'], array('controller' => 'suggestions', 'action' => 'view', $elem['Suggestion']['id'])); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $elem['Elem']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $elem['Elem']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $elem['Elem']['id']), null, __('Are you sure you want to delete # %s?', $elem['Elem']['id'])); ?>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
    ?>	</p>

    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Element'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Organization'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year'), array('controller' => 'years', 'action' => 'add')); ?> </li>
        <!--<li><?php echo $this->Html->link(__('List Relays'), array('controller' => 'relays', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Relay'), array('controller' => 'relays', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Evaluates'), array('controller' => 'evaluates', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Evaluate'), array('controller' => 'evaluates', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Suggestions'), array('controller' => 'suggestions', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Suggestion'), array('controller' => 'suggestions', 'action' => 'add')); ?> </li>-->
    </ul>
</div>
