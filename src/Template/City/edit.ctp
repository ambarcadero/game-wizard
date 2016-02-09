<div class="actions columns">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $city->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List City'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-md-7">
    <div class="city form columns well">
        <?= $this->Form->create($city, ['class' => 'form-horizontal']) ?>
        <legend><?= __('Edit City') ?><div class="id">#<?= $city->id ?></div></legend>
        <?= $this->Form->input('id', ['disabled' => true, 'type' => 'text', 'type' => 'text', 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('guild_id', ['required' => true, 'type' => 'text', 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('defence', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('eudemon_tally', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('tax_rate', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('tax_rate_time', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('taxation', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <?= $this->Form->input('prolificacy', ['required' => true, 'label' => ['class' => 'col-md-3 control-label']]); ?>
        <div class="form-group">
            <div class="col-md-offset-3 col-md-10">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
</div>