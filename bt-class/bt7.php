<!-- 
    Xây dựng lớp hình chữ nhật (Rectangle) có các thành phần sau:
    * Các thuộc tính: chiều dài, chiều rộng.
    * Các phương thức:
    - Nhập chiều dài, chiều rộng
    - Tính diện tích
    - Tính chu vi
-->
<?php
class Rectangle
{
    public $dai;
    public $rong;
    public function inputValue()
    {
        $this->dai = readline("Nhập chiều dài:");
        $this->rong = readline("Nhập chiều rộng:");
    }
    public function tinhChuVi()
    {
        $dai = $this->dai;
        $rong = $this->rong;
        $cv = ($dai + $rong) * 2;
        return $cv;
    }
    public function tinhDienTich()
    {
        $dai = $this->dai;
        $rong = $this->rong;
        $s = $dai * $rong;
        return $s;
    }
}

$data = new Rectangle();
$data->inputValue();
echo "========================================";
echo "\nChu vi: " .  $data->tinhChuVi();
echo "\nDiện tích:" . $data->tinhDienTich();
// $dai=4;$rong=3
//expect: Chu vi: 14, Diện tích:12
