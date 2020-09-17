<?= $this->Html->css('cardio.css'); ?>
<div class="slider">
    <div class="slider-wrapper flex">
        <div class="slide flex">
            <div class="slide-image slider-link prev">
                <?php echo $this->Html->image('Strenghth training dumbbell.png'); ?>
                <div class="overlay"></div></div>
            <div class="slide-content">
                <div class="slide-date">Dumbbell workouts (free weights)</div>
                <div class="slide-title">Using dumbbells as a form of resistance can help us reduce body fat more than cardiovascular exercises which will eventually decrease the risk of heart diseases.
                </div>
                <div class="slide-text"><span style="color: orange">Warning: </span>
                    Do not lift weights if you have angina or have just suffered from heart failure. Always consult the doctor and a professional trainer before carrying out any strength workouts.
                </div>
                <div class="slide-more"><a class="btn btn-info">Read More</a></div>
            </div>
        </div>
        <div class="slide flex">
            <div class="slide-image slider-link next">
                <?php echo $this->Html->image('Strenghth training resistance band.png'); ?>
                <div class="overlay"></div></div>
            <div class="slide-content">
                <div class="slide-date">Resistance band workout</div>
                <div class="slide-title">One of the benefits of resistance band over free weights is mobility and variety of exercises that can be performed. </div>
                <div class="slide-text"><span style="color: orange">Warning: </span>If you have a heart condition or high blood pressure it’s important to check with your doctor or cardiac rehabilitation team what sort of activities you can safely do and how much you should do. </div>
                <div class="slide-more"><a class="btn btn-info">Read More</a></div>
            </div>
        </div>
    </div>
    <div class="arrows">
        <a href="#" title="Previous" class="arrow slider-link prev"></a>
        <a href="#" title="Next" class="arrow slider-link next"></a>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
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
                TweenMax.to(sWrapper, 0.4, { x: "-" + sWidth * clickCount });

                //CONTENT ANIMATIONS

                var fromProperties = { autoAlpha: 0, x: "-50", y: "-10" };
                var toProperties = { autoAlpha: 0.8, x: "0", y: "0" };

                TweenLite.fromTo(
                    slide_image,
                    1,
                    { autoAlpha: 0, y: "40" },
                    { autoAlpha: 1, y: "0" }
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