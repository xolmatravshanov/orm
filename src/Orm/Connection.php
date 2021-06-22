<?php

namespace Orm;

use Orm\Interfaces\ConnectionInterface;
use PDO;

class Connection implements ConnectionInterface
{

    private const drivers = [
        'mysql' => 'mysql',
        'postgre' => 'postgre'
    ];

    private const ports = [
        'mysql' => 3306,
        'postgre' => 5432,
    ];
    /*
     * Connection TimeOut
     * */
    private $timeout = 60;

    private $host = '127.0.0.1';


    private $port = self::ports['mysql'];

    private $driver = self::drivers['mysql'];

    private $dbname = 'orm';

    /* dns */
    private $dsn = '';

    private $user = 'dbuser';
    private $password = 'dbpass';

    /*
     * var \PDO
     * */
    private $connection = null;


    public function __construct(array $config)
    {
        /*
         *
         * */
        $this->addConnection($config);

        /*
         *  connection
         * */
        $this->configure();
    }


    public function addConnection(array $config)
    {
        $this->password = $config['password'];
        $this->user = $config['user'];
        $this->dbname = $config['dbname'];
        $this->host = $config['host'];
        $this->driver = $config['driver'];

        $this->port = $config['port'] ?? $config['port'];
    }


    public function configure()
    {
        $this->dsn = $this->driver . ':' . 'dbname=' . $this->dbname . ';' . 'host=' . $this->host;
        $this->connection = new PDO($this->dns, $this->user, $this->password);

    }


    public function connect()
    {
        $this->connection->connect();
    }

    public function getConnection()
    {
        // TODO: Implement getConnection() method.
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