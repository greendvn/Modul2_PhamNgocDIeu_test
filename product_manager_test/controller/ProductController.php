<?php

include_once "../model/Product.php";

class ProductController
{
    protected $productDB;

    public function __construct()
    {
        $db = new DBConnection("mysql:host=localhost;dbname=product_manage","root","Dieu1988");
        $this->productDB = new ProductDB($db->connect());
    }

    public function list()
    {
        $products = $this->productDB->getAll();
        include_once "view/list.php";
    }

    public function add(){
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            include_once "view/add.php";
        }else{
            $name = $_POST["name"];
            $type = $_POST["type"];
            $price = $_POST["price"];
            $number = $_POST["number"];
            $description = $_POST["description"];
            $product = new Product($name,$type,$price,$number);
            $product->setDayCreate(date('Y-m-d H:i:s'));
            $product->setDescription($description);
            if($name==null||$type==null||$price==null||$number==null)
                $message= "error";
            else {
                $this->productDB->createProduct($product);
                $message = "Product created";
            }
            include_once "view/add.php";
        }

    }

    public function delete(){
        $id = $_GET["id"];
        $product = $this->productDB->getProductById($id);
        include_once "view/delete.php";

    }
    public function edit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $product = $this->productDB->getProductById($id);
            include_once "view/edit.php";
        }

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $price = $_POST["price"];
            $dayCreate = $_POST["dayCreate"];
            $description = $_POST["description"];
            $number = $_POST["number"];
            $type = $_POST["type"];
            $product = new Product($name, $type, $price, $number);
            $product->setDayCreate($dayCreate);
            $product->setDescription($description);
            $this->productDB->update($id, $product);

            header("Location:index.php");
        }
    }

}