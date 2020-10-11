<?= $this->Html->css('calculator.css'); ?>

<script type="text/javascript">
    $(function () {
        $("#tooltip").tooltip({
            content: "Sedentary means a lifestyle that includes light physical activity associated with typical activities of daily living. <br/>Moderately active consists of walking 1.5 to 3 miles daily at a pace of 3 to 4 miles per hour (or the equivalent). <br/>An active person walks more than 3 miles daily at the same pace, or equivalent exercise.",
            html: true,
            show: {
                effect: "slideDown",
                delay: 250
            },
            hide: {
                effect: "slideUp",
                delay: 250
            }
        });

        $("#tooltip1").tooltip({
            show: {
                effect: "slideDown",
                delay: 250
            },
            hide: {
                effect: "slideUp",
                delay: 250
            }
        });


        var progress = 1;

        var $tabs = $('#tabs').tabs({
            disabled: [1, 2, 3, 4]
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
            progress += 1;
            $("#progressbar").progressbar({
                value: progress
            });

            return false;
        });

        $('.prev-tab').click(function () {
            $tabs.tabs("option", "active", $(this).attr("rel"));
            return false;
        });

        $("input[type=radio]").checkboxradio();

        $(function () {
            $("#progressbar").progressbar({
                max: 5,
                value: progress
            });
        });

        $("#finish").on("click", function () {
            var age = $("input[name=age]:checked").val();
            var lifestyle = $("input[name=lifestyle]:checked").val();
            var total = $(".total-cal").html();
            var calorie = findCalorie(age, lifestyle);
            $("#lifestyle").text(lifestyle);
            $("#result-span").text(calorie);
            $("#total-span").text(total);
            if (parseInt(total) < (calorie - 200)) {
                $(".result").hide();
                $(".result.below").show();
            }
            else if (parseInt(total) > (calorie + 200)) {
                $(".result").hide();
                $(".result.above").show();
            }
            else {
                $(".result").hide();
                $(".result.perfect").show();
            }

            $tabs.tabs("enable", 4);
            $tabs.tabs({
                active: 4
            });
        });
    });

