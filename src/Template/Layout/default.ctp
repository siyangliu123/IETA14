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
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('home.css') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="top-nav row">
    <div class="col-md-3 col-lg-3">
        <?php echo $this->Html->image('logo-transparent', ['id' => 'logo', 'url' => [
            'controller' => 'Pages',
            'action' => 'display']
        ]); ?>
    </div>
    <div class="col-md-6 col-lg-6">
        <nav class="menu" role='navigation'>
            <ol>
                <li class="menu-item"><a href="#0">Home</a></li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="#0">Exercises</a>
                    <ol class="sub-menu" aria-label="submenu">
                        <li class="menu-item"><a href="#0">Item1</a></li>
                        <li class="menu-item"><a href="#0">Item2</a></li>
                        <li class="menu-item"><a href="#0">Item3</a></li>
                    </ol>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="#">Nutrition</a>
                    <ol class="sub-menu" aria-label="submenu">
                        <li class="menu-item">
                            <?php
                            echo $this->Html->link("Healthy Nutrition", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'healthy']);
                            ?>
                        </li>
                        <li class="menu-item">
                            <?php
                            echo $this->Html->link("Unhealthy Nutrition", ['controller' => 'nutritions', 'action' => 'nutrition_list', 'filter' => 'unhealthy']);
                            ?>
                        </li>
                        <li class="menu-item"><?php
                            echo $this->Html->link("All Nutrition", ['controller' => 'nutritions', 'action' => 'nutrition_list']);
                            ?>
                        </li>

                    </ol>
                </li>
                <li class="menu-item"><a href="#0">Contact</a></li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="#0">Account</a>
                    <ol class="sub-menu" aria-label="submenu">
                        <li class="menu-item"><a href="#0">Log in</a></li>
                        <li class="menu-item"><a href="#0">Sign Up</a></li>
                    </ol>
                </li>
            </ol>
        </nav>
    </div>
    <div class="col-md-2 col-lg-2">
        <div class="wrapper">
            <form role="search" method="get" class="search-form form" action="">
                <label>
                    <span class="screen-reader-text">Search for...</span>
                    <input type="search" class="search-field" placeholder="Search..." value="" name="search"
                           title=""/>
                </label>
                <input type="submit" class="search-submit button" value="&#xf002"/>
            </form>
        </div>
    </div>
</div>

<?= $this->Flash->render() ?>
<div class="container">
    <?= $this->fetch('content') ?>
</div>

</body>

</html>
