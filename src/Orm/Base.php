<?php

namespace Orm;

use PDO;

class Base
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



}