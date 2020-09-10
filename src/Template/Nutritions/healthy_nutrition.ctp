<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition[]|\Cake\Collection\CollectionInterface $nutritions
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="nutritions-container">
    <div class="nutrition-inner">
        <h1 style="padding: 0 5vw;">Choose healthy food to reduce the risk of Chronic Heart Disease</h1>
        <div class="row">
            <p>A healthy diet is one of the most important ways you can reduce your risk of developing
                heart disease.</p>
            <p>It is always important to remember that it's not just whether one particular food group is
                'bad'; or not but to look at you are eating as a whole and ensure you eat a well-balanced diet
                with plenty of plant-based foods. It is essential to include a lot of vegetables, whole grains
                and fruits as well as some fish and seafood and protein such as lentils beans and tofu.</p>
        </div>
        <h2><i class="fas fa-circle fa-sm"></i> Avoid Saturated Fat</h2>
        <div class="row">
            <p>Replace energy from saturated fats (such as butter, coconut oil and cream) with
                healthy unsaturated fats from seeds and plants (such as extra virgin olive oil,
                avocado, sunflower, canola, safflower, peanut, soybean and sesame) and foods such
                as nuts, seeds, avocado, olives and soy.</p>
        </div>
        <h2><i class="fas fa-circle fa-sm"></i> Avoid processed Meats</h2>

        <div class="section row">
            <div class="col-md-6 col-lg-6">
                <p>Such as sausages, ham, salami, and prosciutto.</p>
                <p>Limit unprocessed red meats (such as beef, veal, mutton, lamb, pork, kangaroo,
                    rabbit, and other game meats) to a maximum of 350g (cooked weight) per week.</p>
                <?php
                echo $this->Html->link(" View Unhealthy Meat Nutrition Detail", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'unhealthy'], ['class' => 'btn btn-primary']);
                ?>
            </div>
            <div class="col-md-6 col-lg-6 meats">
                <div class="meat-inner">
                    <div class="meat-list">
                        <ul>
                            <?php foreach ($nutritions3 as $nutrition3): ?>
                                <li>
                                    <?= h($nutrition3->nutrition_name) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <h2><i class="fas fa-circle fa-sm"></i> Choose lowest sodium products</h2>
        <div class="row">
            <p>People need a very small amount of sodium to be healthy, which is present naturally
                in foods like seafood, meat, dairy, eggs and some vegetables. Reducing salt intake
                reduces the risk of high blood pressure and ensures better cardiovascular health for
                most people.</p>
        </div>
        <h2><i class="fas fa-circle fa-sm"></i> Eat legumes regularly</h2>
        <div class="row section legume">
            <div class="col-md-6 col-lg-6 left">
                <p>Eat legumes regularly – like baked beans (reduced salt), soybeans, lentils and
                    tofu.</p>
                <p>Snack on a handful of raw, unsalted nuts on most days of the week (especially walnuts and almonds).</p>
                <div>
                    <?php echo $this->Html->image('nuts.jpg', ['id' => 'nuts-image', 'class' => 'content-image']); ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 right">
                <ul>
                    <?php foreach ($nutritions1 as $nutrition1): ?>
                        <li>
                            <?= h($nutrition1->nutrition_name) ?>
                        </li>
                    <?php endforeach; ?>
                    <br/>
                    <?php
                    echo $this->Html->link(" View Nuts nutrition detail", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'seeds'], ['class' => 'btn btn-primary']);
                    ?>
                </ul>

            </div>
        </div>
        <h2><i class="fas fa-circle fa-sm"></i> Eat more fruit & vegetable</h2>
        <div class="row">
            <p>The World Health Report 2002 estimates that <b>approximately <span style="font-size: larger">30%</span> of CHD in
                    developed countries is due to fruit and vegetable consumption levels below 600g per
                    day </b>. Eat at least two pieces of fruit daily. Vegetables have been shown to be
                protective against heart disease and certain cancers.</p>
        </div>

        <h2><i class="fas fa-circle fa-sm"></i> Reduce alcohol & refined sources of carbohydrates</h2>
        <div class="row">
            <p>Reduce intake of refined sources of carbohydrates with higher glycaemic indices
                (including
                foods with added
                sugars).
                If you drink alcohol, have no more than two standard drinks on any one day.
                A high alcohol intake increases blood pressure and can increase triglycerides in the blood.</p>
            <ul class="col-md-6 col-lg-6">
                <?php foreach ($nutritions2 as $nutrition2): ?>
                    <li>
                        <?= h($nutrition2->nutrition_name) ?>
                    </li>
                <?php endforeach; ?>
                <br/>
                <?php
                echo $this->Html->link(" View Drinks nutrition detail", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'alcohol'], ['class' => 'btn btn-primary']);
                ?>
            </ul>
            <div class="col-md-6 col-lg-6">
                <?php echo $this->Html->image('alcohol.jpg', ['id' => 'alcohol-image', 'class' => 'content-image']); ?>

            </div>
        </div>


    </div>

</div>
