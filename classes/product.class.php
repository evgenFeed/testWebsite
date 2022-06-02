<?php
namespace My
{

class Product extends DBh {
    private $id;
    private $type;
    private $productName;

    public function __construct($type, $productName)
    {
        $this->type = $type;
        $this->productName = $productName;
    }

    public function getProductById($id)
    {
        $sql = "SELECT product WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $prod = $stmt->fetch();
        return $prod;
    }
    public function getProductByProductName($productName)
    {
        $sql = "SELECT product WHERE productname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$productName]);
        $prod = $stmt->fetch();
        return $prod;
    }
}
}