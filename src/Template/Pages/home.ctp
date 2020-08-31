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
                    <option>Concern about having CHD</option>
                    <option>Currently having CHD</option>
                    <option>Concern for someone else</option>
                </select>
                <a type="submit" class="btn btn-red">Submit</a>

            </div>

        </form>

    </div>
    <h1>Chronic Heart Disease Kills</h1>

    <div class="row content">

        <div class="col-md-6 col-lg-6">
            Chronic Heart Disease Ranked No 1 in leading single cause of death in Australia.

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac iaculis diam, a commodo eros. Curabitur non volutpat justo, sed lobortis dui. Maecenas ex turpis, volutpat ac mollis id, porta consectetur tortor. Duis iaculis, purus at aliquam laoreet, massa tellus maximus enim, ac rhoncus dui eros non felis. Donec rhoncus eros quam, sit amet maximus lectus rutrum in. Maecenas finibus dui a tincidunt posuere. Sed faucibus dignissim erat quis volutpat. In venenatis odio quis bibendum ullamcorper. Sed id nisl porttitor, porta dui vitae, semper nibh. Duis ut diam porta, eleifend mi sit amet, auctor neque. Fusce et ultrices mauris, eu hendrerit risus. Ut odio nibh, aliquet vel faucibus vel, imperdiet sit amet dolor. Curabitur congue ex neque, in euismod justo interdum sit amet. Vestibulum condimentum ullamcorper nisi at interdum.

            Phasellus rhoncus, nunc sed viverra congue, arcu nisi ultrices sem, a porta arcu orci sit amet dui. Sed ut augue sit amet massa cursus cursus eget nec lectus. Proin bibendum sem vitae orci feugiat egestas. Donec sem urna, feugiat ac maximus nec, fringilla quis nisi. Sed elementum quam sed lectus egestas vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam tristique facilisis nunc, a vulputate est semper nec. Nulla pellentesque orci et gravida tincidunt. Donec nec sagittis justo, congue gravida sapien. Donec purus purus, porta luctus maximus vitae, interdum lobortis purus. Mauris orci ipsum, auctor eget sodales eget, placerat quis ipsum. Duis vitae ex nunc. Donec eleifend, elit ac facilisis laoreet, tortor erat semper nunc, in molestie ex erat semper urna. In dictum congue urna, et pulvinar elit porta quis. Aenean vel felis tristique, faucibus est vel, tincidunt nisi.
        </div>
        <div class="col-md-6 col-lg-6">
            <canvas id="myChart" width="400" height="400"></canvas>

        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">Heart KSDS Tech provides information and suggestions on Chronic Heart Disease
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac iaculis diam, a commodo eros. Curabitur non volutpat justo, sed lobortis dui. Maecenas ex turpis, volutpat ac mollis id, porta consectetur tortor. Duis iaculis, purus at aliquam laoreet, massa tellus maximus enim, ac rhoncus dui eros non felis. Donec rhoncus eros quam, sit amet maximus lectus rutrum in. Maecenas finibus dui a tincidunt posuere. Sed faucibus dignissim erat quis volutpat. In venenatis odio quis bibendum ullamcorper. Sed id nisl porttitor, porta dui vitae, semper nibh. Duis ut diam porta, eleifend mi sit amet, auctor neque. Fusce et ultrices mauris, eu hendrerit risus. Ut odio nibh, aliquet vel faucibus vel, imperdiet sit amet dolor. Curabitur congue ex neque, in euismod justo interdum sit amet. Vestibulum condimentum ullamcorper nisi at interdum.
                </p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a href="#">Exercises</a></li>
                    <li><a href="#">Nutrition</a></li>
                    <li><a href="#">Meals</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Feature</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                    <a href="#">Heart KSDS Tech</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


</body>


<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</html>
