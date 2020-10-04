<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <?= $this->Html->css('exercise.css'); ?>
</head>
<body>
<div class="inner">
    <div class="slider">

        <div class="box1 box">
            <div class="bg"></div>
            <div class="details">
                <h1>Cardiovascular exercises</h1>
                <p>
                    Aerobic exercise also called as cardiovascular exercise, uses large muscles of the body to keep your heart rate to 50% of its maximum level.
                </p>
                <button>Check Now</button>
            </div>

            <div class="illustration"><div class="inner"></div></div>
        </div>


        <div class="box2 box">
            <div class="bg"></div>
            <div class="details">
                <h1>Strength workout</h1>
                <p>
                    Resistance workout also called as strength workouts is a form of exercise that uses resistance such as elastic bands or light weights from 2.5 pounds to 10 pounds to burn fat and build stronger muscles.
                </p>
                <button>Check Now</button>
            </div>

            <div class="illustration"><div class="inner"></div></div>
        </div>


    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="prev" width="56.898" height="91" viewBox="0 0 56.898 91"><path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff"/></svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="next" width="56.898" height="91" viewBox="0 0 56.898 91"><path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff"/></svg>
    <div class="trail">
        <div class="box1 active">1</div>
        <div class="box2">2</div>

    </div>
</div>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.2/CSSRulePlugin.min.js"></script> -->
<?php echo $this->Html->script('script'); ?>
<script>
    $(".box1 button").click(function () {
        window.location.href = "<?= \Cake\Routing\Router::url(['controller' => 'pages', 'action' => 'cardio']) ?>"
    })
    $(".box2 button").click(function () {
        window.location.href = "<?= \Cake\Routing\Router::url(['controller' => 'pages', 'action' => 'strength']) ?>"
    })

</script>
</body>
</html>