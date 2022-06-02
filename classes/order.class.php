<?php
namespace My
{
class Order extends DBh {
    private $id;
    private $client_id;

    public function __construct($client_id)
    {
        $this->client_id = $client_id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getOrder($client_id) {
        $sql = "SELECT order WHERE client_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$client_id]);
        $orders = $stmt->fetchAll();

        return $orders;
    }

    public function getOrderId() {
        $sql = "SELECT order WHERE client_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->client_id]);
        $orders = $stmt->fetchAll();

        return $orders;
    }
}
}