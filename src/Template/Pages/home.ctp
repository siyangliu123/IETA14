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
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

?>
<!DOCTYPE html>
<html>

<body class="home">
<div class="home-container">

    <div class="photo-container">

        <?php echo $this->Form->create(null, ['type' => 'post', 'controller' => 'pages', 'action' => 'redirection']); ?>
        <!--            <div class="speech-bubble">-->
        <!--                <div>Having difficulties reading?</div>-->
        <!--                <div> Browse <a href="#" class="btn btn-primary">Simplified</a> Version</div>-->
        <!--            </div>-->
        <h2>Save more <i class="fas fa-heart" style="color: red"></i> Hearts <i class="fas fa-heart" style="color: red"></i> from <br/><span>chronary heart diseases</span></h2>
        <div id="select-div">
            <span>Are you</span>
            <select class="form-control" name="selection">
                <option value="1" disabled>Having concerns about CHD</option>
                <option value="2">Currently having CHD</option>
                <option value="3" disabled>Concerned for someone else having CHD</option>
            </select>
            <a type="submit" class="btn btn-red">Submit</a>
        </div>

        <?php echo $this->Form->end(); ?>

    </div>


    <div class="content">
        <div class="row" style="font-weight: bold"><h2>Chronary Heart Disease (CHD) Ranked <span
                        style="font-size: 10vh">No.1</span> in leading single cause of death in Australia.</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="section"><p>CHD can cause <b style="text-transform: capitalize">stroke, angina pectoris,
                            myocardial infarction, arrhythmia, and heart failure</b>. They are the main causes of sudden
                        death in patients with CHD.</p></div>
                <div class="section">
                    <p>According to research, the main factors for CHD are <b style="text-transform: capitalize">smoking,
                            age, and gender.</b></p>
                    <br />
                    <?php
                    echo $this->Html->link("Read More", ['controller' => 'pages', 'action' => 'smoke_visualisation'], ['class' => 'btn btn-info']);
                    ?>
                    <br />
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <h1>Chronic Heart Disease Kills</h1>
                <div id="myChart" style="height: 500px;"></div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-lg-5 section card one">
                <h5>Nutrition Advice</h5>
                <button class="btn btn-info">Read More</button>
            </div>
            <div class="col-md-5 col-lg-5 section card two">
                <h5>Exercise Advice</h5>
                <button class="btn btn-info">Read More</button>

            </div>
            <div class="col-md-5 col-lg-5 section card three">
                <h5>CHD Statistics</h5>
                <button class="btn btn-info">Read More</button>

            </div>
            <div class="col-md-5 col-lg-5 section card four">
                <h5>Daily Reminder</h5>
                <button class="btn btn-info">Read More</button>

            </div>
        </div>
    </div>


</body>

<script>
    google.charts.load('current', {'packages': ['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['Major causes of CVD', 'Male', 'Female'],
            <?php
            foreach ($mortalityRecords as $mortalityRecord) {
                echo "['" . $mortalityRecord->cause . "', " . $mortalityRecord->male_death . ", " . $mortalityRecord->female_death . "],";
            }
            ?>
        ]);

        var options = {
            width: 600,
            chart: {
                title: 'CVD Mortality Rate',
            },
            bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('myChart'));
        chart.draw(data, options);
    };
    $(".btn-red").click(function () {
        window.location.href = "<?= \Cake\Routing\Router::url(['controller' => 'nutritions', 'action' => 'healthy_nutrition']) ?>"
    });
</script>
</html>
