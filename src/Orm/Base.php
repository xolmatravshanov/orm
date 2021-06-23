<?php

namespace Orm;

use Orm\Interfaces\BaseInterface;
use PDO;

class Base implements BaseInterface
{
    protected const FETCH_MODE = [
        'ASSOC' => PDO::FETCH_ASSOC,
        'BOTH' => PDO::FETCH_BOTH,
        'BOUND' => PDO::FETCH_BOUND,
        'CLASS' => PDO::FETCH_CLASS,
        'INTO' => PDO::FETCH_INTO,
        'LAZY' => PDO::FETCH_LAZY,
        'NAMED' => PDO::FETCH_NAMED,
        'NUM' => PDO::FETCH_NUM,
        'OBJ' => PDO::FETCH_OBJ,
        'PROPS_LATE' => PDO::FETCH_PROPS_LATE,

    ];

    public function findOne()
    {
        // TODO: Implement findOne() method.
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function setFetchMode()
    {
        // TODO: Implement setFetchMode() method.
    }

    public function setResultType()
    {
        // TODO: Implement setResultType() method.
    }


// format lash
//

// data olib kelish
// saqlash
// o'chirish
// edit qilish

}