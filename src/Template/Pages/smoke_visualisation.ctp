<?= $this->Html->css('smoke.css'); ?>
<div class="smoke-visualisation-container">
    <div class="inner">
        <h1>Smoking & Chronic Heart Disease</h1>
        <div class="section row">
            <p class="col-md-4 col-sm-6 col-xs-12">Smoking is a major risk factor for CHD.
                Cigarette smoking promotes atherosclerosis and increases the
                levels of
                blood clotting factors such as fibrinogen. Nicotine also accelerates heart rate and raises blood
                pressure.</p>
            <div class="col-md-8 col-sm-6 col-xs-12" style="border-left: 1px solid silver; padding: 0 5vw;">
                <p>Compared with non-smokers, <span style="font-size: xx-large; ">smoking more than 25 cigarettes a day increased the risk of more than <b>fivefold</b></span>.
                </p>
                <p>Also, the number of smokers between 45 to 60 years of age smoked a lot which accounted for 16% of the
                    total population in 2019.</p>
            </div>
        </div>
        <div id="chart1" style="height: 500px"></div>
        <div class="section">
            <p>This graph shows the percentage of people suffering from diseases caused due to tobacco smoking between
                2013 and 2019 at an interval of 3 years.</p>
            <p>According to the National drug strategy household survey conducted by the Australian Institute of Health
                and Welfare. In 2019, <b style="text-transform: capitalize">heart diseases ranked highest</b> among
                other diseases like diabetes, cancer, asthma. By 2019 the cases related to
                heart disease were the highest among the citizens of Australia who smoke on a regular basis and it
                contributes to 19.7% of the population who smokes tobacco.</p>
        </div>
        <div>
            <table class="columns center">
                <tr>
                    <td>
                        <div id="chart2"></div>
                    </td>
                    <td>
                        <div id="chart3" style="border-left: 1px solid #ccc"></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="section">
            <p>The pie chart here illustrates the distribution of males by age. It describes the percentage of males who
                smoke in a given age group. </p>
            <p>As we can see. In 2019, around 23.25% of the male population around age 40-49 and 50-59 smokes. That's
                around 46.6% of the total male population compared to any other age group. The risk of CHD is also
                greater for people in this age group.</p>
        </div>

    </div>
</div>

<script>
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart1);

    function drawChart1() {
        var data = new google.visualization.arrayToDataTable([
            ['Dieases caused by smoking', '2013', '2016', '2019'],
            ['Heart diseases', 20.4, 19.8, 19.7],
            ['Diabetes', 6.3, 6.4, 6.2],
            ['Asthma', 9.5, 9.6, 9.6],
            ['Low iron (anaemia)', 8.6, 9, 11],
            ['Cancer', 2.9, 3.8, 4.1],
            ['Depression', 11.1, 12.4, 13],
            ['Anxiety disorder', 7.4, 9.9, 11.1],
            ['Any mental illness', 15.7, 18.1, 19.1],
            ['Chronic pain', 10, 10.6, 11.2],
            ['Other condition not listed', 6.3, 8.3, 8.7]
        ]);

        var options = {
            width: 1000,
            legend: {
                position: "top"
            },
            title: 'Dieases caused by smoking',
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart1'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawMaleChart);
    google.charts.setOnLoadCallback(drawFemaleChart);

    function drawMaleChart() {
        var data = google.visualization.arrayToDataTable([
            ['Age group (years)', '2019'],
            ['14-17', 20000],
            ['18-24', 100000],
            ['25-29	', 100000],
            ['30-39', 200000],
            ['40-49', 300000],
            ['50-59', 300000],
            ['60-69', 200000],
            ['70+', 70000],
        ]);
        var options = {
            title: 'Male Smoking Numbers - 2019',
            width: 400,
            height: 500,
            legend: 'none',
            pieSliceText: 'label',
            slices: {
                4: {offset: 0.1},
                5: {offset: 0.1}
            },
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart2'));
        chart.draw(data, options);
    }

    function drawFemaleChart() {
        var data = google.visualization.arrayToDataTable([
            ['Age group (years)', '2019'],
            ['14-17', 9000],
            ['18-24', 100000],
            ['25-29	', 100000],
            ['30-39', 200000],
            ['40-49', 200000],
            ['50-59', 200000],
            ['60-69', 100000],
            ['70+', 60000],

        ]);
        var options = {
            title: 'Female Smoking Numbers - 2019',
            width: 400,
            height: 500,
            legend: 'none',
            pieSliceText: 'label',
            slices: {
                4: {offset: 0.1},
                5: {offset: 0.1}
            },
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart3'));
        chart.draw(data, options);
    }
</script>