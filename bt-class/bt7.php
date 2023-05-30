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
    private $dai;
    private $rong;
    public function getDai()
    {
        return $this->dai;
    }
    public function setDai($dai)
    {
        $this->dai = $dai;
    }
    public function getRong()
    {
        return $this->rong;
    }
    public function setRong($rong)
    {
        $this->rong = $rong;
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
$data->setDai(readline("Nhập chiều dài:"));
$data->setRong(readline("Nhập chiều rộng:"));
// $data->inputValue($dai, $rong);
echo "========================================";
echo "\nChu vi: " .  $data->tinhChuVi();
echo "\nDiện tích:" . $data->tinhDienTich();
// $dai=4;$rong=3
//expect: Chu vi: 14, Diện tích:12
