<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="family table-responsive col-lg-10">
    <table class="table table-condensed table-bordered table-striped">
    <thead>
        <tr>
            <th class="ids"><?= $this->Paginator->sort('FamilyID') ?></th>
            <th><?= $this->Paginator->sort('FamilyName') ?></th>
            <th class="ids"><?= $this->Paginator->sort('LeaderID') ?></th>
            <th class="ids"><?= $this->Paginator->sort('FounderID') ?></th>
            <th class="ids"><?= $this->Paginator->sort('Active') ?></th>
            <th><?= $this->Paginator->sort('CreateTime') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($family as $family): ?>
        <tr>
            <td class="ids"><?= $family->FamilyID ?></td>
            <td><?= h($family->FamilyName) ?></td>
            <td class="ids"><?= $this->Html->link($family->LeaderID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $family->LeaderID]) ?></td>
            <td class="ids"><?= $this->Html->link($family->FounderID, ['controller' => 'Roledata', 'action' => 'view', 'id' => $family->FounderID]) ?></td>
            <td class="ids"><?= $family->Active ?></td>
            <td><?= h($family->CreateTime) ?></td>
            <td class="actions">
                <div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-external-link']).$this->Html->tag('div', __('View')),
                        ['action' => 'view', 'id' => $family->FamilyID],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Html->link(
                        $this->Html->tag('i', '', ['class' => 'fa fa-pencil']).$this->Html->tag('div', __('Edit')),
                        ['action' => 'edit', 'id' => $family->FamilyID],
                        ['escape' => false]) ?></div>
                    <div class="icon-contain"><?= $this->Form->postLink(
                        $this->Html->tag('i', '', ['class' => 'fa fa-trash-o']).$this->Html->tag('div', __('Delete')),
                        ['action' => 'delete', $family->FamilyID],
                        ['escape' => false,
                        'confirm' => __('Are you sure you want to delete # {0}?', $family->FamilyID)
                        ]) ?></div>
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