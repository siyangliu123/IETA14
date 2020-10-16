<?= $this->Html->css('questionnaire.css'); ?>
<script>
    $(function () {
        $("#slider-range-max").slider({
            range: "max",
            min: 0,
            max: 5,
            value: 0,
            slide: function (event, ui) {
                $("#fruit_veg").val(ui.value);
            }
        });
        $("#fruit_veg").val($("#slider-range-max").slider("value"));
    });
</script>
<script type="text/javascript">
    $(function () {
        var progress = 1;

        var $tabs = $('#tabs').tabs({
            disabled: [1, 2, 3, 4, 5, 6, 7, 8]
        });

        $(".dialog").dialog({
            autoOpen: false,
            show: {
                effect: "blind",
                duration: 500
            },
            hide: {
                effect: "explode",
                duration: 500
            },
            modal: true,
            buttons: {
                Ok: function () {
                    $(this).dialog("close");
                }
            }
        });

        $("#tabs .row").each(function (i) {

            var totalSize = $("#tabs .row").length - 1;

            if (i !== totalSize) {
                next = i + 1;
                $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next &#187;</a>");
            }

            if (i !== 0) {
                prev = i - 1;
                $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Previous</a>");
            }

            if (i === totalSize - 1) {
                $(this).append("<a href='#' type='submit' class='next-tab mover' id='finish'>Finish</a>");
            }

        });

        $(' .next-tab').click(function () {

            var inputname = $(this).parent().find("input").attr("name");
            if (inputname !== undefined) {
                if ($('input[name="' + inputname + '"]:checked').length === 0 && $('input[name="' + inputname + '"]').is(':radio')) {
                    $(".dialog").dialog("open");
                }
                else {
                    $tabs.tabs("enable", parseInt($(this).attr("rel")));
                    $tabs.tabs("option", "active", $(this).attr("rel"));
                }
            }
            else {
                $tabs.tabs("enable", parseInt($(this).attr("rel")));
                $tabs.tabs("option", "active", $(this).attr("rel"));
            }
            progress+=1;
            $( "#progressbar" ).progressbar({
                value: progress
            });

            return false;
        });

        $('.prev-tab').click(function () {
            $tabs.tabs("option", "active", $(this).attr("rel"));
            return false;
        });

        $("input[type=radio]").checkboxradio();

        $( function() {
            $( "#progressbar" ).progressbar({
                max: 9,
                value: progress
            });
        } );

        $("#finish").on("click", function () {
            var age = parseInt($("input[name=age]:checked").val());
            var gender = parseInt($("input[name=gender]:checked").val());
            var smoke = parseInt($("input[name=smoke]:checked").val());
            var drink = parseInt($("input[name=drink]:checked").val());
            var family = parseInt($("input[name=family]:checked").val());
            var fruit_veg_val = parseInt($("input[name=fruit_veg]").val());
            var fruit_veg;
            var result;
            if (fruit_veg_val < 1) {
                fruit_veg = 3;
            }
            else if (fruit_veg_val >= 1 && fruit_veg_val < 3) {
                fruit_veg = 0;
            }
            else if (fruit_veg_val >= 3 && fruit_veg_val < 5) {
                fruit_veg = -1;
            }
            else if (fruit_veg_val === 5) {
                fruit_veg = -3;
            }
            result = age + gender + smoke + drink + family + fruit_veg;
            if(result<=5){
                $(".result").hide();
                $(".result.low").show();
            }
            else if(result>5&&result<=10){
                $(".result").hide();
                $(".result.moderate").show();
            }
            else if(result>10){
                $(".result").hide();
                $(".result.high").show();
            }
            else{
                console.log(age + " " + gender + " " + smoke + " " + drink + " " + family + " " + fruit_veg);
                alert("Cannot get result, please refresh and try again.")
            }

            $tabs.tabs("enable", 8);
            $tabs.tabs({
                active: 8
            });
        });
    });

