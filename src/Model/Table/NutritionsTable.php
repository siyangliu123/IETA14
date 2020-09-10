<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nutritions Model
 *
 * @method \App\Model\Entity\Nutrition get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nutrition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nutrition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nutrition|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nutrition saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nutrition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nutrition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nutrition findOrCreate($search, callable $callback = null, $options = [])
 */
class NutritionsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('nutritions');
        $this->setDisplayField('nutrition_id');
        $this->setPrimaryKey('nutrition_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('nutrition_id')
            ->allowEmptyString('nutrition_id', null, 'create')
            ->add('nutrition_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nutrition_name')
            ->maxLength('nutrition_name', 100)
            ->requirePresence('nutrition_name', 'create')
            ->notEmptyString('nutrition_name');

        $validator
            ->scalar('nutrition_grams')
            ->maxLength('nutrition_grams', 100)
            ->requirePresence('nutrition_grams', 'create')
            ->notEmptyString('nutrition_grams');

        $validator
            ->integer('nutrition_calories')
            ->requirePresence('nutrition_calories', 'create')
            ->notEmptyString('nutrition_calories');

        $validator
            ->integer('nutrition_protein')
            ->allowEmptyString('nutrition_protein');

        $validator
            ->integer('nutrition_fat')
            ->requirePresence('nutrition_fat', 'create')
            ->notEmptyString('nutrition_fat');

        $validator
            ->integer('nutrition_sat_fat')
            ->requirePresence('nutrition_sat_fat', 'create')
            ->notEmptyString('nutrition_sat_fat');

        $validator
            ->integer('nutrition_fiber')
            ->requirePresence('nutrition_fiber', 'create')
            ->notEmptyString('nutrition_fiber');

        $validator
            ->integer('nutrition_carbs')
            ->requirePresence('nutrition_carbs', 'create')
            ->notEmptyString('nutrition_carbs');

        $validator
            ->integer('nutrition_is_veg')
            ->requirePresence('nutrition_is_veg', 'create')
            ->notEmptyString('nutrition_is_veg');

        $validator
            ->scalar('nutrition_categories')
            ->maxLength('nutrition_categories', 100)
            ->requirePresence('nutrition_categories', 'create')
            ->notEmptyString('nutrition_categories');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['nutrition_id']));

        return $rules;
    }
}
