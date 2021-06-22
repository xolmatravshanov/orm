<?php

namespace Orm;

use Orm\Interfaces\ConnectionInterface;

class Connection implements ConnectionInterface
{

    private const drivers = [
        'mysql' => 'mysql',
        'postgres' => 'postgres'
    ];

    private $host = '127.0.0.1';

    private $driver = self::drivers['mysql'];

    private $dbname = 'orm';

    /* dns */
    private $dsn = 'mysql:dbname=testdb;host=127.0.0.1';


    private $user = 'dbuser';
    private $password = 'dbpass';

    public function __construct()
    {

    }

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function getConnection()
    {
        // TODO: Implement getConnection() method.
    }

    public function configure()
    {
        // TODO: Implement configure() method.
    }

    public function disconnect()
    {
        // TODO: Implement disconnect() method.
    }

    public function __destruct()
    {
        $this->disconnect();
    }
}