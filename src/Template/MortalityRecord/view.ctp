<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MortalityRecord $mortalityRecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mortality Record'), ['action' => 'edit', $mortalityRecord->mortality_record_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mortality Record'), ['action' => 'delete', $mortalityRecord->mortality_record_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mortalityRecord->mortality_record_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mortality Record'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mortality Record'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mortalityRecord view large-9 medium-8 columns content">
    <h3><?= h($mortalityRecord->mortality_record_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cause') ?></th>
            <td><?= h($mortalityRecord->cause) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mortality Record Id') ?></th>
            <td><?= $this->Number->format($mortalityRecord->mortality_record_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Male Death') ?></th>
            <td><?= $this->Number->format($mortalityRecord->male_death) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Female Death') ?></th>
            <td><?= $this->Number->format($mortalityRecord->female_death) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($mortalityRecord->total) ?></td>
        </tr>
    </table>
</div>
