<?php
namespace My
{
require '/var/www/html/classes/dbh.class.php';

class Client extends DBh
{
    private $id;
    private $name;
    private $email;

    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getClients()
    {
        $sql = "SELECT * FROM client";
        $stmt = $this->connect()->query($sql);
        $clients = $stmt->fetchAll();
        return $clients;
        foreach($clients as $client)
        {
            echo $client->getId() . ' ' . $client->getName() . ' ' . $client->getEmail() . '<br>';
        }
    }

    public function getClientByEmail($email) {
        $sql = "SELECT * FROM client WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $clients = $stmt->fetchAll();

        return $clients;
    }

    public function save() {
        $sql = "INSERT INTO client(name, email) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->name, $this->email]);
    }
}
}