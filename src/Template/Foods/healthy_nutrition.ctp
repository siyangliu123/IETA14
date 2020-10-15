<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nutrition[]|\Cake\Collection\CollectionInterface $nutritions
 */
?>
<?= $this->Html->css('nutritions.css'); ?>
<div class="healthy-nutritions-container">

    <div class="nutrition-inner">
        <h1>Choose healthy foods to reduce the risk of <span>Coronary Heart Disease</span></h1>
        <div class="nav-div">
            <h3 id="navTitle">Navigation</h3>
            <nav class="nav section-nav">
                <ul>
                    <li><a href="#section1" class="1">Avoid Saturated Fat</a></li>
                    <li><a href="#section2" class="2">Avoid processed Meats</a></li>
                    <li><a href="#section3" class="3">Choose lowest sodium products</a></li>
                    <li><a href="#section4" class="4">Eat nuts regularly</a></li>
                    <li><a href="#section5" class="5">Eat more fruit & vegetable</a></li>
                    <li><a href="#section6" class="6">Reduce alcohol & refined sources of carbohydrates</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <p style="font-size: larger"><b>A healthy diet</b> is one of the most important ways you can reduce your
                risk of developing Coronary Heart Disease.</p>
            <p>It is always important to remember that it's not just whether one particular food group is
                'bad'; or not but to look at you are eating as a whole and ensure you eat <b>a well-balanced diet
                    with plenty of plant-based foods</b>. </p>
            <p>It is essential to include a lot of <b>vegetables, whole grains
                    and fruits </b> as well as some <b>fish and seafood and protein</b> such as lentils beans and tofu.
            </p>


        </div>

        <section id="section1">
            <h2 class="1">Avoid Saturated Fat</h2>
            <div class="row">
                <p>Replace energy from saturated fats (such as butter, coconut oil and cream) with
                    healthy unsaturated fats from seeds and plants (such as extra virgin olive oil,
                    avocado, sunflower, canola, safflower, peanut, soybean and sesame) and foods such
                    as nuts, seeds, avocado, olives and soy.</p>
            </div>
        </section>
        <section id="section2">
            <h2 class="2">Avoid processed Meats</h2>
            <div class="section row">
                <div class="col-md-6 col-lg-6">
                    <p>Such as sausages, ham, salami, and prosciutto.</p>
                    <p>Limit unprocessed red meats (such as beef, veal, mutton, lamb, pork, kangaroo,
                        rabbit, and other game meats) to a maximum of 350g (cooked weight) per week.</p>
                    <?php
                    echo $this->Html->link(" View Unhealthy Nutrition Detail", ['controller' => 'foods', 'action' => 'index', 'filter' => 'unhealthy'], ['class' => 'btn btn-primary']);
                    ?>
                </div>
                <div class="col-md-6 col-lg-6 meats">
                    <div class="meat-inner">
                        <div class="meat-list">
                            <ul>
                                <?php foreach ($nutritions3 as $nutrition3): ?>
                                    <li>
                                        <?= h($nutrition3->food_name) ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="section3">
            <h2 class="3">Choose lowest sodium products</h2>
            <div class="row">
                <p>People need a very small amount of sodium to be healthy, which is present naturally
                    in foods like seafood, meat, dairy, eggs and some vegetables. Reducing salt intake
                    reduces the risk of high blood pressure and ensures better cardiovascular health for
                    most people.</p>
                <?php
                echo $this->Html->link(" View Unhealthy Nutrition Detail", ['controller' => 'foods', 'action' => 'index', 'filter' => 'processedmeat'], ['class' => 'btn btn-primary']);
                ?>
            </div>
        </section>
        <section id="section4">
            <h2 class="4">Eat nuts regularly</h2>
            <div class="row section legume">
                <div class="col-md-6 col-lg-6 left">
                    <p>Eat legumes regularly – like baked beans (reduced salt), soybeans, lentils and
                        tofu.</p>
                    <p>Snack on a handful of raw, unsalted nuts on most days of the week (especially walnuts and
                        almonds).</p>
                    <div>
                        <?php echo $this->Html->image('nuts.jpg', ['id' => 'nuts-image', 'class' => 'content-image']); ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 right">
                    <ul>
                        <?php foreach ($nutritions1 as $nutrition1): ?>
                            <li>
                                <?= h($nutrition1->food_name) ?>
                            </li>
                        <?php endforeach; ?>
                        <br/>
                        <?php
                        echo $this->Html->link(" View Nuts nutrition detail", ['controller' => 'foods', 'action' => 'index', 'filter' => 'nuts'], ['class' => 'btn btn-primary']);
                        ?>
                    </ul>

                </div>
            </div>
        </section>
        <section id="section5">
            <h2 class="5">Eat more fruit & vegetable</h2>
            <div class="row">
                <p>The World Health Report 2002 estimates that <b>approximately <span
                                style="font-size: larger">30%</span>
                        of CHD in
                        developed countries is due to fruit and vegetable consumption levels below 600g per
                        day </b>. Eat at least two pieces of fruit daily. Vegetables have been shown to be
                    protective against heart disease and certain cancers.</p>
            </div>
        </section>
        <section id="section6">
            <h2 class="6">Reduce alcohol & refined sources of carbohydrates</h2>
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
                            <?= h($nutrition2->food_name) ?>
                        </li>
                    <?php endforeach; ?>
                    <br/>
                    <?php
                    echo $this->Html->link(" View Drinks detail", ['controller' => 'foods', 'action' => 'index', 'filter' => 'alcohol'], ['class' => 'btn btn-primary']);
                    ?>
                </ul>
                <div class="col-md-6 col-lg-6">
                    <?php echo $this->Html->image('alcohol.jpg', ['id' => 'alcohol-image', 'class' => 'content-image']); ?>

                </div>
            </div>
        </section>


    </div>

</div>
<script>

    var nav = $("nav a");
    nav.attr("disabled", "disabled");
    nav.click(function () {
        var text = $(this).attr('class');
        var target = $("h2." + text);
        $('html, body').animate({
            scrollTop: target.offset().top - 100
        });
    });

    window.addEventListener('DOMContentLoaded', () => {

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const id = entry.target.getAttribute('id');
                if (entry.intersectionRatio > 0) {
                    document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.add('active');
                } else {
                    document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.remove('active');
                }
            });
        });

        document.querySelectorAll('section[id]').forEach((section) => {
            observer.observe(section);
        });
    });
</script>