<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;


/**
 * undocumented class
 */
class User extends Entity
{   

    public $_accessible = [
        'id' => true,
        'nome' => true
        /*'email' => true,
        'created' => true,
        'modified' => true*/
    ];
}
