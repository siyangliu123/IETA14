<?= $this->Html->css('nav.css'); ?>





<h1>If you are suffering from Coronary Heart Disease</h1>
<ul class="cards">
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--1"></div>
            <div class="card__content">
                <div class="card__title">Diet advice</div>
                <p class="card__text">Coronary heart disease is the number one cause of death in Australia. Although there is not one single cause, an unhealthy diet can be one of the contributing risk factors for coronary heart disease. </p>
                 <p class="card__text">Paying attention to what you eat and consuming a variety of healthy foods is one of the most important preventative measures you can take. </p>
                <p class="card__text">Checkout our diet suggestion to improve your lifestyle and reduce the risk of coronary heart disease.</p>
                <?php echo $this->Html->link("View Diet Advice", ['controller' => 'foods', 'action' => 'healthy_nutrition'], ['class' => 'btn btn--block card__btn']); ?>
            </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--2"></div>
            <div class="card__content">
                <div class="card__title">Exercise advice</div>
                <p class="card__text">Regular physical activity is one of the best things you can do for your heart health. Exercise can make your heart muscle stronger.</p>
                <p class="card__text">Australian Government recommends that 30 to 45 minutes of physical activity a day, five or more days of the week can help reduce your risk of heart disease and heart attacks. Exercise may help lower your blood pressure and cholesterol.</p>
                <p class="card__text">Have a look at the exercise advice we provide and a list of different exercises that can be performed on a daily basis to live a healthy life.</p>
                <?php echo $this->Html->link("View Exercise Advice", ['controller' => 'pages', 'action' => 'exercise'], ['class' => 'btn btn--block card__btn']); ?>
            </div>
        </div>
    </li>
    <li class="cards__item">
        <div class="card">
            <div class="card__image card__image--3"></div>
            <div class="card__content">
                <div class="card__title">Calorie calculator</div>
                <p class="card__text">It is suggested that reducing your daily caloric intake by just 300 calories could minimize your risk of heart disease. </p>
                <p class="card__text">A healthy diet and lifestyle are the best weapons to defeat coronary heart problems. We provides food and exercise calories calculator to help you keep a good balance of food intake and exercise plan.</p>
                <p class="card__text">Take the simple steps to keep track of your calorie intake and live a happy life.</p>
                <?php echo $this->Html->link("View Calorie Calculator", ['controller' => 'foods', 'action' => 'calculator'], ['class' => 'btn btn--block card__btn']); ?>
            </div>
        </div>
    </li>
</ul>