<!--
    Xây dựng lớp tam giác (Triangle) có các thành phần:
    * Các thuộc tính: 3 cạnh a, b, c của tam giác.
    * Các phương thức:
    - Nhập độ dài 3 cạnh
    - Xác định kiểu tam giác
    - Tính chu vi tam giác
    - Tính diện tích tam giác
-->
<?php
class Triangle
{
    private $a;
    private $b;
    private $c;
    public function getA()
    {
        return $this->a;
    }
    public function setA($a)
    {
        $this->a = $a;
    }
    public function getB()
    {
        return $this->b;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function getC()
    {
        return $this->c;
    }
    public function setC($c)
    {
        $this->c = $c;
    }

    function isTamGiac(): bool
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;

        if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
            return true;
        } else {
            return false;
        }
    }
    function tinhChuVi(): float
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        $cv = $a + $b + $c;
        return  $cv;
    }
    function tinhDienTich(): float
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        $p =  ($a + $b + $c) / 2;
        $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        return $s;
    }
}

$data = new Triangle();
$data->setA(readline("Cạnh a:"));
$data->setB(readline("Cạnh b:"));
$data->setC(readline("Cạnh c:"));
echo "========================================\n";
echo ($data->isTamGiac() ? "a, b, c là 3 cạnh của tam giác" : "a, b, c không phải 3 cạnh của tam giác") . "\n";
echo "Chu vi:" . $data->tinhChuVi() . "\n";
echo "Diện tích:" . $data->tinhDienTich() . "\n";
// Cạnh a:3
// Cạnh b:4
// Cạnh c:5
// ========================================
// a, b, c là 3 cạnh của tam giác
// Chu vi:12
// Diện tích:6