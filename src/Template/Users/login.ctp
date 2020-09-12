<?php

$this->layout = false;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<?= $this->Html->css('home.css') ?>


<div id="login">
    <?= $this->Form->create() ?>
    <div class="login-section">
        <h3>Please enter password to view the content:</h3>
            <input class="form-control"  name="username" type="hidden" placeholder="Username" value="BestTeamIE2020" style="display: none"/>
            <input class="form-control"  name="password" type="password" placeholder="Password"/>
        <button class="btn btn-success btn-lg" type="submit">Login</button>
        <?php echo $this->Flash->render(); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>