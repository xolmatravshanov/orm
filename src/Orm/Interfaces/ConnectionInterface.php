<?php

namespace Orm\Interfaces;

interface ConnectionInterface
{

    public function connect();

    public function getConnection();

    public function configure();

    public function disconnect();


}