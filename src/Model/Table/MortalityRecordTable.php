<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MortalityRecord Model
 *
 * @method \App\Model\Entity\MortalityRecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\MortalityRecord newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MortalityRecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MortalityRecord|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MortalityRecord saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MortalityRecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MortalityRecord[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MortalityRecord findOrCreate($search, callable $callback = null, $options = [])
 */
class MortalityRecordTable extends Table
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

        $this->setTable('mortality_record');
        $this->setDisplayField('mortality_record_id');
        $this->setPrimaryKey('mortality_record_id');
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
            ->integer('mortality_record_id')
            ->allowEmptyString('mortality_record_id', null, 'create')
            ->add('mortality_record_id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('cause')
            ->maxLength('cause', 100)
            ->requirePresence('cause', 'create')
            ->notEmptyString('cause');

        $validator
            ->integer('male_death')
            ->requirePresence('male_death', 'create')
            ->notEmptyString('male_death');

        $validator
            ->integer('female_death')
            ->requirePresence('female_death', 'create')
            ->notEmptyString('female_death');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

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
        $rules->add($rules->isUnique(['mortality_record_id']));

        return $rules;
    }
}
