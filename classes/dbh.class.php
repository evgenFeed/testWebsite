<?php
namespace My
{
class DBh
{ 
    private $host = "34.88.30.221";
    private $user = "test_remote";
    private $pwd = "test_remote";
    private $dbName = "mydb";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
}