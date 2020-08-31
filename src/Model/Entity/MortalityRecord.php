<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MortalityRecord Entity
 *
 * @property int $mortality_record_id
 * @property string $cause
 * @property int $male_death
 * @property int $female_death
 * @property int $total
 */
class MortalityRecord extends Entity
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
        'cause' => true,
        'male_death' => true,
        'female_death' => true,
        'total' => true,
    ];
}
