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
    var $a;
    var $b;
    var $c;
    function inputValue()
    {
        $this->a = readline("Cạnh a:");
        $this->b = readline("Cạnh b:");
        $this->c = readline("Cạnh c:");
    }
    function isTamGiac()
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;

        if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
            return "$a, $b, $c là 3 cạnh của tam giác";
        } else {
            return "$a, $b, $c không phải 3 cạnh của tam giác";
        }
    }
    function tinhChuVi()
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        $cv = $a + $b + $c;
        return  $cv;
    }
    function tinhDienTich()
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
$data->inputValue();
echo "========================================\n";
echo $data->isTamGiac() . "\n";
echo "Chu vi:" . $data->tinhChuVi() . "\n";
echo "Diện tích:" . $data->tinhDienTich() . "\n";
