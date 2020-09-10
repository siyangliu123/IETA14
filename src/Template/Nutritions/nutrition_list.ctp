<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition[]|\Cake\Collection\CollectionInterface $nutritions
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="nutritions-container">
    <div class="nutritions-list-container">
        <h1 style="text-transform: capitalize"><?php echo  $this->request->getQuery('filter')." Nutrition"; ?></h1>

<!--        <div class="filter-group">-->
<!--            <label for="sat_fat" class="filter-label">Saturated Fat: <</label>-->
<!--            <input id="sat_fat" name="sat_fat" value="0"/>-->
<!--        </div>-->
        <table cellpadding="0" cellspacing="0" id="nutritionTable" class="table table-border ">
            <thead>
            <tr>
                <th scope="col">Nutrition Name</th>
                <th scope="col">Grams</th>
                <th scope="col">Calories</th>
                <th scope="col">Protein</th>
                <th scope="col">Fat</th>
                <th scope="col">Saturated Fat</th>
                <th scope="col">Fiber</th>
                <th scope="col">Carbs</th>
                <th scope="col">Is Veg</th>
                <th scope="col">Categories</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($nutritions as $nutrition): ?>
                <tr>
                    <td><?= h($nutrition->nutrition_name) ?></td>
                    <td><?= h($nutrition->nutrition_grams) ?></td>
                    <td><?= $this->Number->format($nutrition->nutrition_calories) ?></td>
                    <td><?= $this->Number->format($nutrition->nutrition_protein) ?></td>
                    <td><?= $this->Number->format($nutrition->nutrition_fat) ?></td>
                    <td><?= $this->Number->format($nutrition->nutrition_sat_fat) ?></td>
                    <td><?= $this->Number->format($nutrition->nutrition_fiber) ?></td>
                    <td><?= $this->Number->format($nutrition->nutrition_carbs) ?></td>
                    <td><?php
                        if($this->Number->format($nutrition->nutrition_is_veg)==0){
                            echo "Is Veg";
                        }
                        else{
                            echo "Not Veg";
                        }
                        ?></td>
                    <td><?= h($nutrition->nutrition_categories) ?></td>
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