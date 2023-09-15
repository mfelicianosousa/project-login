<?php

namespace Main\Database;

class Sql extends \PDO
{
    private $conn = null;

    public const DBNAME = 'db_projetologin';
    public const HOST = 'localhost';
    public const USERNAME = 'boot_access';
    public const PASSWORD = '@#Boot@123456$';

    public function __construct()
    {
        $this->conn = new \PDO(
            'mysql:dbname='.Sql::DBNAME.';host='.Sql::HOST,
            Sql::USERNAME,
            Sql::PASSWORD
        );
    }

    public function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function setParams($statement, $parameters = [])
    {
        foreach ($parameters as $key => $value) {
            // code...
            $this->setParam($statement, $key, $value);
        }
    }

    public function getQuery($rawQuery, $params = [])
    {
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();

        return $stmt;
    }

    public function getSelect($rawQuery, $params = [])
    {
        $stmt = $this->getQuery($rawQuery, $params);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
