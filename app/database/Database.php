<?php
namespace App\database;
require __DIR__ . '/../../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class Database
{
    private static $instance;
    private $serverName;
    private $userName;
    private $password;
    private $dbname;
    private $conn;
    private $error;


    public function __construct()
    {
        $this->serverName = $_ENV["DB_SERVERNAME"];
        $this->userName = $_ENV["DB_USERNAME"];
        $this->password = $_ENV["DB_PASSWORD"];
        $this->dbname = $_ENV["DB_NAME"];
        $this->DbConnect();
    }

    public function DbConnect(){

        $this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->dbname);

        if (!$this->conn) {
            $this->error = "Database connectain failed";
            return false;
        }
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getConnection() {
        return $this->conn;
    }
}


