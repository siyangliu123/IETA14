<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food[]|\Cake\Collection\CollectionInterface $foods
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="nutritions-container">
    <div class="nutritions-list-container">
        <h1 style="text-transform: capitalize">Foods</h1>
    <table cellpadding="0" cellspacing="0" id="nutritionTable" class="table table-border ">
        <colgroup>
            <col style="width: 40%">
            <col style="width: 40%">
            <col style="width: 20%">
        </colgroup>
        <thead>
            <tr>
                <th scope="col">Food Name</th>
                <th scope="col">Food Description</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($foods as $food): ?>
            <tr>
                <td class="food-name-td">
                    <span class="food-name"><?= $food->food_name ?></span>
                    <br />
                    <?php
                    if($food->food_sodium>1000){
                        echo "<div><span class='high-sodium'>High Sodium</span></div>";
                    }
                    if(str_contains($food->food_categories,"Processed meat")){
                        echo "<div><span class='processed-meat'>Processed Meat</span></div>";
                    }
                    if($food->food_sugars>15){
                        echo "<div><span class='high-sugar'>High Sugar</span></div>";
                    }
                    if($food->food_saturated_fatty_acids>16){
                        echo "<div><span class='high-sat-fat'>High Saturated Fat</span></div>";
                    }
                    ?>
                </td>
                <td><?= $food->food_description ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View Nutrition'), ['action' => 'view', $food->food_id], ['class' => 'btn btn-primary']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<script>
    $("#nutritionTable").DataTable({
        "pageLength": 50
    });
</script>