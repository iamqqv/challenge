<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chapters Model
 *
 * @property \App\Model\Table\ArticlesTable|\Cake\ORM\Association\BelongsTo $Articles
 * @property \App\Model\Table\ChaptersTable|\Cake\ORM\Association\BelongsTo $Chapters
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\BelongsTo $Images
 * @property \App\Model\Table\ChaptersTable|\Cake\ORM\Association\HasMany $Chapters
 *
 * @method \App\Model\Entity\Chapter get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chapter newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Chapter[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chapter|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chapter saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chapter patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chapter[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chapter findOrCreate($search, callable $callback = null, $options = [])
 */
class ChaptersTable extends Table
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

        $this->setTable('chapters');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Articles', [
            'foreignKey' => 'id',
            'joinType' => 'INNER'
        ]);
//        $this->belongsTo('Chapters', [
//            'foreignKey' => 'chapter_id',
//            'joinType' => 'INNER'
//        ]);
//        $this->belongsTo('Images', [
//            'foreignKey' => 'image_id',
//            'joinType' => 'INNER'
//        ]);
//        $this->hasMany('Chapters', [
//            'foreignKey' => 'chapter_id'
//        ]);
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('order')
            ->maxLength('order', 255)
            ->requirePresence('order', 'create')
            ->allowEmptyString('order', false);

        $validator
            ->scalar('headline')
            ->maxLength('headline', 255)
            ->requirePresence('headline', 'create')
            ->allowEmptyString('headline', false);

        $validator
            ->scalar('text')
            ->requirePresence('text', 'create')
            ->allowEmptyString('text', false);

        $validator
            ->scalar('image_text')
            ->maxLength('image_text', 255)
            ->requirePresence('image_text', 'create')
            ->allowEmptyFile('image_text', false);

        $validator
            ->scalar('image_url')
            ->maxLength('image_url', 255)
            ->requirePresence('image_url', 'create')
            ->allowEmptyFile('image_url', false);

        $validator
            ->scalar('image_source')
            ->maxLength('image_source', 255)
            ->requirePresence('image_source', 'create')
            ->allowEmptyFile('image_source', false);

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
        $rules->add($rules->existsIn(['article_id'], 'Articles'));
        $rules->add($rules->existsIn(['chapter_id'], 'Chapters'));
        $rules->add($rules->existsIn(['image_id'], 'Images'));

        return $rules;
    }
}
