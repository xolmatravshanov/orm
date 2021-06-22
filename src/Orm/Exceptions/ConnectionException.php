<?php

namespace Orm\Exceptions;

use Throwable;

class ConnectionException extends \Exception
{

    private static $ErrorCodes = [

    ];


    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}