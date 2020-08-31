<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MortalityRecord $mortalityRecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mortality Record'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mortalityRecord form large-9 medium-8 columns content">
    <?= $this->Form->create($mortalityRecord) ?>
    <fieldset>
        <legend><?= __('Add Mortality Record') ?></legend>
        <?php
            echo $this->Form->control('cause');
            echo $this->Form->control('male_death');
            echo $this->Form->control('female_death');
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
