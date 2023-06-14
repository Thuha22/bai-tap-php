<?php

class Product
{
    protected $name;
    protected $description;
    protected $price;
    protected $listRate;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setListRate($listRate)
    {
        $this->listRate = $listRate;
    }
    public function getListRate()
    {
        return $this->listRate;
    }

    public function viewInfo()
    {
        echo "Tên sản phẩm:" . $this->name;
        echo "Giá:" . $this->price;
        echo "Mô tả:" . $this->description;
    }
}

class Shop
{
    protected $productList;
    public function setProductList($productList)
    {
        $this->productList = $productList;
    }
    public function getProductList()
    {
        return $this->productList;
    }
    public function addProduct()
    {
        $sp = new Product();
        $sp->setName(readline("Nhập tên sản phẩm: "));
        $sp->setPrice(readline("Nhập giá: "));
        $sp->setDescription(readline("Nhập mô tả: "));
        var_dump($sp->getName());
        $this->setProductList($sp->getName())[0][0];
        $this->setProductList($sp->getPrice())[0][1];
        $this->setProductList($sp->getDescription())[0][2];
        var_dump($this->productList[0]);
    }
}

$obj = new Shop();
$obj->addProduct();
