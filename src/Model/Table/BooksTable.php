<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 */
class BooksTable extends Table
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

        $this->setTable('books');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('ContentsFile.ContentsFile');
        $this->addBehavior('Timestamp');

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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->allowEmpty('author');

        $validator
            ->allowEmpty('memo');

        $validator
            ->allowEmpty('point');

        // providerを読み込み
        $validator->setProvider('contents_file', 'ContentsFile\Validation\ContentsFileValidation');
        $validator
            ->notEmpty('img', 'ファイルを添付してください' , function ($context){
                // fileValidationWhenメソッドを追加しました。
                return $this->fileValidationWhen($context, 'img');
            })
            ->add('img', 'uploadMaxSizeCheck', [
                'rule' => 'uploadMaxSizeCheck',
                'provider' => 'contents_file',
                'message' => 'ファイルアップロード容量オーバーです',
                'last' => true,
            ])
            ->add('img', 'checkMaxSize', [
                'rule' => ['checkMaxSize' , '1M'],
                'provider' => 'contents_file',
                'message' => 'ファイルアップロード容量オーバーです',
                'last' => true,
            ])
            ->add('img', 'extension', [
                'rule' => ['extension', ['jpg', 'jpeg', 'gif', 'png',]],
                'message' => '画像のみを添付して下さい',
                'last' => true,
            ]);


        return $validator;
    }
}
