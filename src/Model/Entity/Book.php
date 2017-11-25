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
            'file' => [
                'resize' => false,
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
    public function set($property, $value = null, array $options = []){
        parent::set($property, $value , $options);
        $this->setContentsFile();
        return $this;
    }
}