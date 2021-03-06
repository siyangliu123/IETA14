<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Heart's Healthy Habits
    </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/34eee111af.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
            integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('menu.css') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>


<button id="scrollTop" class="btn btn-primary"><i class="fas fa-arrow-up fa-lg"></i></button>
<div class="top-nav row">
    <?php echo $this->Html->image('logo.png', ['id' => 'logo', 'url' => [
        'controller' => 'Pages',
        'action' => 'display']
    ]); ?>

    <div class="button">
        <a class="btn-open"></a>
    </div>

    <div class="menu">
        <div class="wrap">
            <ul class="wrap-nav">
                <li><?php
                    echo $this->Html->link("Home", ['controller' => 'pages', 'action' => 'display']);
                    ?></li>
                <li><span>About CHD</span>
                    <ul>
                        <li><?php
                            echo $this->Html->link("CHD Mortality Rate", ['controller' => 'MortalityRecord', 'action' => 'visualisation']);
                            ?></li>
                        <li><?php
                            echo $this->Html->link("Smoking & CHD", ['controller' => 'pages', 'action' => 'smoke_visualisation']);
                            ?></li>
                        <li><?php
                            echo $this->Html->link("CHD Questionnaire", ['controller' => 'Pages', 'action' => 'questionnaire']);
                            ?></li>
                        <li><?php
                            echo $this->Html->link("Nearby Hospitals", ['controller' => 'HospitalLocations', 'action' => 'list_hospitals']);
                            ?></li>
                    </ul>
                </li>
                <li><?php
                    echo $this->Html->link("Diet", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                    ?>
                    <ul>
                        <li>
                            <?php
                            echo $this->Html->link("About Diet", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link("Unhealthy Diet List", ['controller' => 'foods', 'action' => 'index', 'filter' => 'unhealthy']);
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link("Nuts Nutrition List", ['controller' => 'foods', 'action' => 'index', 'filter' => 'nuts']);
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link("View Drink List", ['controller' => 'foods', 'action' => 'index', 'filter' => 'alcohol']);
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link("All Food List", ['controller' => 'foods', 'action' => 'index']);
                            ?>
                        </li>
                        <li><?php
                            echo $this->Html->link("Food Calories Calculator", ['controller' => 'foods', 'action' => 'calculator']);
                            ?>
                        </li>
                    </ul>
                </li>
                <li><?php
                    echo $this->Html->link("Exercises", ['controller' => 'pages', 'action' => 'exercise']);
                    ?>
                    <ul>
                        <li><?php
                            echo $this->Html->link("Cardiovascular Exercises", ['controller' => 'pages', 'action' => 'cardio']);
                            ?></li>
                        <li><?php
                            echo $this->Html->link("Strength Exercises", ['controller' => 'pages', 'action' => 'strength']);
                            ?></li>
                        <li><?php
                            echo $this->Html->link("Exercise Calories Calculator", ['controller' => 'pages', 'action' => 'exercise_calculator']);
                            ?></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</div>

<?= $this->Flash->render() ?>
<div class="all-container">
    <?php
    //Credit goes to Dominic Barnes - http://stackoverflow.com/users/188702/dominic-barnes
    //http://stackoverflow.com/questions/2594211/php-simple-dynamic-breadcrumb
    function breadcrumbs($separator = ' &raquo; ', $home = 'Home')
    {
        $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
        $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
        $breadcrumbs = Array("<a href=\"$base\">&nbsp;$home&nbsp;</a>");
        $last = end(array_keys($path));
        foreach ($path AS $x => $crumb) {
            $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
            if ($x != $last && $title!="View")
                $breadcrumbs[] = "&nbsp;<a href=\"$base$crumb\">$title</a>&nbsp;";
            elseif ($x == $last)
                $breadcrumbs[] = "&nbsp;<span class='last'>".$title."</span>";
        }
        return implode($separator, $breadcrumbs);
    }

    ?>

    <?php
    if ($this->getRequest()->getRequestTarget() !== "/") {
        echo '<div class="breadcrumb">';
        echo breadcrumbs(' / ');
        echo '</div>';

    }
    ?>

    <?= $this->fetch('content') ?>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">We are a small team whose primary focus is on providing knowledge about the
                    harms that are caused due to Coronary Heart Disease and the measures that can be taken to reduce
                    the aftermath of CHD. We provide solutions such as giving useful information about nutrition
                    according to user needs and inform them what is the main cause of CHD.</p>
            </div>

            <div class="col-xs-6 col-md-6">
                <h6>Categories</h6>
                <ul class="footer-links" style="text-align: center">


                    <li><?php
                        echo $this->Html->link("Diet Advice", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                        ?></li>
                    <li>
                        <?php
                        echo $this->Html->link("Exercise Advice", ['controller' => 'pages', 'action' => 'exercise']);
                        ?>
                    </li>
                    <li><?php
                        echo $this->Html->link("CHD Mortality Rate", ['controller' => 'MortalityRecord', 'action' => 'visualisation']);
                        ?></li>
                    <li><?php
                        echo $this->Html->link("Smoking & CHD", ['controller' => 'pages', 'action' => 'smoke_visualisation']);
                        ?></li>
                </ul>
            </div>

        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                    <a href="#">Heart KSDS Tech</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
<script>
    $("#about").click(function () {
        $("html, body").animate({scrollTop: $(document).height()}, 1000);
    })

    $('#scrollTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 'slow');
        return false;
    });

    function goBack() {
        window.history.back();
    }


    $(document).ready(function () {
        $(".button a").click(function () {
            $(".menu").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });

</script>
</html>
