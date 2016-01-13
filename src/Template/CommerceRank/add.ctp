<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Commerce Rank'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="commerceRank form large-10 medium-9 columns">
    <?= $this->Form->create($commerceRank) ?>
    <fieldset>
        <legend><?= __('Add Commerce Rank') ?></legend>
        <?php
            echo $this->Form->input('guild_id');
            echo $this->Form->input('times');
            echo $this->Form->input('tael');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>