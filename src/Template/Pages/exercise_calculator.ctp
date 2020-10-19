<?= $this->Html->css('calculator.css'); ?>
<script type="text/javascript">
    $(function () {
        var $tabs = $('#tabs').tabs({
            disabled: [1]
        });

        $("#tabs .row").each(function (i) {

            var totalSize = $("#tabs .row").length - 1;

            if (i === 0) {
                next = i + 1;
                $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next &#187;</a>");
            }

            if (i !== 0) {
                prev = i - 1;
                $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Previous</a>");
            }

        });

        $(' .next-tab').click(function () {

            var inputname = $(this).parent().find("input").attr("name");

            $tabs.tabs("enable", parseInt($(this).attr("rel")));
            $tabs.tabs("option", "active", $(this).attr("rel"));


            return false;
        });

        $('.prev-tab').click(function () {
            $tabs.tabs("option", "active", $(this).attr("rel"));
            return false;
        });

    });
</script>

<div class="calculator-container">
    <div class="inner">
        <div class="title">
            <h1>Exercise Calories Calculator</h1>
            <h5>Assess your lifestyle to reduce your risk of Heart Disease</h5>
        </div>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Introduction</a></li>
                <li><a href="#tabs-2">Exercise Calculator</a></li>
            </ul>
            <div id="tabs-1" class="row">
                <div class="col-md-3 col-lg-3 left">
                    <?php
                    echo $this->Html->image("risk_check.jpg");
                    ?>
                </div>
                <div class="col-md-9 col-lg-9 right tabs-content">
                    <div>This simple exercise calories calculator will help you plan your daily exercises.</div>
                    <div>If you have completed your daily <?php
                        echo $this->Html->link("Food Calories Calculator", ['controller' => 'foods', 'action' => 'calculator']);
                        ?>, you can take over the difference of your result in comparison with your age's average to
                        this calculator.
                    </div>
                    <div><span class="strong blue">Hint</span>: You may want to click <?php
                        echo $this->Html->link("here", ['controller' => 'foods', 'action' => 'calculator']);
                        ?> to start your food calories calculation first.
                    </div>
                    <div><span class="strong orange">Warning</span>: This tool <span class="strong red">CANNOT</span>
                        ensure 100% accuracy.
                    </div>
                </div>
            </div>
            <div id="tabs-2" class="row">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width:45%">
                        <col style="width:10%">
                        <col style="width:35%">
                        <col style="width:10%">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>Exercise</th>
                        <th>Calories</th>
                        <th>Time (Hours)
                        </th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id="default" style="display: none">
                        <td>
                            <a class="remove-row"><i class="fas fa-times-circle red fa-lg"></i></a>
                            <select id="exercise-select" class="exercise-select">
                                <option selected="true" disabled="disabled">Please search and select from exercises
                                </option>
                                <option value="175">Walking (2.0/mph)</option>
                                <option value="245">Golf (without cart)</option>
                                <option value="310">Gardening</option>
                                <option value="280">Cycling (leisurely)</option>
                                <option value="315">Swimming (slowly)</option>
                                <option value="480">Climbing hills</option>
                                <option value="525">Tennis (singles)</option>
                                <option value="710">Running (10 min/mile)</option>
                            </select>
                        </td>
                        <td>
                            <span class="calories">0</span>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-quantity btn-sm" operation="minus" number="1">-1</a>
                            <a class="btn btn-primary btn-quantity btn-sm" operation="minus" number="0.5">-0.5</a>
                            <input type="text" value="1" class="quantity wide" readonly="readonly"/>
                            <a class="btn btn-primary btn-quantity btn-sm" operation="plus" number="0.5">+0.5</a>
                            <a class="btn btn-primary btn-quantity btn-sm" operation="plus" number="1">+1</a>

                        </td>
                        <td><span class="total">0</span></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"><a class="btn btn-primary btn-add"><i class="fas fa-plus-circle fa-lg"></i> Add
                                new
                                exercise</a>
                        </td>
                    </tr>
                    <tr>
                        <td id="previous" colspan="3">

                        </td>
                        <td class="total-cal">0</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            cloneRow();
            var foodCalorie = localStorage.getItem("calorie");
            if (foodCalorie === null) {
                $("#previous").html("No previous calculation, start one "+ '<?php
                    echo $this->Html->link("here", ['controller' => 'foods', 'action' => 'calculator']);
                    ?>' + ".");
            }
            else{
                $("#previous").html("Your previous "+ '<?php
                    echo $this->Html->link("Food Calories Calculation", ['controller' => 'foods', 'action' => 'calculator']);
                    ?>' + " result is: <b>" + foodCalorie + "</b>");
            }
            $(".remove-row").on("click", function () {
                $(this).parent().parent().remove();
                updateTotal();
            });
        });

        $(".btn-add").on("click", function () {
            cloneRow();
        });

        function cloneRow() {
            var tr = $('tbody tr:last');
            var clone = $("#default").clone();
            clone.find(".exercise-select").select2({width: '25vw'});
            tr.parent().append(clone);
            clone.addClass("exercise-row");
            clone.show();
            clone.find(".exercise-select").on("change", function (e) {
                var select = $(this);
                var calories = parseFloat(select.find(":selected").val());
                var caloriesField = select.parent().parent().find(".calories");
                var quantity = parseInt(select.parent().parent().find(".quantity").val());
                var total;
                var totalField = select.parent().parent().find(".total");
                total = calories * quantity;
                caloriesField.html(calories);
                totalField.html(total);
                updateTotal();
                select.parent().parent().find(".remove-row").after("<span class='exercise-name'>" + select.find(":selected").text() + "</span>");
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
                    quantity.val(parseFloat(quantity.val()) + parseFloat(clicked.attr("number")));
                }
                else if (clicked.attr("operation") === "minus") {
                    if (quantity.val() - parseFloat(clicked.attr("number")) < 0) {
                        alert("Quantity cannot be less than 0!")
                    }
                    else {
                        quantity.val(parseFloat(quantity.val()) - parseFloat(clicked.attr("number")));
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
            var total = 0;
            $(".total").each(function () {
                total += parseFloat($(this).html());
            });
            $(".total-cal").html(total.toFixed(2));
        }

    </script>
