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
        <form class="chd-form">
            <div class="speech-bubble">
                <div>Having difficulties reading?</div>
                <div> Browse <a href="#" class="btn btn-primary">Simplified</a> Version</div>
            </div>

            <div id="select-div">
                <span>Are you</span>
                <select class="form-control">
                    <option>Having concerns about CHD</option>
                    <option>Currently having CHD</option>
                    <option>Concerned for someone else having CHD</option>
                </select>
                <a type="submit" class="btn btn-red">Submit</a>

            </div>

        </form>

    </div>
    <h1>Chronic Heart Disease Kills</h1>

    <div class="row content">
        <div class="col-md-3 col-lg-3">
            Chronic Heart Disease Ranked No 1 in leading single cause of death in Australia.

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac iaculis diam, a commodo eros. Curabitur non volutpat justo, sed lobortis dui. Maecenas ex turpis, volutpat ac mollis id, porta consectetur tortor. Duis iaculis, purus at aliquam laoreet, massa tellus maximus enim, ac rhoncus dui eros non felis. Donec rhoncus eros quam, sit amet maximus lectus rutrum in. Maecenas finibus dui a tincidunt posuere. Sed faucibus dignissim erat quis volutpat. In venenatis odio quis bibendum ullamcorper. Sed id nisl porttitor, porta dui vitae, semper nibh. Duis ut diam porta, eleifend mi sit amet, auctor neque. Fusce et ultrices mauris, eu hendrerit risus. Ut odio nibh, aliquet vel faucibus vel, imperdiet sit amet dolor. Curabitur congue ex neque, in euismod justo interdum sit amet. Vestibulum condimentum ullamcorper nisi at interdum.

        </div>
        <div class="col-md-9 col-lg-9">
            <div id="myChart" style="width: 500px; height: 500px;"></div>

        </div>
    </div>
</div>





</body>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    // var ctx = document.getElementById('myChart').getContext('2d');
    // var myChart = new Chart(ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    //         datasets: [{
    //             label: '# of Votes',
    //             data: [12, 19, 3, 5, 2, 3],
    //             backgroundColor: [
    //                 'rgba(255, 99, 132, 0.2)',
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(153, 102, 255, 0.2)',
    //                 'rgba(255, 159, 64, 0.2)'
    //             ],
    //             borderColor: [
    //                 'rgba(255, 99, 132, 1)',
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(153, 102, 255, 1)',
    //                 'rgba(255, 159, 64, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [{
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //             }]
    //         }
    //     }
    // });
</script>
<script>
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['Major causes of CVD', 'Male', 'Female'],
            <?php
            foreach ($mortalityRecords as $mortalityRecord){
                echo "['".$mortalityRecord->cause."', ".$mortalityRecord->male_death.", ".$mortalityRecord->female_death."],";
            }
            ?>
        ]);

        var options = {
            width: 850,
            chart: {
                title: 'CVD Mortality Rate',
                subtitle: 'male on the left, female on the right'
            },
            bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('myChart'));
        chart.draw(data, options);
    };
</script>
</html>
