<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MortalityRecord $mortalityRecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mortalityRecord->mortality_record_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mortalityRecord->mortality_record_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mortality Record'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mortalityRecord form large-9 medium-8 columns content">
    <?= $this->Form->create($mortalityRecord) ?>
    <fieldset>
        <legend><?= __('Edit Mortality Record') ?></legend>
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
