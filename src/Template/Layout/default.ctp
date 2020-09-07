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
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
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

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('home.css') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<button id="scrollTop" class="btn btn-primary"><i class="fas fa-arrow-up fa-lg"></i></button>
<div class="top-nav row">
    <div class="col-md-3 col-lg-3">
        <?php echo $this->Html->image('logo-transparent.png', ['id' => 'logo', 'url' => [
            'controller' => 'Pages',
            'action' => 'display']
        ]); ?>
    </div>
    <div class="col-md-9 col-lg-9">
        <nav class="menu" role='navigation'>
            <ol>
                <li class="menu-item"><?php
                    echo $this->Html->link("Home", ['controller' => 'pages', 'action' => 'display']);
                    ?></li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="#0">CHD Numbers</a>
                    <ol class="sub-menu" aria-label="submenu">
                        <li class="menu-item"><?php
                            echo $this->Html->link("CHD Mortality Rate", ['controller' => 'mortality_record', 'action' => 'visualisation']);
                            ?></li>
                        <li class="menu-item"><?php
                            echo $this->Html->link("Smoking & CHD", ['controller' => 'pages', 'action' => 'smoke_visualisation']);
                            ?></li>
                    </ol>
                </li>
<!--                <li class="menu-item" aria-haspopup="true">-->
<!--                    <a href="#0">Exercises</a>-->
<!--                    <ol class="sub-menu" aria-label="submenu">-->
<!--                        <li class="menu-item"><a href="#0">Item1</a></li>-->
<!--                        <li class="menu-item"><a href="#0">Item2</a></li>-->
<!--                        <li class="menu-item"><a href="#0">Item3</a></li>-->
<!--                    </ol>-->
<!--                </li>-->

                <li class="menu-item" aria-haspopup="true">
                    <?php
                    echo $this->Html->link("Nutrition", ['controller' => 'nutritions', 'action' => 'healthy_nutrition']);
                    ?>
                    <ol class="sub-menu" aria-label="submenu">
                        <li class="menu-item">
                            <?php
                            echo $this->Html->link("About Nutrition", ['controller' => 'nutritions', 'action' => 'healthy_nutrition']);
                            ?>
                        </li>
                        <li class="menu-item">
                            <?php
                            echo $this->Html->link("Unhealthy Nutrition Lists", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'unhealthy']);
                            ?>
                        </li>
                        <li class="menu-item"><?php
                            echo $this->Html->link("All Nutrition", ['controller' => 'nutritions', 'action' => 'nutrition_list']);
                            ?>
                        </li>

                    </ol>
                </li>
                <li class="menu-item" id="about"><a href="#">About</a></li>
<!--                <li class="menu-item" aria-haspopup="true">-->
<!--                    <a href="#0">Account</a>-->
<!--                    <ol class="sub-menu" aria-label="submenu">-->
<!--                        <li class="menu-item"><a href="#0">Log in</a></li>-->
<!--                        <li class="menu-item"><a href="#0">Sign Up</a></li>-->
<!--                    </ol>-->
<!--                </li>-->
            </ol>
        </nav>
    </div>
    <div class="col-md-2 col-lg-2">
<!--        <div class="wrapper">-->
<!--            <form role="search" method="get" class="search-form form" action="">-->
<!--                <label>-->
<!--                    <span class="screen-reader-text">Search for...</span>-->
<!--                    <input type="search" class="search-field" placeholder="Search..." value="" name="search"-->
<!--                           title=""/>-->
<!--                </label>-->
<!--                <input type="submit" class="search-submit button" value="&#xf002"/>-->
<!--            </form>-->
<!--        </div>-->
    </div>
</div>

<?= $this->Flash->render() ?>
<div class="all-container">
    <?= $this->fetch('content') ?>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">We are a small team whose primary focus is on providing knowledge about the harms that are caused due to Coronary Heart Disease and the measures that can be taken to reduce the aftermath of CHD. We provide solutions such as giving useful information about nutrition according to user needs and inform them what is the main cause of CHD.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">

                    <li><?php
                        echo $this->Html->link("CHD Mortality Rate", ['controller' => 'mortality_record', 'action' => 'visualisation']);
                        ?></li>
                    <li><?php
                        echo $this->Html->link("Smoking & CHD", ['controller' => 'pages', 'action' => 'smoke_visualisation']);
                        ?></li>
                    <li><?php
                        echo $this->Html->link("Nutrition", ['controller' => 'nutritions', 'action' => 'healthy_nutrition']);
                        ?></li>
                    <li>
                        <?php
                        echo $this->Html->link("Unhealthy Nutrition", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'unhealthy']);
                        ?>
                    </li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
<!--                    <li><a href="#">About Us</a></li>-->
<!--                    <li><a href="#">Contact Us</a></li>-->
<!--                    <li><a href="#">Contribute</a></li>-->
<!--                    <li><a href="#">Privacy Policy</a></li>-->
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
    $("#about").click(function(){
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    })

    $('#scrollTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 'slow');
        return false;
    });

</script>
</html>
