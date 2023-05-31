<!--
    Tạo class có tên SoHoc gồm có các thuộc tính và phương thức sau:
    + Thuộc tính: number1, number2
    + Phương thức:
    - Phương thức tạo __construct()
    - Các phương thức get, set cho tất cả các thuộc tính
    - inputInfo(): dùng để nhập 2 số number1, number2
    - printInfo(): dùng để hiển thị number1, number2
    - addition(): dùng để cộng number1, number2
    - subtract(): trừ number1, number2
    - multi(): dùng để nhân number1, number2
    - division(): dùng để chia number1, number2.
-->

<?php
class SoHoc
{
    private $number1;
    private $number2;
    public function getNumber1()
    {
        return $this->number1;
    }
    public function setNumber1($number1)
    {
        $this->number1 = $number1;
    }
    public function getNumber2()
    {
        return $this->number2;
    }
    public function setNumber2($number2)
    {
        $this->number2 = $number2;
    }
    function addition(): float
    {
        return $this->number1 + $this->number2;
    }
    function subtract(): float
    {
        return $this->number1 - $this->number2;
    }
    function multi(): float
    {
        return  $this->number1 * $this->number2;
    }
    function division(): float
    {
        return $this->number1 / $this->number2;
    }
}

$data = new SoHoc();
$data->setNumber1(readline("Number 1:"));
$data->setNumber2(readline("Number 2:"));
echo "Số thứ nhất: " . $data->getNumber1();
echo "\nSố thứ hai: " . $data->getNumber2();
echo "\nTổng:" . $data->addition();
echo "\nHiệu: " . $data->subtract();
echo "\nTích: " . $data->multi();
echo "\nThương: " . $data->division();

//expect:
// Number 1:2
// Number 2:4
// Số thứ nhất: 2
// Số thứ hai: 4
// Tổng:6
// Hiệu: -2
// Tích: 8
// Thương: 0.5
