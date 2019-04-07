<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property string $id
 * @property string headline
 * @property string subtitle
 * @property string introduction
 * @property string url_id
 * @property string author_id
 * @property string author_firstname
 * @property string author_lastname
 * @property string image_id
 * @property string image_text
 * @property string image_url
 * @property string image_source
 * @property \Cake\I18n\Time displaydate
 */
class Article extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