</script>
<div class="calculator-container">
    <div class="inner">
        <div class="title">
            <h1>Calories Calculator</h1>
            <h5>Assess your lifestyle to reduce your risk of Heart Disease</h5>
        </div>
        <h5 style="text-align: left">Progress: </h5>
        <div class="dialog" title="Please input required data">
            <p>Please <b>select from one of the selection</b> to complete the questionnaire.</p>
        </div>

        <div id="progressbar"></div>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Introduction</a></li>
                <li><a href="#tabs-2">Age</a></li>
                <li><a href="#tabs-3">Lifestyle</a></li>
                <li><a href="#tabs-4">Calculator</a></li>
                <li><a href="#tabs-5">Result</a></li>

            </ul>
            <div id="tabs-1" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("risk_check.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right">
                    <div>The research suggests that weight loss is the main reason for the observed health improvements.</div>
                    <div>This simple calories calculator will assess your daily calories intake compare with age average.</div>
                    <div>We will also provide you practical tips on how to perform weight loss/gain.</div>
                    <div><span class="strong orange">Warning</span>: This tool <span class="strong red">CANNOT</span> ensure 100% accuracy.</div>
                </div>
            </div>
            <div id="tabs-2" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("age.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right widget">
                    <fieldset>
                        <legend>How old are you?</legend>
                        <label for="age-1">Under 21</label>
                        <input type="radio" name="age" id="age-1" value="21-25">
                        <label for="age-2">26 to 30</label>
                        <input type="radio" name="age" id="age-2" value="26-30">
                        <label for="age-3">31 to 35</label>
                        <input type="radio" name="age" id="age-3" value="31-35">
                        <label for="age-4">36 to 40</label>
                        <input type="radio" name="age" id="age-4" value="36-40">
                        <label for="age-5">41 to 45</label>
                        <input type="radio" name="age" id="age-5" value="41-45">
                        <label for="age-6">46 to 50</label>
                        <input type="radio" name="age" id="age-6" value="46-50">
                        <label for="age-7">51 to 55</label>
                        <input type="radio" name="age" id="age-7" value="51-55">
                        <label for="age-8">56 to 60</label>
                        <input type="radio" name="age" id="age-8" value="56-60">
                        <label for="age-9">61 to 65</label>
                        <input type="radio" name="age" id="age-9" value="61-65">
                        <label for="age-10">66 to 70</label>
                        <input type="radio" name="age" id="age-10" value="66-70">
                        <label for="age-11">71 to 75</label>
                        <input type="radio" name="age" id="age-11" value="71-75">
                        <label for="age-12">Above 76</label>
                        <input type="radio" name="age" id="age-12" value="76+">
                    </fieldset>
                </div>
            </div>
            <div id="tabs-3" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("jogging.png");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right widget">
                    <fieldset>
                        <legend>What's your lifestyle?
                            <a id="tooltip"
                               title="Sedentary means a lifestyle that includes light physical activity associated with typical activities of daily living. Moderately active consists of walking 1.5 to 3 miles daily at a pace of 3 to 4 miles per hour (or the equivalent). An active person walks more than 3 miles daily at the same pace, or equivalent exercise."><i
                                        class="fas fa-question-circle"></i></a>
                        </legend>
                        <label for="lifestyle-1">Sedentary</label>
                        <input type="radio" name="lifestyle" id="lifestyle-1" value="Sedentary">
                        <label for="lifestyle-2">Moderately active</label>
                        <input type="radio" name="lifestyle" id="lifestyle-2" value="Moderately active">
                        <label for="lifestyle-3">Active</label>
                        <input type="radio" name="lifestyle" id="lifestyle-3" value="Active">
                    </fieldset>
                </div>
            </div>
            <div id="tabs-4" class="row">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width:65%">
                        <col style="width:10%">
                        <col style="width:15%">
                        <col style="width:10%">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>Food</th>
                        <th>Calories</th>
                        <th>Serves
                            <a id="tooltip1"
                               title="Each serve is measured at per 100g."><i
                                        class="fas fa-question-circle"></i></a>
                        </th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id="default" style="display: none">
                        <td>
                            <a class="remove-row"><i class="fas fa-times-circle red fa-lg"></i></a>
                            <select id="food-select" class="food-select" style="width: 35vw">
                                <option selected="true" disabled="disabled">Please search and select from foods</option>
                                <?php
                                foreach ($foods as $food) {
                                    ?>
                                    <option calories="<?php echo $food->food_total_calories; ?>"
                                            id="<?php echo $food->food_id; ?>"
                                            name="<?php echo $food->food_name; ?>"><?php echo $food->food_name; ?>
                                        - <?php echo $food->food_total_calories; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <?= $this->Html->link(__('View'), ['action' => 'view'], ['class' => 'btn btn-red btn-sm btn-view', 'style' => 'display:none']) ?>
                        </td>
                        <td>
                            <span class="calories">0</span>
                        </td>
                        <td>
                            <a class="btn btn-red btn-quantity" operation="minus">-</a>
                            <input type="text" value="1" class="quantity" readonly="readonly"/>
                            <a class="btn btn-red btn-quantity" operation="plus">+</a>
                        </td>
                        <td><span class="total">0</span></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"><a class="btn btn-red btn-add"><i class="fas fa-plus-circle fa-lg"></i> Add new
                                food</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cal-to-burger" colspan="3">
                        </td>
                        <td class="total-cal">0</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div id="tabs-5" class="row">
                <h5>Your total calories intake is: <span id="total-span"></span>.</h5>
                <h5>The average calories intake for a <span id="lifestyle"></span> person in your age is: <span
                            id="result-span"></span>.</h5>
                <div class="result above">
                    <h3>Your result is <b class="red">higher</b> than the average.</h3>
                    <ul>
                        <li>We suggest you change or reduce your food intake refer to <?php
                            echo $this->Html->link("this", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                            ?> article or <?php
                            echo $this->Html->link("this", ['controller' => 'foods', 'action' => 'index']);
                            ?> food list.
                        </li>
                        <li>Or you could perform suggested exercises using <a href="#">this</a> calculator here to burn
                            down the calories
                        </li>
                    </ul>
                </div>
                <div class="result perfect">
                    <h3>Your result is <b class="green">perfect</b> in comparison with the average.</h3>
                        <div>However, we still suggest you to know more about <?php
                            echo $this->Html->link("food", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                            ?>and <?php
                            echo $this->Html->link("exercise", ['controller' => 'pages', 'action' => 'exercise']);
                            ?> suggestion we provided to reduce the risk of CHD
                        </div>

                </div>
                <div class="result below">
                    <h3>Your result is <b class="orange">Lower</b> than the average.</h3>
                        <div>We suggest you change or increase your food intake refer to <?php
                            echo $this->Html->link("this", ['controller' => 'foods', 'action' => 'healthy_nutrition']);
                            ?> article or <?php
                            echo $this->Html->link("this", ['controller' => 'foods', 'action' => 'index']);
                            ?> food list.
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        cloneRow();
        $(".remove-row").on("click", function () {
            $(this).parent().parent().remove();
            updateTotal();
        });
    });
    var viewLink = $(".btn-view").attr('href');


    $(".btn-add").on("click", function () {
        cloneRow();
    });

    function cloneRow() {
        var tr = $('tbody tr:last');
        var clone = $("#default").clone();
        clone.find(".food-select").select2({width: '35vw'});
        clone.find(".btn-view").hide();
        tr.parent().append(clone);
        clone.addClass("food-row");
        clone.show();
        clone.find(".food-select").on("change", function (e) {
            var select = $(this);
            var calories = parseFloat(select.find(":selected").attr("calories")).toFixed(2);
            var caloriesField = select.parent().parent().find(".calories");
            var quantity = parseInt(select.parent().parent().find(".quantity").val());
            var total;
            var totalField = select.parent().parent().find(".total");
            var btnView = $(".btn-view");
            var id = select.find(":selected").attr("id");
            btnView.attr('href', viewLink + "/" + id);
            btnView.show();
            total = calories * quantity;
            caloriesField.html(calories);
            totalField.html(total.toFixed(2));
            updateTotal();
            select.parent().parent().find(".remove-row").after("<span class='food-name'>" + select.find(":selected").attr("name") + "</span>");
            select.parent().parent().find(".select2").remove();
            select.parent().parent().find("select").remove();
        });
        clone.find(".btn-quantity").on("click", function () {
            var clicked = $(this);
            var quantity = clicked.parent().find(".quantity");
            var caloriesField = clicked.parent().parent().find(".calories");
            var total;
            var totalField = clicked.parent().parent().find(".total");
            console.log(quantity.val());
            if (clicked.attr("operation") === "plus") {
                quantity.val(parseInt(quantity.val()) + 1);
            }
            else if (clicked.attr("operation") === "minus") {
                if (quantity.val() - 1 < 0) {
                    alert("Quantity cannot be less than 0!")
                }
                else {
                    quantity.val(parseInt(quantity.val()) - 1);
                }
            }
            total = parseFloat(caloriesField.html()) * quantity.val();
            totalField.html(total.toFixed(2));
            updateTotal();
        });
        clone.find(".remove-row").on("click", function () {
            $(this).parent().parent().remove();
            updateTotal();
        });
    }

    function updateTotal() {
        $(".cal-to-burger").empty();
        var total = 0;
        $(".total").each(function () {
            total += parseFloat($(this).html());
        });
        $(".total-cal").html(total.toFixed(2));
        var burgers = total / 258;
        $(".cal-to-burger").append('<span>Your calories intake equals to: </span>');

        for (var i = 1; i < burgers; i++) {
            $(".cal-to-burger").append('<i class="fas fa-hamburger fa-lg"></i>');
        }
    }

    var ageCalory = [
        {
            "Age": "21-25",
            "Sedentary": 2400,
            "Moderately active": 2800,
            "Active": 3000
        },
        {
            "Age": "26-30",
            "Sedentary": 2400,
            "Moderately active": 2600,
            "Active": 3000
        },
        {
            "Age": "31-35",
            "Sedentary": 2400,
            "Moderately active": 2600,
            "Active": 3000
        },
        {
            "Age": "36-40",
            "Sedentary": 2400,
            "Moderately active": 2600,
            "Active": 2800
        },
        {
            "Age": "41-45",
            "Sedentary": 2200,
            "Moderately active": 2600,
            "Active": 2800
        },
        {
            "Age": "46-50",
            "Sedentary": 2200,
            "Moderately active": 2400,
            "Active": 2800
        },
        {
            "Age": "51-55",
            "Sedentary": 2200,
            "Moderately active": 2400,
            "Active": 2800
        },
        {
            "Age": "56-60",
            "Sedentary": 2200,
            "Moderately active": 2400,
            "Active": 2600
        },
        {
            "Age": "61-65",
            "Sedentary": 2000,
            "Moderately active": 2400,
            "Active": 2600
        },
        {
            "Age": "66-70",
            "Sedentary": 2000,
            "Moderately active": 2200,
            "Active": 2600
        },
        {
            "Age": "71-75",
            "Sedentary": 2000,
            "Moderately active": 2200,
            "Active": 2600
        },
        {
            "Age": "76+",
            "Sedentary": 2000,
            "Moderately active": 2200,
            "Active": 2400
        }
    ];

    function findCalorie(age, active) {
        for (var i = 0; i < ageCalory.length; i++) {
            if (ageCalory[i].Age === age) {
                if (active === "Sedentary") {
                    return ageCalory[i].Sedentary;
                }
                else if (active === "Moderately active") {
                    return ageCalory[i]["Moderately active"];
                }
                else if (active === "Active") {
                    return ageCalory[i].Active;
                }
            }
        }
    }

</script>
