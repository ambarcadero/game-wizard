<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Guild'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="guild form columns well">
        <?= $this->Form->create($guild, ['class' => 'form-horizontal']) ?>
        <legend><?= __('Add Guild') ?></legend>
        <?= $this->Form->input('FounderNameID', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('LeaderID', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('SpecState', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Level', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('HoldCity0', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('HoldCity1', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('HoldCity2', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Fund', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Material', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Rep', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('DailyCost', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Peace', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Rank', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('CreateTime', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('GroupPurchase', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('RemainSpreadTimes', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('Commendation', ['label' => ['class' => 'col-md-offset-3']]); ?>
        <?= $this->Form->input('GuildValue1', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('GuildValue2', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-10">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>