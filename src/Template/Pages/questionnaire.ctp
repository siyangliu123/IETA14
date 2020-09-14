<?= $this->Html->css('questionnaire.css'); ?>

<div class="questionnaire-container">
    <div class="title">
        <h1>Risk Checker</h1>
        <h5>Free online CHD primary test you can have</h5>
    </div>
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
        </ul>
        <div id="tabs-1" class="row">
            <div class="col-md-3 col-lg-3 left">
                <?php
                echo $this->Html->image("risk_check.jpg");
                ?>
            </div>
            <div class="col-md-9 col-lg-9 right">
                <div>This 2-minute health questionnaire will assess you risk for</div>
                <div class="chd-title">Coronary Heart Disease</div>
                <div>We will also provide you practical tips on how to lower your risk</div>
                <div>This tool <span class="strong red">CANNOT</span> replace professional health check</div>
            </div>


        </div>
        <div id="tabs-2" class=" questionnaire-info row">
                <h5>This test consider factors includes age, gender, diet, family, smoking and drinking habit.</h5>

                <div class="col-md-9 col-lg-9 left">

                    <ul>
                        <li>Coronary heart disease risk increases as you grow older.</li>
                        <li>Men generally have a higher risk of heart disease.</li>
                        <li>If your immediate family has heart disease, your risk goes up.</li>
                        <li>If you smoke and drink often, your risk goes up.</li>
                    </ul>
                </div>

                <div class="col-md-3 col-lg-3">
                    <br><br><br>
                    <?php
                    echo $this->Html->link("Read More", ['controller' => 'pages', 'action' => 'smoke_visualisation'], ['class' => 'btn btn-info']);
                    ?>
                </div>
        </div>
        <div id="tabs-3" class="row">
            <div class="col-md-3 col-lg-3 left">
                <?php
                echo $this->Html->image("gender.jpg");
                ?>
            </div>
            <div class="col-md-9 col-lg-9 right widget">
                <fieldset>
                    <legend>How old are you? </legend>
                    <label for="age-1">Under 34</label>
                    <input type="radio" name="age" id="age-1" value="20-34">
                    <label for="age-2">35-39</label>
                    <input type="radio" name="age" id="age-2" value="35-39">
                    <label for="age-3">40-44</label>
                    <input type="radio" name="age" id="age-3" value="40-44">
                    <label for="age-4">45-49</label>
                    <input type="radio" name="age" id="age-4" value="45-49">
                    <label for="age-5">40-44</label>
                    <input type="radio" name="age" id="age-5" value="50-54">
                    <label for="age-6">50-54</label>
                    <input type="radio" name="age" id="age-6" value="50-54">
                    <label for="age-7">55-59</label>
                    <input type="radio" name="age" id="age-7" value="55-59">
                    <label for="age-8">60-64</label>
                    <input type="radio" name="age" id="age-8" value="60-64">
                    <label for="age-9">65-69</label>
                    <input type="radio" name="age" id="age-9" value="65-69">
                    <label for="age-10">Above 70</label>
                    <input type="radio" name="age" id="age-10" value="70-74">
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
                    <legend>What was your gender at birth? </legend>
                    <label for="gender-1">Male</label>
                    <input type="radio" name="gender" id="gender-1" value="Male">
                    <label for="gender-2">Female</label>
                    <input type="radio" name="gender" id="gender-2" value="Female">
                </fieldset>
        </div>
        <div id="tabs-5" class="row">

        </div>
        <div id="tabs-6" class="row">

        </div>
        <div id="tabs-7" class="row">

        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {

        var $tabs = $('#tabs').tabs();

        $("#tabs .row").each(function (i) {

            var totalSize = $("#tabs .row").length - 1;

            if (i != totalSize) {
                next = i + 1;
                $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next &#187;</a>");
            }

            if (i != 0) {
                prev = i - 1;
                $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Previous</a>");
            }

        });

        $('.next-tab, .prev-tab').click(function () {
            $tabs.tabs("option", "active", $(this).attr("rel"));
            return false;
        });

        $( "input" ).checkboxradio();
    });

</script>