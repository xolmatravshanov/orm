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

    /* dsn */
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
        foreach ($config as $key => $item) {
            $this->$key = $config[$key];
        }
    }


    public function configure()
    {
        $this->dsn = $this->driver . ':' . 'dbname=' . $this->dbname . ';' . 'host=' . $this->host;
    }


    public function connect()
    {
        $this->connection = new PDO($this->dsn, $this->user, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection()
    {
        // TODO: Implement getConnection() method.
    }

    public function disconnect()
    {
        $this->connection = null;
    }

    public function __destruct()
    {
        $this->disconnect();
    }
}