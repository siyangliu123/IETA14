<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition $nutrition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nutrition->nutrition_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nutrition->nutrition_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Nutritions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nutritions form large-9 medium-8 columns content">
    <?= $this->Form->create($nutrition) ?>
    <fieldset>
        <legend><?= __('Edit Nutrition') ?></legend>
        <?php
            echo $this->Form->control('nutrition_name');
            echo $this->Form->control('nutrition_grams');
            echo $this->Form->control('nutrition_calories');
            echo $this->Form->control('nutrition_protein');
            echo $this->Form->control('nutrition_fat');
            echo $this->Form->control('nutrition_sat_fat');
            echo $this->Form->control('nutrition_fiber');
            echo $this->Form->control('nutrition_carbs');
            echo $this->Form->control('nutrition_is_veg');
            echo $this->Form->control('nutrition_categories');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
