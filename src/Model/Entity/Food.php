<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Food Entity
 *
 * @property int $food_id
 * @property string|null $food_name
 * @property float|null $food_total_calories
 * @property float|null $food_protein
 * @property float|null $food_total_fat
 * @property float|null $food_total_dietary_fibre
 * @property float|null $food_alcohol
 * @property float|null $food_sugars
 * @property float|null $food_carbohydrates
 * @property float|null $food_sodium
 * @property float|null $food_saturated_fatty_acids
 * @property float|null $food_monounsaturated_fatty_acids
 * @property float|null $food_polyunsaturated_fatty_acids
 * @property float|null $food_trans_fatty_acids
 * @property float|null $food_cholesterol
 * @property string|null $food_categories
 * @property string|null $food_description
 */
class Food extends Entity
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
        'food_name' => true,
        'food_total_calories' => true,
        'food_protein' => true,
        'food_total_fat' => true,
        'food_total_dietary_fibre' => true,
        'food_alcohol' => true,
        'food_sugars' => true,
        'food_carbohydrates' => true,
        'food_sodium' => true,
        'food_saturated_fatty_acids' => true,
        'food_monounsaturated_fatty_acids' => true,
        'food_polyunsaturated_fatty_acids' => true,
        'food_trans_fatty_acids' => true,
        'food_cholesterol' => true,
        'food_categories' => true,
        'food_description' => true,
    ];
}
