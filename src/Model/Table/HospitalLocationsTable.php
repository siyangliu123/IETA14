<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HospitalLocations Model
 *
 * @method \App\Model\Entity\HospitalLocation get($primaryKey, $options = [])
 * @method \App\Model\Entity\HospitalLocation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HospitalLocation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HospitalLocation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HospitalLocation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HospitalLocation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HospitalLocation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HospitalLocation findOrCreate($search, callable $callback = null, $options = [])
 */
class HospitalLocationsTable extends Table
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

        $this->setTable('hospital_locations');
        $this->setDisplayField('FID');
        $this->setPrimaryKey('FID');
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
            ->integer('FID')
            ->allowEmptyString('FID', null, 'create')
            ->add('FID', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->numeric('﻿X')
            ->allowEmptyString('﻿X');

        $validator
            ->numeric('Y')
            ->allowEmptyString('Y');

        $validator
            ->scalar('LabelName')
            ->allowEmptyString('LabelName');

        $validator
            ->scalar('OpsName')
            ->allowEmptyString('OpsName');

        $validator
            ->scalar('Type')
            ->allowEmptyString('Type');

        $validator
            ->scalar('StreetNum')
            ->allowEmptyString('StreetNum');

        $validator
            ->scalar('RoadName')
            ->allowEmptyString('RoadName');

        $validator
            ->scalar('RoadType')
            ->allowEmptyString('RoadType');

        $validator
            ->scalar('RoadSuffix')
            ->allowEmptyString('RoadSuffix');

        $validator
            ->integer('CampusCode')
            ->allowEmptyString('CampusCode');

        $validator
            ->scalar('LGAName')
            ->allowEmptyString('LGAName');

        $validator
            ->scalar('LocalityNa')
            ->allowEmptyString('LocalityNa');

        $validator
            ->integer('Postcode')
            ->allowEmptyString('Postcode');

        $validator
            ->scalar('VicgovRegi')
            ->allowEmptyString('VicgovRegi');

        $validator
            ->scalar('State')
            ->allowEmptyString('State');

        $validator
            ->scalar('ServiceNam')
            ->allowEmptyString('ServiceNam');

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
        $rules->add($rules->isUnique(['FID']));

        return $rules;
    }
}
