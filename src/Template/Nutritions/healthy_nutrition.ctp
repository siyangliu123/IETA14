<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition[]|\Cake\Collection\CollectionInterface $nutritions
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="nutritions-container">
    <div class="nutrition-inner">
        <h1>Eat healthy can reduce the risk/effect of Chronic Heart Disease</h1>
        <div class="row section">
            <p class="col-md-6 col-lg-6">
                <br />
                Eat legumes regularly – like baked beans (reduced salt), soybeans, lentils and
                tofu.
                Snack on a handful of raw, unsalted nuts on most days of the week (especially walnuts and almonds).
            </p>
            <p class="col-md-6 col-lg-6" style="border-left: 1px solid lightgrey">Replace energy from saturated fats
                (such as butter, coconut oil and cream) with healthy unsaturated fats
                from seeds and plants (such as extra virgin olive oil, avocado, sunflower, canola, safflower, peanut,
                soybean and sesame) and foods such as nuts, seeds, avocado, olives and soy.</p>

            <ul class="col-md-4 col-lg-4">
                <?php foreach ($nutritions1 as $nutrition1): ?>
                    <li>
                        <?= h($nutrition1->nutrition_name) ?>
                    </li>
                <?php endforeach; ?>
                <br/>
                <?php
                echo $this->Html->link(" View ingredients in detail", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'seeds'], ['class' => 'btn btn-primary']);
                ?>
            </ul>
            <div class="col-md-8 col-lg-8">
                <?php echo $this->Html->image('nuts.jpg', ['id' => 'nuts-image','class'=>'content-image']); ?>
            </div>
        </div>


        <div class="section row">
            <p>Limit unprocessed red meats (such as beef, veal, mutton, lamb, pork, kangaroo, rabbit, and other game
                meats) to a maximum of 350g (cooked weight) per week and avoid processed meat (such as sausages, ham,
                salami
                and prosciutto).</p>
            <div class="col-md-7 col-lg-7">
                <?php echo $this->Html->image('eat.jpg', ['id' => 'eat-image']); ?>
            </div>
            <ul class="col-md-5 col-lg-5 meats">
                <?php foreach ($nutritions3 as $nutrition3): ?>
                    <li>
                        <?= h($nutrition3->nutrition_name) ?>
                    </li>
                <?php endforeach; ?>
                <br/>
                <?php
                echo $this->Html->link(" View Unhealthy Nutrition Ingredients", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'unhealthy'], ['class' => 'btn btn-primary']);
                ?>
            </ul>

        </div>

        <div class="section">
            <p>Several aspects of dietary patterns have been linked to the increased risk of CHD. These include diets high in saturated fats and cholesterol, and high salt intake and diets with low fruit and vegetable intake. The World Health Report 2002 estimates that approximately 30% of CHD in developed countries is due to fruit and vegetable consumption levels below 600g per day. </p>
        </div>

        <div class="section">Check the sodium content of foods and choose the lowest sodium products.</div>

        <div class="section row">Reduce intake of refined sources of carbohydrates with higher glycaemic indices (including
            foods with added
            sugars).
            If you drink alcohol, have no more than two standard drinks on any one day.
            A high alcohol intake increases blood pressure and can increase triglycerides in the blood.
            <ul class="col-md-6 col-lg-6">
                <?php foreach ($nutritions2 as $nutrition2): ?>
                    <li>
                        <?= h($nutrition2->nutrition_name) ?>
                    </li>
                <?php endforeach; ?>
                <br/>
                <?php
                echo $this->Html->link(" View ingredients detail", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'alcohol'], ['class' => 'btn btn-primary']);
                ?>
            </ul>
            <div class="col-md-6 col-lg-6">
                <?php echo $this->Html->image('alcohol.jpg', ['id' => 'alcohol-image','class'=>'content-image']); ?>

            </div>
        </div>


    </div>

</div>
