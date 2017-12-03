<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
// 追加項目
use ContentsFile\Model\Entity\ContentsFileTrait;

class Book extends Entity
{
    // 追加項目
    use ContentsFileTrait;

    // 追加項目
    public $contentsFileConfig = [
        'fields' => [
            'img' => [
                'resize' => [
                    // 画像のリサイズが必要な場合
                    ['width' => 300],
                    ['width' => 300, 'height' => 400],
                    // typeには
                    // normal(default) 長い方を基準に画像をリサイズする
                    // normal_s 短い方を基準に画像をリサイズする
                    // scoop 短い方を基準に画像をリサイズし、中央でくりぬきする
                    ['width' => 300, 'height' => 400, 'type' => 'scoop'],
                ],
            ]
        ],
    ];

    //&getメソッドをoverride
    public function &get($property)
    {
        $value = parent::get($property);
        $value = $this->getContentsFile($property, $value);
        return $value;
    }

    //setメソッドをoverride
    public function set($property, $value = null, array $options = [])
    {
        parent::set($property, $value, $options);
        $this->setContentsFile();
        return $this;
    }
}
