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

    public function viewInfo($sp)
    {
        echo "Tên sản phẩm: " . $sp->name . "\n";
        echo "Giá: " . $sp->price . "\n";
        echo "Mô tả: " . $sp->description . "\n";
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
    public function addProduct(&$a)
    {
        $sp = new Product();
        $sp->setName(readline("Nhập tên sản phẩm: "));
        do {
            $sp->setPrice(readline("Nhập giá (0-100): "));
        } while ($sp->getPrice() <= 0 || $sp->getPrice() > 100);
        $sp->setDescription(readline("Nhập mô tả: "));
        $solg = readline("Số lượng đánh giá: ");
        for ($i = 0; $i < $solg; $i++) {
            do {
                $dg[$i] = readline("Đánh giá " . ($i + 1) . " (1-5): ");
            } while ($dg[$i] < 1 || $dg[$i] > 5);
        }
        $sp->setListRate($dg);

        $i = count($a);
        $a[$i][0] = $sp->getName();
        $a[$i][1] = $sp->getPrice();
        $a[$i][2] = $sp->getDescription();
        $a[$i][3] = $sp->getListRate();

        $this->setProductList($a);
        var_dump($this->productList);
    }
    public function removeProduct(&$a)
    {
        var_dump($this->productList);
        $temp = readline("Nhập tên sản phầm muốn xóa: ");
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i][0] == $temp) {
                unset($a[$i]);
            }
        }
        $this->setProductList($a);
        var_dump($this->productList);
    }
    public function iterateProductList()
    {
        $list = $this->getProductList();
        $count = count($list);

        for ($i = 0; $i < $count; $i++) {
            echo "\t----Sản phẩm " . ($i + 1) . "----\n";
            $sp = new Product;
            $sp->setName($list[$i][0]);
            $sp->setPrice($list[$i][1]);
            $sp->setDescription($list[$i][2]);
            $sp->viewInfo($sp);

            $sum = 0;
            for ($j = 0; $j < count($list[$i][3]); $j++) {
                $sum += $list[$i][3][$j];
                $tb = $sum / count($list[$i][3]);
            }
        }
    }
}

$obj = new Shop();
$a = [];
$chon = 1;
while ($chon != 0) {
    $chon = readline("Mời bạn chọn một mục:");
    switch ($chon) {
        case 1:
            $obj->addProduct($a);
            break;
        case 2:
            $obj->removeProduct($a);
            break;
        case 3:
            $obj->iterateProductList();
            break;
        default:
            echo "Hành động không hợp lệ! \n";
    }
}
