<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Money extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
