<?php

/**
 * Bài tập Hệ thống quản lý sản phẩm
 * 1.Tạo một lớp có tên Product bao gồm các thuộc tính và phương thức sau:
 * · Name
 * · Description
 * · Price // 0 < Price <= 100
 * · list rate // lưu các đánh giá của người dùng cho sản phẩm, giá trị từ 1 - 5
 * · viewInfo() // hiển thị tên, giá và mô tả về sản phẩm
 * 2. Tạo lớp Shop gồm các thuộc tính và phương thức sau:
 * · List ProductList // lưu danh sách các sản phẩm của shop
 * · addProduct()  // yêu cầu người dùng nhập thông tin của sản phẩm rồi lưu vào ProductList
 * · removeProduct() // yêu cầu người dùng nhập vào tên sản phẩm sau đó tìm và xóa sản phẩm có tên tương ứng trong ProductList
 * · iterateProductList() // hiển thị các sản phẩm trong ProductList, gọi phương thức  viewInfo() của lớp Product, tính trung bình cộng đánh giá cho từng sản phẩm và hiển thị thông tin ra màn hình.
 * · searchProduct() // yêu cầu người dùng nhập vào 2 số, sau đó tìm và hiển thị thông tin của những sản phẩm có giá nằm giữa hai số đó.
 * 3.Tạo menu:
 * PRODUCT MANAGEMENT SYSTEM
 * . Add new product
 * . Remove product
 * . Iterate product list
 * . Search product
 * . Exit
 * và thực thi các phương thức tương ứng trong lớp Shop với mỗi mục chọn.
 * Câu hỏi thêm: Tạo thêm một mục trong Menu ứng với phương thức gọi là sortProduct() đặt trong lớp Shop để sắp xếp các sản phẩm trong ProductList theo giá.
 */

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

    //Thêm sản phẩm
    public function addProduct(array &$a)
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
    }

    //Xóa sản phẩm
    public function removeProduct(array &$a)
    {
        $temp = readline("Nhập tên sản phầm muốn xóa: ");
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i][0] == $temp) {
                for ($j = $i; $j < count($a) - 1; $j++) {
                    $a[$j] = $a[$j + 1];
                }
                array_pop($a);
            }
        }

        $this->setProductList($a);
        echo "<br>";
        var_dump($this->getProductList());
    }

    // In ra thông tin các sản phẩm trong list , tính tb đánh giá sản phẩm và in ra
    public function iterateProductList(array $list)
    {
        var_dump($list);
        $count = count($list);
        for ($i = 0; $i < $count; $i++) {
            echo "\t----Sản phẩm " . ($i + 1) . "----\n";
            $sp = new Product;
            $sp->setName($list[$i][0]);
            $sp->setPrice($list[$i][1]);
            $sp->setDescription($list[$i][2]);
            $sp->viewInfo($sp);

            $sum = 0;
            var_dump(count($list[$i][3]));
            for ($j = 0; $j < count($list[$i][3]); $j++) {
                $sum += $list[$i][3][$j];
                $tb = $sum / count($list[$i][3]);
            }
            echo "Đánh giá của khách hàng: " . round($tb, 1) . "/5 \n";
        }
    }

    //Tìm kiếm các sản phẩm trong khoảng giá nhập vào
    public function searchProduct()
    {
        echo "Nhập khoảng giá muồn tìm kiếm \n";
        $from = readline("Từ:");
        $to = readline(" - đến:");
        $list = $this->getProductList();
        $count = count($list);
        $listSearch = [];
        for ($i = 0; $i < $count; $i++) {
            if ($list[$i][1] >= $from && $list[$i][1] <= $to) {
                $listSearch[] = $list[$i];
            }
        }
        var_dump($listSearch);
        return $this->iterateProductList($listSearch);
    }

    //Sắp xếp sản phẩm trong list theo thứ tự thấp đến cao
    public  function sortProduct()
    {
        $list = $this->getProductList();
        for ($i = 0; $i < count($list); $i++) {
            for ($j = $i + 1; $j < count($list); $j++) {
                if ($list[$i][1] > $list[$j][1]) {
                    $temp = $list[$i];
                    $list[$i] = $list[$j];
                    $list[$j] = $temp;
                }
            }
        }
        return $this->iterateProductList($list);
    }
}

$obj = new Shop();
$a = [];
$chon = 1;
while ($chon != 0) {
    $chon = readline("Mời bạn chọn một mục(1-5):");
    switch ($chon) {
        case 1:
            $obj->addProduct($a);
            echo "Thêm sản phẩm thành công! \n";
            break;
        case 2:
            $obj->removeProduct($a);
            echo "Xóa sản phẩm thành công! \n";
            break;
        case 3:
            $list = $obj->getProductList();
            $obj->iterateProductList($list);
            break;
        case 4:
            echo $obj->searchProduct();
            break;
        case 5:
            echo $obj->sortProduct();
            break;
        case 6:
            return 0;
        default:
            echo "Hành động không hợp lệ! \n";
            $chon = 1;
    }
}
