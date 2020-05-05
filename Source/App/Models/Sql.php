<?php

namespace Source\App\Models;


class Sql extends Model
{
    private string $driver = DATABASE['driver'];
    private string $host = DATABASE['host'];
    private int $port = DATABASE['port'];
    private string $dbname = DATABASE['dbname'];
    private string $username = DATABASE['username'];
    private string $passwd = DATABASE['passwd'];
    private object $conn;

    /** Start connection DB */
    public function __construct()
    {
        $dsn = $this->driver.":dbname=".$this->dbname.";host=".$this->host.";port=".$this->port;
        
        try {
            $this->conn = new \PDO($dsn, $this->username, $this->passwd);
            
        } catch (\PDOException $e) {
            echo "Falha ao conectar: " . $e->getMessage();
        }
    }

    /** bindParam for parameter */
    public function bindParam($statement, $key, $value): void
    {
        $statement->bindParam($key, $value);
    }

    /** Set all parameter and statement */
    public function setParam($statement, array $parameters = []): void
    {
        foreach ($parameters as $key => $value) {
            $this->bindParam($statement, $key, $value);
        }
    }
    
    /** Simple operations querys without fetchAll collumns and rows */
    public function query($statement, array $parameters = []): void
    {
        $query = $this->conn->prepare($statement);
        $this->setParam($query, $parameters);
        $query->execute();
    }

    /** For return fetchAll of datas in database */
    public function fetch($statement, array $parameters = []): array
    {
        $query = $this->conn->prepare($statement);
        $this->setParam($query, $parameters);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);       ;
    }
}   