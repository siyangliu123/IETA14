<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="nutritions-container">
    <div class="foods view large-9 medium-8 columns content">
        <h1><?= h($food->food_name) ?></h1>
        <div class="row food-description">
            <h2>Food Description:</h2>
            <div><?= $food->food_description ?></div>
        </div>

        <table class="vertical-table table-bordered">
            <tr>
                <th scope="row"><?= __('Category ') ?></th>
                <td><?= $food->food_categories ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Total Calories') ?></th>
                <td><?= $this->Number->format($food->food_total_calories) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Protein') ?></th>
                <td><?= $this->Number->format($food->food_protein) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Total Fat') ?></th>
                <td><?= $this->Number->format($food->food_total_fat) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Total Dietary Fibre') ?></th>
                <td><?= $this->Number->format($food->food_total_dietary_fibre) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Alcohol') ?></th>
                <td><?= $this->Number->format($food->food_alcohol) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Sugars') ?></th>
                <td>
                    <?= $this->Number->format($food->food_sugars) ?>
                    <?php if($food->food_sugars>15){
                    echo "<span class='high-sugar'>High Sugar</span>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row"><?= __('Carbohydrates') ?></th>
                <td><?= $this->Number->format($food->food_carbohydrates) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Sodium') ?></th>
                <td>
                    <?= $this->Number->format($food->food_sodium) ?>
                    <?php
                    if($food->food_sodium>1000){
                        echo "<span class='high-sodium'>High Sodium</span>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row"><?= __('Saturated Fatty Acids') ?></th>
                <td>
                    <?= $this->Number->format($food->food_saturated_fatty_acids) ?>
                    <?php
                    if($food->food_saturated_fatty_acids>16){
                        echo "<span class='high-sat-fat'>High Saturated Fat</span>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row"><?= __('Monounsaturated Fatty Acids') ?></th>
                <td><?= $this->Number->format($food->food_monounsaturated_fatty_acids) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Polyunsaturated Fatty Acids') ?></th>
                <td><?= $this->Number->format($food->food_polyunsaturated_fatty_acids) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Trans Fatty Acids') ?></th>
                <td><?= $this->Number->format($food->food_trans_fatty_acids) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Cholesterol') ?></th>
                <td><?= $this->Number->format($food->food_cholesterol) ?></td>
            </tr>
        </table>
        <button class="btn btn-primary" onclick="goBack()">Return to list</button>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".last").html("<?= h($food->food_name) ?>");
    });
    function goBack() {
        window.history.back();
    }
</script>

