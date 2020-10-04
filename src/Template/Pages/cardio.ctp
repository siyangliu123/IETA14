<?= $this->Html->css('cardio.css'); ?>
<div class="inner">
    <div class="slider">
        <div class="slider-wrapper flex">
            <div class="slide flex">
                <div class="slide-image slider-link prev">
                    <?php echo $this->Html->image('swimming.png'); ?>
                    <div class="overlay"></div>
                </div>
                <div class="slide-content">
                    <div class="slide-date">Swimming</div>
                    <div class="slide-title">Water supports and cushions the body, removing all the possible injuries
                        land-based exercises can cause like joint pains.
                    </div>
                    <div class="slide-text">Because it is easy on muscles and joints, swimming is often recommended for
                        people with chronic heart conditions.
                    </div>
                    <div class="slide-more"><a class="btn btn-primary">Read More</a></div>
                </div>
            </div>
            <div class="slide flex">
                <div class="slide-image slider-link next">
                    <?php echo $this->Html->image('Jogging.png'); ?>
                    <div class="overlay"></div>
                </div>
                <div class="slide-content">
                    <div class="slide-date">Jogging</div>
                    <div class="slide-title">Jogging is a form of cardiovascular exercise that affects heart and lungs
                        directly. Jogging can improve the flow of blood in our body by increasing our heart rate, thus
                        strengthening our heart muscles.
                    </div>
                    <div class="slide-text"> A 2014 study from the Journal of American College of Cardiology found that
                        people who ran just 30 to 59 minutes a week—just a few minutes each day—decreased their risk of
                        cardiovascular death by 58 percent
                    </div>
                    <div class="slide-more"><a class="btn btn-primary">Read More</a></div>
                </div>
            </div>
            <div class="slide flex">
                <div class="slide-image slider-link next">
                    <?php echo $this->Html->image('Cycling.png'); ?>
                    <div class="overlay"></div>
                </div>
                <div class="slide-content">
                    <div class="slide-date">Cycling</div>
                    <div class="slide-title">It is already proven that cyclists experience 15% lower heart attacks than
                        non-cyclist.
                    </div>
                    <div class="slide-text">According to a study by the British Medical Association, cycling just 32km
                        (20 miles) a week reduces the potential to develop heart disease by a whopping 50%.
                    </div>
                    <div class="slide-more"><a class="btn btn-primary">Read More</a></div>
                </div>
            </div>
            <div class="slide flex">
                <div class="slide-image slider-link next">
                    <?php echo $this->Html->image('jumping rope.png'); ?>
                    <div class="overlay"></div>
                </div>
                <div class="slide-content">
                    <div class="slide-date">Jumping rope</div>
                    <div class="slide-title">Jumping rope is excellent cardiovascular training, because it involves
                        whole-body movement. This is the kind of exercise that does not require much space to perform
                        and yet can burn lot of calories.
                    </div>
                    <div class="slide-text">Jumping rope is such a simple exercise that has no age limit. Athletes tend
                        to use jump rope as a method to improve their endurance and cardiovascular fitness
                    </div>
                    <div class="slide-more"><a class="btn btn-primary">Read More</a></div>
                </div>
            </div>
        </div>
        <div class="arrows">
            <a href="#" title="Previous" class="arrow slider-link prev"></a>
            <a href="#" title="Next" class="arrow slider-link next"></a>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
        integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
        crossorigin="anonymous"></script>
<script>
    (function ($) {
        $(document).ready(function () {
            var s = $(".slider"),
                sWrapper = s.find(".slider-wrapper"),
                sItem = s.find(".slide"),
                btn = s.find(".slider-link"),
                sWidth = sItem.width(),
                sCount = sItem.length,
                slide_date = s.find(".slide-date"),
                slide_title = s.find(".slide-title"),
                slide_text = s.find(".slide-text"),
                slide_more = s.find(".slide-more"),
                slide_image = s.find(".slide-image img"),
                sTotalWidth = sCount * sWidth;

            sWrapper.css("width", sTotalWidth);
            sWrapper.css("width", sTotalWidth);

            var clickCount = 0;

            btn.on("click", function (e) {
                e.preventDefault();

                if ($(this).hasClass("next")) {
                    clickCount < sCount - 1 ? clickCount++ : (clickCount = 0);
                } else if ($(this).hasClass("prev")) {
                    clickCount > 0 ? clickCount-- : (clickCount = sCount - 1);
                }
                TweenMax.to(sWrapper, 0.4, {x: "-" + sWidth * clickCount});

                //CONTENT ANIMATIONS

                var fromProperties = {autoAlpha: 0, x: "-50", y: "-10"};
                var toProperties = {autoAlpha: 0.8, x: "0", y: "0"};

                TweenLite.fromTo(
                    slide_image,
                    1,
                    {autoAlpha: 0, y: "40"},
                    {autoAlpha: 1, y: "0"}
                );
                TweenLite.fromTo(slide_date, 0.4, fromProperties, toProperties);
                TweenLite.fromTo(slide_title, 0.6, fromProperties, toProperties);
                TweenLite.fromTo(slide_text, 0.8, fromProperties, toProperties);
                TweenLite.fromTo(slide_more, 1, fromProperties, toProperties);
            });
        });
    })(jQuery);

    $(".overlay").addClass("overlay-blue");

</script>