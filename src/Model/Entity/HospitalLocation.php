<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HospitalLocation Entity
 *
 * @property int $FID
 * @property float|null $﻿X
 * @property float|null $Y
 * @property string|null $LabelName
 * @property string|null $OpsName
 * @property string|null $Type
 * @property string|null $StreetNum
 * @property string|null $RoadName
 * @property string|null $RoadType
 * @property string|null $RoadSuffix
 * @property int|null $CampusCode
 * @property string|null $LGAName
 * @property string|null $LocalityNa
 * @property int|null $Postcode
 * @property string|null $VicgovRegi
 * @property string|null $State
 * @property string|null $ServiceNam
 */
class HospitalLocation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '﻿X' => true,
        'Y' => true,
        'LabelName' => true,
        'OpsName' => true,
        'Type' => true,
        'StreetNum' => true,
        'RoadName' => true,
        'RoadType' => true,
        'RoadSuffix' => true,
        'CampusCode' => true,
        'LGAName' => true,
        'LocalityNa' => true,
        'Postcode' => true,
        'VicgovRegi' => true,
        'State' => true,
        'ServiceNam' => true,
    ];
}
