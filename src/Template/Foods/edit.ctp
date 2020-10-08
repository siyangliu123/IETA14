<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $food->food_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $food->food_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="foods form large-9 medium-8 columns content">
    <?= $this->Form->create($food) ?>
    <fieldset>
        <legend><?= __('Edit Food') ?></legend>
        <?php
            echo $this->Form->control('food_name');
            echo $this->Form->control('food_total_calories');
            echo $this->Form->control('food_protein');
            echo $this->Form->control('food_total_fat');
            echo $this->Form->control('food_total_dietary_fibre');
            echo $this->Form->control('food_alcohol');
            echo $this->Form->control('food_sugars');
            echo $this->Form->control('food_carbohydrates');
            echo $this->Form->control('food_sodium');
            echo $this->Form->control('food_saturated_fatty_acids');
            echo $this->Form->control('food_monounsaturated_fatty_acids');
            echo $this->Form->control('food_polyunsaturated_fatty_acids');
            echo $this->Form->control('food_trans_fatty_acids');
            echo $this->Form->control('food_cholesterol');
            echo $this->Form->control('food_categories');
            echo $this->Form->control('food_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
