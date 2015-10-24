<div class="actions">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New').__('Roledata'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="roledata table-responsive">
    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('AccountID') ?></th>
            <th><?= $this->Paginator->sort('RoleID') ?></th>
            <th><?= $this->Paginator->sort('RoleName') ?></th>
            <th><?= $this->Paginator->sort('RoleNameCrc') ?></th>
            <th><?= $this->Paginator->sort('Sex') ?></th>
            <th><?= $this->Paginator->sort('SpeakOff') ?></th>
            <th><?= $this->Paginator->sort('HairModelID') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($roledata as $roledata): ?>
        <tr>
            <td>
                <?php
                    $accountID = $this->Number->format($roledata->AccountID);
                    echo $this->Html->link($accountID, ['controller' => 'AccountCommon', 'action' => 'view', 'id' => $accountID]);
                ?>
            </td>
            <td><?= $this->Number->format($roledata->RoleID) ?></td>
            <td><?= h($roledata->RoleName) ?></td>
            <td><?= $this->Number->format($roledata->RoleNameCrc) ?></td>
            <td><?= $this->Number->format($roledata->Sex) ?></td>
            <td><?= $this->Number->format($roledata->SpeakOff) ?></td>
            <td><?= $this->Number->format($roledata->HairModelID) ?></td>
            <td class="actions">
                <div>
                    <div><?= $this->Html->link(__('View'), ['action' => 'view', 'id' => $roledata->RoleID]) ?></div>
                    <div><?= $this->Html->link(__('Edit'), ['action' => 'edit', 'id' => $roledata->RoleID]) ?></div>
                    <div><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roledata->RoleID], ['confirm' => __('Are you sure you want to delete # {0}?', $roledata->RoleID)]) ?></div>
                </div>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
