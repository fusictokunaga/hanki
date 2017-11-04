<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MoniesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('monies');
        $this->setDisplayField('memo');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->notEmpty('id', 'create');

        $validator
            ->integer('date')
            ->allowEmpty('date', 'create');

        $validator
            ->integer('memo')
            ->allowEmpty('memo', 'create');

        $validator
            ->integer('money')
            ->allowEmpty('money', 'create');

        $validator
            ->integer('category_id')
            ->allowEmpty('category_id', 'create');
    }
}
