<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition[]|\Cake\Collection\CollectionInterface $nutritions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Nutrition'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nutritions index large-9 medium-8 columns content">
    <h3><?= __('Nutritions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nutrition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_grams') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_calories') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_protein') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_fat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_sat_fat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_fiber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_carbs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_is_veg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutrition_categories') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nutritions as $nutrition): ?>
            <tr>
                <td><?= $this->Number->format($nutrition->nutrition_id) ?></td>
                <td><?= h($nutrition->nutrition_name) ?></td>
                <td><?= h($nutrition->nutrition_grams) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_calories) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_protein) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_fat) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_sat_fat) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_fiber) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_carbs) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_is_veg) ?></td>
                <td><?= h($nutrition->nutrition_categories) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nutrition->nutrition_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nutrition->nutrition_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nutrition->nutrition_id], ['confirm' => __('Are you sure you want to delete # {0}?', $nutrition->nutrition_id)]) ?>
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
