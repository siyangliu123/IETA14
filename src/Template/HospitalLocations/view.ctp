<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HospitalLocation $hospitalLocation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hospital Location'), ['action' => 'edit', $hospitalLocation->FID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hospital Location'), ['action' => 'delete', $hospitalLocation->FID], ['confirm' => __('Are you sure you want to delete # {0}?', $hospitalLocation->FID)]) ?> </li>
        <li><?= $this->Html->link(__('List Hospital Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hospital Location'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hospitalLocations view large-9 medium-8 columns content">
    <h3><?= h($hospitalLocation->FID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('FID') ?></th>
            <td><?= $this->Number->format($hospitalLocation->FID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('﻿X') ?></th>
            <td><?= $this->Number->format($hospitalLocation->﻿X) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Y') ?></th>
            <td><?= $this->Number->format($hospitalLocation->Y) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CampusCode') ?></th>
            <td><?= $this->Number->format($hospitalLocation->CampusCode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postcode') ?></th>
            <td><?= $this->Number->format($hospitalLocation->Postcode) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('LabelName') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->LabelName)); ?>
    </div>
    <div class="row">
        <h4><?= __('OpsName') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->OpsName)); ?>
    </div>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->Type)); ?>
    </div>
    <div class="row">
        <h4><?= __('StreetNum') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->StreetNum)); ?>
    </div>
    <div class="row">
        <h4><?= __('RoadName') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->RoadName)); ?>
    </div>
    <div class="row">
        <h4><?= __('RoadType') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->RoadType)); ?>
    </div>
    <div class="row">
        <h4><?= __('RoadSuffix') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->RoadSuffix)); ?>
    </div>
    <div class="row">
        <h4><?= __('LGAName') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->LGAName)); ?>
    </div>
    <div class="row">
        <h4><?= __('LocalityNa') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->LocalityNa)); ?>
    </div>
    <div class="row">
        <h4><?= __('VicgovRegi') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->VicgovRegi)); ?>
    </div>
    <div class="row">
        <h4><?= __('State') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->State)); ?>
    </div>
    <div class="row">
        <h4><?= __('ServiceNam') ?></h4>
        <?= $this->Text->autoParagraph(h($hospitalLocation->ServiceNam)); ?>
    </div>
</div>
