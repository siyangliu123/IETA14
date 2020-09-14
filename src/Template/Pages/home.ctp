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
<script>
    $( function() {
        $( document ).tooltip({
            position: {
                my: "center top-20",
                at: "center top",
                using: function( position, feedback ) {
                    $( this ).css( position );
                    $( "<div>" )
                        .addClass( "arrow" )
                        .addClass( feedback.vertical )
                        .addClass( feedback.horizontal )
                        .appendTo( this );
                }
            }
        });
    } );
</script>
<body class="home">
<div class="home-container">

    <div class="photo-container">

        <?php echo $this->Form->create(null, ['type' => 'post', 'controller' => 'pages', 'action' => 'redirection']); ?>
        <!--            <div class="speech-bubble">-->
        <!--                <div>Having difficulties reading?</div>-->
        <!--                <div> Browse <a href="#" class="btn btn-primary">Simplified</a> Version</div>-->
        <!--            </div>-->
        <h1 class="ml10">
  <span class="text-wrapper">
    <span class="letters">Save more hearts from</span>
  </span>
        </h1>
        <h1 class="ml12">Coronary Heart Disease</h1>
        <div id="select-div">
            <span>Are you</span>
            <select class="form-control" id="selection" name="selection">
                <option value="1">Having concerns about develop CHD</option>
                <option value="2">Currently having CHD</option>
                <option value="3">Concerned for someone else will develop CHD</option>
                <option value="4">Someone else is currently having CHD</option>
            </select>
            <a type="submit" class="btn btn-red">Submit</a>
        </div>

        <?php echo $this->Form->end(); ?>

    </div>


    <div class="content">
        <div class="row" style="font-weight: bold"><h2>Coronary Heart Disease (CHD) Ranked <span
                        style="font-size: 10vh; color: red">No.1</span> in leading single cause of death in Australia.
            </h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <div class="section"><p>CHD can cause <b style="text-transform: capitalize">stroke, angina pectoris,
                            myocardial infarction, arrhythmia, and heart failure</b>. They are the main causes of sudden
                        death in patients with CHD.</p></div>
                <div class="section">
                    <p>According to research, the main factors for CHD are <b style="text-transform: capitalize">smoking,
                            age, and gender.</b></p>
                    <br/>
                    <?php
                    echo $this->Html->link("Read More", ['controller' => 'pages', 'action' => 'smoke_visualisation'], ['class' => 'btn btn-info']);
                    ?>
                    <br/>
                </div>
            </div>
            <div class="col-md-9 col-lg-9 infographic-container">
                <div>
                    <?php echo $this->Html->image('CHD infographic.png', ['id' => 'infographic', 'class' => 'content-image', 'onclick' => 'showImage(this);', 'title' => 'Click to view in full screen.']); ?>
                </div>
                <div class="image-container">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

                    <img id="expandedImg">

                    <div id="imgtext"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-lg-5 section card one">
                <h3>Nutrition Advice</h3>
                <?php
                echo $this->Html->link("Read More", ['controller' => 'nutritions', 'action' => 'healthy_nutrition'], ['class' => 'btn btn-success']);
                ?>
            </div>
            <div class="col-md-5 col-lg-5 section card two">
                <h3>Exercise Advice</h3>
                <button class="btn btn-success" disabled>Read More</button>

            </div>
            <div class="col-md-5 col-lg-5 section card three">
                <h3>CHD Statistics</h3>
                <?php
                echo $this->Html->link("Read More", ['controller' => 'mortality_record', 'action' => 'visualisation'], ['class' => 'btn btn-success']);
                ?>

            </div>
            <div class="col-md-5 col-lg-5 section card four">
                <h3>Daily Reminder</h3>
                <button class="btn btn-success" disabled>Read More</button>

            </div>
        </div>
    </div>


</body>

<script>
    $(document).ready(function () {
        var textWrapper = document.querySelector('.ml10 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
            .add({
                targets: '.ml10 .letter',
                rotateY: [-90, 0],
                duration: 1000,
                delay: (el, i) => 145 * i
            });

        var textWrapper = document.querySelector('.ml12');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
            .add({
                targets: '.ml12 .letter',
                translateX: [0, 40],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 2000,
                delay: (el, i) => 2500 + 30 * i
            });
    });
    //google.charts.load('current', {'packages': ['bar']});
    //google.charts.setOnLoadCallback(drawStuff);
    //
    //function drawStuff() {
    //    var data = new google.visualization.arrayToDataTable([
    //        ['Major causes of CVD', 'Male', 'Female'],
    //        <?php
    //        foreach ($mortalityRecords as $mortalityRecord) {
    //            echo "['" . $mortalityRecord->cause . "', " . $mortalityRecord->male_death . ", " . $mortalityRecord->female_death . "],";
    //        }
    //        ?>
    //    ]);
    //
    //    var options = {
    //        width: 600,
    //        chart: {
    //            title: 'CVD Mortality Rate',
    //        },
    //        bars: 'horizontal' // Required for Material Bar Charts.
    //    };
    //
    //    var chart = new google.charts.Bar(document.getElementById('myChart'));
    //    chart.draw(data, options);
    //};
    $(".btn-red").click(function () {
        var selection = $("#selection").val();
        if (selection === "1") {
            window.location.href = "<?= \Cake\Routing\Router::url(['controller' => 'pages', 'action' => 'questionnaire']) ?>"
        }
        else if (selection === "2") {
            window.location.href = "<?= \Cake\Routing\Router::url(['controller' => 'nutritions', 'action' => 'healthy_nutrition']) ?>"
        }
        else if (selection === "3") {
            window.location.href = "<?= \Cake\Routing\Router::url(['controller' => 'pages', 'action' => 'questionnaire']) ?>"
        }
        else if (selection === "4") {
            window.location.href = "<?= \Cake\Routing\Router::url(['controller' => 'nutritions', 'action' => 'healthy_nutrition']) ?>"
        }
    });

    function showImage(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>
</html>
