<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition[]|\Cake\Collection\CollectionInterface $nutritions
 */
?>
<?= $this->Html->css('nutritions.css'); ?>

<h1><?= __('Nutritions') ?></h1>
<div class="nutritions-list-container">
    <?= $this->Html->link(__('+ New Nutrition'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>

    <table cellpadding="0" cellspacing="0" id="nutritionTable">
        <thead>
        <tr>
            <th scope="col">Nutrition Name</th>
            <th scope="col">Measure</th>
            <th scope="col">Grams</th>
            <th scope="col">Calories</th>
            <th scope="col">Protein</th>
            <th scope="col">Fat</th>
            <th scope="col">Saturated Fat</th>
            <th scope="col">Fiber</th>
            <th scope="col">Carbs</th>
            <th scope="col">Is Veg</th>
            <th scope="col" class="actions" style="width: 150px;"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($nutritions as $nutrition): ?>
            <tr>
                <td><?= h($nutrition->nutrition_name) ?></td>
                <td><?= h($nutrition->nutrition_measure) ?></td>
                <td><?= h($nutrition->nutrition_grams) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_calories) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_protein) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_fat) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_sat_fat) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_fiber) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_carbs) ?></td>
                <td><?= $this->Number->format($nutrition->nutrition_is_veg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nutrition->nutrition_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nutrition->nutrition_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nutrition->nutrition_id], ['confirm' => __('Are you sure you want to delete # {0}?', $nutrition->nutrition_id)]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
<script>
    $("#nutritionTable").DataTable();
</script>