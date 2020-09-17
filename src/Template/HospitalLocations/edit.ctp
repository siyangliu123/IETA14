<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HospitalLocation $hospitalLocation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hospitalLocation->FID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hospitalLocation->FID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hospital Locations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hospitalLocations form large-9 medium-8 columns content">
    <?= $this->Form->create($hospitalLocation) ?>
    <fieldset>
        <legend><?= __('Edit Hospital Location') ?></legend>
        <?php
            echo $this->Form->control('﻿X');
            echo $this->Form->control('Y');
            echo $this->Form->control('LabelName');
            echo $this->Form->control('OpsName');
            echo $this->Form->control('Type');
            echo $this->Form->control('StreetNum');
            echo $this->Form->control('RoadName');
            echo $this->Form->control('RoadType');
            echo $this->Form->control('RoadSuffix');
            echo $this->Form->control('CampusCode');
            echo $this->Form->control('LGAName');
            echo $this->Form->control('LocalityNa');
            echo $this->Form->control('Postcode');
            echo $this->Form->control('VicgovRegi');
            echo $this->Form->control('State');
            echo $this->Form->control('ServiceNam');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
