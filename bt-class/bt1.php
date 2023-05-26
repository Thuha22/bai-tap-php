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
    public $number1;
    public $number2;
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
    function inputInfo()
    {
        $this->number1 = readline("Number 1: ");
        $this->number2 = readline("Number 2: ");
    }

    function printInfo()
    {
        echo "Số thứ nhất: " . $this->number1 . "\n";
        echo "Số thứ 2: " . $this->number2 . "\n";
    }
    function addition()
    {
        return  "Tổng:" . ($this->number1 + $this->number2);
    }
    function subtract()
    {
        return "\nHiệu: " . ($this->number1 - $this->number2);
    }
    function multi()
    {
        return "\nTích: " . $this->number1 * $this->number2;
    }
    function division()
    {
        return "\nThương: " . $this->number1 / $this->number2;
    }
}

$data = new SoHoc();
$data->inputInfo();
$data->printInfo();
echo $data->addition();
echo $data->subtract();
echo $data->multi();
echo $data->division();
