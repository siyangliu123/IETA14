<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition[]|\Cake\Collection\CollectionInterface $nutritions
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="nutritions-container">
    <h1><?= __('Nutritions') ?></h1>
    <div class="nutritions-list-container">
        <div class="filter-group">
        <label for="sat_fat" class="filter-label">Saturated Fat: <</label>
            <input id="sat_fat" name="sat_fat" value="0"/>
        </div>
        <!--    <div>Saturated fat intake may increase heart disease risk factors, but not heart disease itself</div>-->
        <table cellpadding="0" cellspacing="0" id="nutritionTable" class="table table-border ">
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
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<script>
    $("#nutritionTable").DataTable();
</script>