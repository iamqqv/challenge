<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chapter Entity
 *
 * @property int $id
 * @property string $article_id
 * @property string $chapter_id
 * @property string $order
 * @property string $headline
 * @property string $text
 * @property string $image_id
 * @property string $image_text
 * @property string $image_url
 * @property string $image_source
 *
 * @property \App\Model\Entity\Article $article
 * @property \App\Model\Entity\Chapter[] $chapters
 * @property \App\Model\Entity\Image $image
 */
class Chapter extends Entity
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
        'article_id' => true,
        'chapter_id' => true,
        'order' => true,
        'headline' => true,
        'text' => true,
        'image_id' => true,
        'image_text' => true,
        'image_url' => true,
        'image_source' => true,
        'article' => true,
        'chapters' => true,
        'image' => true
    ];
}
