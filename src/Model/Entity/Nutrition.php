<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nutrition Entity
 *
 * @property int $nutrition_id
 * @property string $nutrition_name
 * @property string $nutrition_grams
 * @property int $nutrition_calories
 * @property int|null $nutrition_protein
 * @property int $nutrition_fat
 * @property int $nutrition_sat_fat
 * @property int $nutrition_fiber
 * @property int $nutrition_carbs
 * @property int $nutrition_is_veg
 * @property string $nutrition_categories
 */
class Nutrition extends Entity
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
        'nutrition_name' => true,
        'nutrition_grams' => true,
        'nutrition_calories' => true,
        'nutrition_protein' => true,
        'nutrition_fat' => true,
        'nutrition_sat_fat' => true,
        'nutrition_fiber' => true,
        'nutrition_carbs' => true,
        'nutrition_is_veg' => true,
        'nutrition_categories' => true,
    ];
}