</script>
<div class="questionnaire-container">
    <div class="title">
        <h1>Risk Checker</h1>
        <h5>Free online CHD primary test you can have</h5>
    </div>
    <h5 style="text-align: left">Progress: </h5>
    <div class="dialog" title="Please input required data">
        <p>Please <b>select from one of the selection or slider</b> to complete the questionnaire.</p>
    </div>

    <div id="progressbar"></div>
    <form id="questionnaire-form">
        <div id="tabs" class="container">
            <ul>
                <li><a href="#tabs-1">Introduction</a></li>
                <li><a href="#tabs-2">Information</a></li>
                <li><a href="#tabs-3">Age</a></li>
                <li><a href="#tabs-4">Gender</a></li>
                <li><a href="#tabs-5">Smoke</a></li>
                <li><a href="#tabs-6">Drink</a></li>
                <li><a href="#tabs-7">Family History</a></li>
                <li><a href="#tabs-8">Fruit & Veg</a></li>
                <li><a href="#tabs-9">Result</a></li>
            </ul>
            <div id="tabs-1" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("risk_check.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right">
                    <div>This 2-minute health questionnaire will assess your risk for</div>
                    <div class="chd-title">Coronary Heart Disease</div>
                    <div>We will also provide you practical tips on how to lower your risk</div>
                    <div><span class="strong orange">Warning</span>: This tool <span class="strong red">CANNOT</span> replace professional health check</div>
                </div>


            </div>
            <div id="tabs-2" class=" questionnaire-info row">
                <h5>This test consider factors includes age, gender, diet, family, smoking and drinking habit.</h5>

                <div class="col-md-9 col-lg-9 left">

                    <ul>
                        <li>Coronary heart disease risk increases as you grow <b>older.</b></li>
                        <li><b>Men</b> generally have a higher risk of heart disease.</li>
                        <li>If you <b>smoke and drink</b> often, your risk goes up.</li>
                        <li>If your immediate <b>family has heart disease</b>, your risk goes up.</li>
                    </ul>
                    <?php
                    echo $this->Html->link("Read More", ['controller' => 'pages', 'action' => 'smoke_visualisation'], ['class' => 'btn btn-primary']);
                    ?>
                </div>
            </div>
            <div id="tabs-3" class="row">

                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("age.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right widget">
                    <fieldset>
                        <legend>How old are you?</legend>
                        <label for="age-1">Under 34</label>
                        <input type="radio" name="age" id="age-1" value="-9">
                        <label for="age-2">35 to 39</label>
                        <input type="radio" name="age" id="age-2" value="-4">
                        <label for="age-3">40 to 44</label>
                        <input type="radio" name="age" id="age-3" value="0">
                        <label for="age-4">45 to 49</label>
                        <input type="radio" name="age" id="age-4" value="1">
                        <label for="age-5">50 to 54</label>
                        <input type="radio" name="age" id="age-5" value="2">
                        <label for="age-6">55 to 59</label>
                        <input type="radio" name="age" id="age-6" value="3">
                        <label for="age-7">60 to 64</label>
                        <input type="radio" name="age" id="age-7" value="4">
                        <label for="age-8">65 to 69</label>
                        <input type="radio" name="age" id="age-8" value="6">
                        <label for="age-9">Above 70</label>
                        <input type="radio" name="age" id="age-9" value="8">
                    </fieldset>
                </div>
            </div>
            <div id="tabs-4" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("gender.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right widget">
                    <fieldset>
                        <legend>What was your gender at birth?</legend>
                        <label for="gender-1">Male</label>
                        <input type="radio" name="gender" id="gender-1" value="3">
                        <label for="gender-2">Female</label>
                        <input type="radio" name="gender" id="gender-2" value="1">
                    </fieldset>
                </div>
            </div>
            <div id="tabs-5" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("smoking.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right widget">
                    <fieldset>
                        <legend>Do you smoke? If so, how many cigarettes/day?</legend>
                        <label for="smoke-1">No</label>
                        <input type="radio" name="smoke" id="smoke-1" value="0">
                        <label for="smoke-2">1 to 5</label>
                        <input type="radio" name="smoke" id="smoke-2" value="1">
                        <label for="smoke-3">6 to 10</label>
                        <input type="radio" name="smoke" id="smoke-3" value="2">
                        <label for="smoke-4">11 to 20</label>
                        <input type="radio" name="smoke" id="smoke-4" value="3">
                        <label for="smoke-5">20 to 30</label>
                        <input type="radio" name="smoke" id="smoke-5" value="4">
                        <label for="smoke-6">More than 30</label>
                        <input type="radio" name="smoke" id="smoke-6" value="5">
                    </fieldset>
                </div>
            </div>
            <div id="tabs-6" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("drink.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right widget">
                    <fieldset>
                        <legend>What is your drink standard per day?</legend>
                        <label for="drink-1">0 to 1</label>
                        <input type="radio" name="drink" id="drink-1" value="0">
                        <label for="drink-2">2 to 3</label>
                        <input type="radio" name="drink" id="drink-2" value="1">
                        <label for="drink-3">4 to 5</label>
                        <input type="radio" name="drink" id="drink-3" value="3">
                        <label for="drink-4">More than 5</label>
                        <input type="radio" name="drink" id="drink-4" value="5">
                    </fieldset>
                </div>
            </div>
            <div id="tabs-7" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("family.png");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right widget">
                    <fieldset>
                        <legend>Has a close relative been diagnosed with coronary heart disease?</legend>
                        <label for="family-1">No</label>
                        <input type="radio" name="family" id="family-1" value="1">
                        <label for="family-2">Yes</label>
                        <input type="radio" name="family" id="family-2" value="5">
                    </fieldset>
                </div>
            </div>
            <div id="tabs-8" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("nutrition.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right">
                    <fieldset>
                        <legend>On average, how many serves of fruit and vegetables do you eat, each day?</legend>
                        <p>
                            <label for="fruit_veg">Serves:</label>
                            <input type="text" id="fruit_veg" name="fruit_veg" readonly
                                   style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range-max"></div>
                    </fieldset>
                </div>
            </div>
            <div id="tabs-9" class="row">
                <div class="result low">
                    <h1>Congratulations!</h1>
                    <h5>Your risk of Coronary Heart Disease is <b class="green">Low</b>, please continue the healthy lifestyle!</h5>
                    <div>See diet recommendation <?php
                        echo $this->Html->link("here", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                        ?>.
                    </div>
                    <div>See exercise recommendation <?php
                        echo $this->Html->link("here", ['controller' => 'pages', 'action' => 'exercise']);
                        ?>.
                    </div>
                </div>
                <div class="result moderate">
                    <h1>Your risk of Coronary Heart Disease is <b class="orange">Moderate</b>.</h1>
                    <h5>We suggest you contact your GP about your recent health.</h5>
                    <h5>We encourage you adopt healthy habits to prevent CHD:</h5>
                    <ul>
                        <li>If you want to eat healthier, use this <?php
                            echo $this->Html->link("diet guideline", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                            ?>. to help you plan nutritious
                            meals.</li>
                        <li>If you are starting a new activity. Find more tips on how to <?php
                            echo $this->Html->link("start exercising", ['controller' => 'pages', 'action' => 'exercise']);
                            ?>.</li>
                        <li>If you are smoker, please consider <a href="https://www.health.gov.au/health-topics/smoking-and-tobacco/how-to-quit-smoking" target="_blank">quit smoking</a>.</li>
                        <li>If you drink over <?php
                            echo $this->Html->link("limit", ['controller' => 'foods', 'action' => 'healthy_nutrition/#section6']);
                            ?>, set yourself a limit and count your standard drinks, plan regular
                            alcohol-free days each week.</li>
                    </ul>
                </div>
                <div class="result high">
                    <h1>Your risk of Coronary Heart Disease is <b class="red">High</b>.</h1>
                    <ul>
                        <li>Please start to eat healthier, use this <?php
                            echo $this->Html->link("diet guideline", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                            ?>. to help you plan nutritious meals.</li>
                        <li>If you are starting a new activity. Find more tips on how to <?php
                            echo $this->Html->link("start exercising", ['controller' => 'pages', 'action' => 'exercise']);
                            ?>.</li>
                        <li>If you are smoker, please consider <a href="https://www.health.gov.au/health-topics/smoking-and-tobacco/how-to-quit-smoking" target="_blank">quit smoking</a>.</li>
                        <li>If you drink over <?php
                            echo $this->Html->link("limit", ['controller' => 'foods', 'action' => 'healthy_nutrition/#section6']);
                            ?>, set yourself a limit and count your standard drinks, plan regular
                            alcohol-free days each week.</li>
                    </ul>
                    <h5>We recommend you make an medical appointment as soon as possible and ask:</h5>
                    <ul>
                        <li>About lowering your risk for developing CHD.</li>
                        <li>To check your blood pressure to confirm your heart disease risk.</li>
                    </ul>
                    <div>Click and see <?php
                        echo $this->Html->link("Hospitals/Clinics", ['controller' => 'HospitalLocations', 'action' => 'list_hospitals']);
                        ?> nearby.</div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>

</script>