<?php
namespace My
{

class OrderHasProduct extends DBh {
    private $order_id;
    private $product_id;
    private $products;

    public function __construct(Order $order)
    {
        $sql = "SELECT product WHERE order_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$order->getId()]);
        $products = $stmt->fetchAll();
    }
}
}