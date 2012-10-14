<div class="subresearches view">
    <h2><?php  echo __('Subresearch'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs System Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_system_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs System Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_system_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Upgrade Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_upgrade_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Upgrade Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_upgrade_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Dev Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_dev_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Dev Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_dev_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Budget Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_budget_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Budget Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_budget_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Room Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_room_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Room Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_room_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Lib Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_lib_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Lib Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_lib_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Support Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_support_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Support Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_support_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Event Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_event_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Event Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_event_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Follow Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_follow_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Follow Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_follow_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Adap Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_adap_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Adap Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_adap_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Create Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_create_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Create Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_create_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Pub Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_pub_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Pub Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_pub_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Combine Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_combine_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Combine Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_combine_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Ads Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_ads_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Ads Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_ads_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Use Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_use_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Use Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_use_path']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Patent Type'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_patent_type']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Rs Patent Path'); ?></dt>
        <dd>
            <?php echo h($subresearch['Subresearch']['rs_patent_path']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Subresearch'), array('action' => 'edit', $subresearch['Subresearch']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Subresearch'), array('action' => 'delete', $subresearch['Subresearch']['id']), null, __('Are you sure you want to delete # %s?', $subresearch['Subresearch']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Subresearches'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subresearch'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Researches'), array('controller' => 'researches', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Researches'); ?></h3>
    <?php if (!empty($subresearch['Research'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Year Id'); ?></th>
                <th><?php echo __('Rstype Id'); ?></th>
                <th><?php echo __('Rscode Id'); ?></th>
                <th><?php echo __('Organization Id'); ?></th>
                <th><?php echo __('Researcher Id'); ?></th>
                <th><?php echo __('Subresearch Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Budget'); ?></th>
                <th><?php echo __('Start Date'); ?></th>
                <th><?php echo __('End Date'); ?></th>
                <th><?php echo __('Qc Rs Type'); ?></th>
                <th><?php echo __('Qc Rs Path'); ?></th>
                <th><?php echo __('Pb Rs Type'); ?></th>
                <th><?php echo __('Pb Rs Path'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($subresearch['Research'] as $research): ?>
                <tr>
                    <td><?php echo $research['id']; ?></td>
                    <td><?php echo $research['year_id']; ?></td>
                    <td><?php echo $research['rstype_id']; ?></td>
                    <td><?php echo $research['rscode_id']; ?></td>
                    <td><?php echo $research['organization_id']; ?></td>
                    <td><?php echo $research['subresearch_id']; ?></td>
                    <td><?php echo $research['name']; ?></td>
                    <td><?php echo $research['budget']; ?></td>
                    <td><?php echo $research['start_date']; ?></td>
                    <td><?php echo $research['end_date']; ?></td>
                    <td><?php echo $research['qc_rs_type']; ?></td>
                    <td><?php echo $research['qc_rs_path']; ?></td>
                    <td><?php echo $research['pb_rs_type']; ?></td>
                    <td><?php echo $research['pb_rs_path']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'researches', 'action' => 'view', $research['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'researches', 'action' => 'edit', $research['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'researches', 'action' => 'delete', $research['id']), null, __('Are you sure you want to delete # %s?', $research['id'])); ?>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
        <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Research'), array('controller' => 'researches', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
