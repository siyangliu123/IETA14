<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MortalityRecord[]|\Cake\Collection\CollectionInterface $mortalityRecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mortality Record'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mortalityRecord index large-9 medium-8 columns content">
    <h3><?= __('Mortality Record') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('mortality_record_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cause') ?></th>
                <th scope="col"><?= $this->Paginator->sort('male_death') ?></th>
                <th scope="col"><?= $this->Paginator->sort('female_death') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mortalityRecord as $mortalityRecord): ?>
            <tr>
                <td><?= $this->Number->format($mortalityRecord->mortality_record_id) ?></td>
                <td><?= h($mortalityRecord->cause) ?></td>
                <td><?= $this->Number->format($mortalityRecord->male_death) ?></td>
                <td><?= $this->Number->format($mortalityRecord->female_death) ?></td>
                <td><?= $this->Number->format($mortalityRecord->total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mortalityRecord->mortality_record_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mortalityRecord->mortality_record_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mortalityRecord->mortality_record_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mortalityRecord->mortality_record_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
