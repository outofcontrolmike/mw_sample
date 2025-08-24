<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Listings Model
 *
 * @method \App\Model\Entity\Listing newEmptyEntity()
 * @method \App\Model\Entity\Listing newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Listing> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Listing get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Listing findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Listing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Listing> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Listing|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Listing saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Listing>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Listing>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Listing>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Listing> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Listing>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Listing>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Listing>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Listing> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListingsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('listings');
        $this->setDisplayField('slug');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('slug')
            ->maxLength('slug', 191)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug')
            ->add('slug', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('mls_number')
            ->requirePresence('mls_number', 'create')
            ->notEmptyString('mls_number');

        $validator
            ->integer('beds')
            ->requirePresence('beds', 'create')
            ->notEmptyString('beds');

        $validator
            ->decimal('baths')
            ->requirePresence('baths', 'create')
            ->notEmptyString('baths');

        $validator
            ->integer('living_sqft')
            ->requirePresence('living_sqft', 'create')
            ->notEmptyString('living_sqft');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 50)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 20)
            ->requirePresence('zip_code', 'create')
            ->notEmptyString('zip_code');

        $validator
            ->scalar('regards')
            ->allowEmptyString('regards');

        $validator
            ->boolean('listed')
            ->allowEmptyString('listed');

        $validator
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['slug']), ['errorField' => 'slug']);

        return $rules;
    }
}
