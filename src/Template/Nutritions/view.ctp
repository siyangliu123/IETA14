<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition $nutrition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nutrition'), ['action' => 'edit', $nutrition->nutrition_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nutrition'), ['action' => 'delete', $nutrition->nutrition_id], ['confirm' => __('Are you sure you want to delete # {0}?', $nutrition->nutrition_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nutritions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nutrition'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nutritions view large-9 medium-8 columns content">
    <h3><?= h($nutrition->nutrition_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nutrition Name') ?></th>
            <td><?= h($nutrition->nutrition_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Grams') ?></th>
            <td><?= h($nutrition->nutrition_grams) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Categories') ?></th>
            <td><?= h($nutrition->nutrition_categories) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Id') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Calories') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_calories) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Protein') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_protein) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Fat') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_fat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Sat Fat') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_sat_fat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Fiber') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_fiber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Carbs') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_carbs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutrition Is Veg') ?></th>
            <td><?= $this->Number->format($nutrition->nutrition_is_veg) ?></td>
        </tr>
    </table>
</div>
