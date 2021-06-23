<?php

namespace Orm;

use Orm\Interfaces\ConnectionInterface;
use PDO;

class Connection implements ConnectionInterface
{
    private const drivers = [
        'mysql' => 'PDO_MYSQL',
        'pgsql' => 'PDO_PGSQL',
        'odbc' => 'PDO_ODBC',
        'cubrid' => 'PDO_CUBRID',
        'dblib' => 'PDO_DBLIB',
        'firebird' => 'PDO_FIREBIRD',
        'ibm' => 'PDO_IBM',
        'informix' => 'PDO_INFORMIX',
        'oci' => 'PDO_OCI',
        'sqlite' => 'PDO_SQLITE',
        'sqlsrv' => 'PDO_SQLSRV',
    ];

    /*
     * Connection TimeOut
     * */
    private $timeout = 60;

    private $host = '127.0.0.1';

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
        $this->connect();
    }


    public function addConnection(array $config)
    {
        foreach ($config as $key => $item)
            $this->$key = $config[$key];
    }


    public function configure()
    {
        $this->dsn = $this->driver . ':' . 'dbname=' . $this->dbname . ';' . 'host=' . $this->host;
    }


    public function connect()
    {
        $this->configure();
        $this->connection = new PDO($this->dsn, $this->user, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection()
    {
        return $this->connection;
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