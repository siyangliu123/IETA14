<div class="visualisation-container">

    <div class="visualisation content">
        <h1>Chronic Heart Disease Mortality Rate</h1>

        <div>
            <p>For the data related to different heart diseases (CHD is ranked 1st in total number of cases)</p>
            <p>The bar chart illustrates the number of males and females affected by different cardiovascular diseases.
                According to the study of Australian Institute of Health and Welfare the highest mortality rate is for
                Coronary heart disease which is <b>11,075 cases for males and 8,702 cases for females</b>. It can be seen that the
                death rate for <b>CHD is highest among all other heart diseases</b> .
            </p>
        </div>
        <div><div id="myChart" style="width: 80%; height: 500px;"></div></div>



    </div>
</div>

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
            width: 850,
            chart: {
                title: 'CVD Mortality Rate',
            },
            bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('myChart'));
        chart.draw(data, options);
    };
</script>