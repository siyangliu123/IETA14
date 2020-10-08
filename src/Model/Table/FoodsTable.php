<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Foods Model
 *
 * @method \App\Model\Entity\Food get($primaryKey, $options = [])
 * @method \App\Model\Entity\Food newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Food[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Food|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Food saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Food patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Food[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Food findOrCreate($search, callable $callback = null, $options = [])
 */
class FoodsTable extends Table
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

        $this->setTable('foods');
        $this->setDisplayField('food_id');
        $this->setPrimaryKey('food_id');
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
            ->integer('food_id')
            ->allowEmptyString('food_id', null, 'create')
            ->add('food_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('food_name')
            ->allowEmptyString('food_name');

        $validator
            ->numeric('food_total_calories')
            ->allowEmptyString('food_total_calories');

        $validator
            ->numeric('food_protein')
            ->allowEmptyString('food_protein');

        $validator
            ->numeric('food_total_fat')
            ->allowEmptyString('food_total_fat');

        $validator
            ->numeric('food_total_dietary_fibre')
            ->allowEmptyString('food_total_dietary_fibre');

        $validator
            ->numeric('food_alcohol')
            ->allowEmptyString('food_alcohol');

        $validator
            ->numeric('food_sugars')
            ->allowEmptyString('food_sugars');

        $validator
            ->numeric('food_carbohydrates')
            ->allowEmptyString('food_carbohydrates');

        $validator
            ->numeric('food_sodium')
            ->allowEmptyString('food_sodium');

        $validator
            ->numeric('food_saturated_fatty_acids')
            ->allowEmptyString('food_saturated_fatty_acids');

        $validator
            ->numeric('food_monounsaturated_fatty_acids')
            ->allowEmptyString('food_monounsaturated_fatty_acids');

        $validator
            ->numeric('food_polyunsaturated_fatty_acids')
            ->allowEmptyString('food_polyunsaturated_fatty_acids');

        $validator
            ->numeric('food_trans_fatty_acids')
            ->allowEmptyString('food_trans_fatty_acids');

        $validator
            ->numeric('food_cholesterol')
            ->allowEmptyString('food_cholesterol');

        $validator
            ->scalar('food_categories')
            ->allowEmptyString('food_categories');

        $validator
            ->scalar('food_description')
            ->allowEmptyString('food_description');

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
        $rules->add($rules->isUnique(['food_id']));

        return $rules;
    }
}
