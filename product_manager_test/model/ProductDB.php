<?php


class ProductDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products ";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $product = new Product($item["name"], $item["type"], $item["price"], $item["number"]);
            $product->setId($item["id"]);
            $product->setDayCreate($item["dayCreate"]);
            $product->setDescription($item["description"]);
            array_push($arr, $product);
        }
        return $arr;
    }

    public function createProduct($product)
    {
        $sql = "INSERT INTO products(name, type, price, number, dayCreate, description) VALUES (?,?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $name = $product->getName();
        $type = $product->getType();
        $price = $product->getPrice();
        $number = $product->getNumber();
        $dayCreate = $product->getDayCreate();
        $description = $product->getDescription();
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $type);
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $number);
        $stmt->bindParam(5, $dayCreate);
        $stmt->bindParam(6, $description);
        $stmt->execute();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $this->connect->query($sql);
        $result = $stmt->fetch();
        $product = new Product($result["name"], $result["type"], $result["price"], $result["number"]);
        $product->setId($result["id"]);
        $product->setDescription($result["description"]);
        $product->setDayCreate($result["dayCreate"]);
        return $product;
    }

    public function update($id, $product)
    {
        $sql = "INSERT INTO products(name, type, price, number, dayCreate, description) VALUES (?,?,?,?,?,?) WHERE id = ?";
        $stmt = $this->connect->prepare($sql);
        $name = $product->getName();
        $type = $product->getType();
        $price = $product->getPrice();
        $number = $product->getNumber();
        $dayCreate = $product->getDayCreate();
        $description = $product->getDescription();
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $type);
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $number);
        $stmt->bindParam(5, $dayCreate);
        $stmt->bindParam(6, $description);
        $stmt->bindParam(7, $id);
        $stmt->execute();
    }
    public function delete($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
    }

}