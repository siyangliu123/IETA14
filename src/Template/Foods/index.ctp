<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food[]|\Cake\Collection\CollectionInterface $foods
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="nutritions-container">
    <div class="nutritions-list-container">
        <h1 style="text-transform: capitalize">Diet Nutrition</h1>
        <div class="select sort">
            <label for="sort">Sort by:</label>
            <select class="form-control" id="sort">
                <option value="1">Food Name</option>
                <option value="3">Total Calories</option>
                <option value="4">Protein</option>
                <option value="5">Total Fat</option>
                <option value="6">Total Dietary Fibre</option>
                <option value="7">Alcohol</option>
                <option value="8">Sugars</option>
                <option value="9">Carbohydrates</option>
                <option value="10">Sodium</option>
                <option value="11">Saturated Fatty Acids</option>
                <option value="12">Monounsaturated Fatty Acids</option>
                <option value="13">Polyunsaturated Fatty Acids</option>
                <option value="14">Cholesterol</option>
            </select>
        </div>
        <div class="select category">
            <label for="category">Category:</label>
            <select class="form-control" id="category">
                <option>All Categories</option>
                <?php foreach ($categories as $category) {
                    ?>
                    <option><?php echo $category; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
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
                <th scope="col" class="actions">Action</th>
                <th scope="col" class="hidden">Total Calories</th>
                <th scope="col" class="hidden">Protein</th>
                <th scope="col" class="hidden">Total Fat</th>
                <th scope="col" class="hidden">Total Dietary Fibre</th>
                <th scope="col" class="hidden">Alcohol</th>
                <th scope="col" class="hidden">Sugars</th>
                <th scope="col" class="hidden">Carbohydrates</th>
                <th scope="col" class="hidden">Sodium</th>
                <th scope="col" class="hidden">Saturated Fatty Acids</th>
                <th scope="col" class="hidden">Monounsaturated Fatty Acids</th>
                <th scope="col" class="hidden">Polyunsaturated Fatty Acids</th>
                <th scope="col" class="hidden">Cholesterol</th>
                <th scope="col" class="hidden">Categories</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($foods as $food): ?>
                <tr>
                    <td class="food-name-td">
                        <span class="food-name"><?= $food->food_name ?></span>
                        <br/>
                        <?php
                        if ($food->food_sodium > 1000) {
                            echo "<div><span class='high-sodium'>High Sodium</span></div>";
                        }
                        if (str_contains($food->food_categories, "Processed meat")) {
                            echo "<div><span class='processed-meat'>Processed Meat</span></div>";
                        }
                        if ($food->food_sugars > 15) {
                            echo "<div><span class='high-sugar'>High Sugar</span></div>";
                        }
                        if ($food->food_saturated_fatty_acids > 16) {
                            echo "<div><span class='high-sat-fat'>High Saturated Fat</span></div>";
                        }
                        ?>
                    </td>
                    <td><?= $food->food_description ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View Nutrition'), ['action' => 'view', $food->food_id], ['class' => 'btn btn-primary']) ?>
                    </td>
                    <td class="hidden"><?= $food->food_total_calories ?></td>
                    <td class="hidden"><?= $food->food_protein ?></td>
                    <td class="hidden"><?= $food->food_total_fat ?></td>
                    <td class="hidden"><?= $food->food_total_dietary_fibre ?></td>
                    <td class="hidden"><?= $food->food_alcohol ?></td>
                    <td class="hidden"><?= $food->food_sugars ?></td>
                    <td class="hidden"><?= $food->food_carbohydrates ?></td>
                    <td class="hidden"><?= $food->food_sodium ?></td>
                    <td class="hidden"><?= $food->food_saturated_fatty_acids ?></td>
                    <td class="hidden"><?= $food->food_monounsaturated_fatty_acids ?></td>
                    <td class="hidden"><?= $food->food_trans_fatty_acids ?></td>
                    <td class="hidden"><?= $food->food_cholesterol ?></td>
                    <td class="hidden category"
                        category="<?= $food->food_categories ?>"><?= $food->food_categories ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    var table = $("#nutritionTable").DataTable({
        "pageLength": 50,
        language: {
            searchPlaceholder: "Search foods by name..."
        }
    });

    $("#sort").on("change", function () {
        table
            .order([$(this).val(), 'dsc'])
            .draw();
    });

    $("#category").on("change", function () {
        var category = $(this).val();
        if (category === "All Categories") {
            table
                .column(15)
                .search("")
                .draw();
        }
        else {
            table
                .column(15)
                .search(category)
                .draw();
        }
    });

</script>