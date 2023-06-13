<?php
// Xây dựng lớp đa giác, hình bình hành thừa kế từ đa giác, hình chữ nhật thừa kế từ hình bình hành và hình vuông thừa kế từ hình chữ nhật. Nhập vào các thuộc tính cần thiết của mỗi hình và tính chu vi, diện tích của hình đó.

class DaGiac
{
    protected $dai;
    protected $rong;
    protected $cao;

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
    public function getCao()
    {
        return $this->cao;
    }
    public function setCao($cao)
    {
        $this->cao = $cao;
    }

    public function chuVi()
    {
        return ($this->dai + $this->rong) * 2;
    }
    public function dienTich()
    {
        return $this->dai * $this->cao;
    }
}

class HinhBinhHanh extends DaGiac
{
}

class HinhChuNhat extends HinhBinhHanh
{
    function setRong($rong)
    {
        $this->rong = $rong;
        $this->cao = $rong;
    }
}

class HinhVuong extends HinhChuNhat
{
    function setDai($dai)
    {
        $this->dai = $dai;
        $this->rong = $dai;
        $this->cao = $dai;
    }
}

class Program
{

    public function main()
    {
        $hbh = new HinhBinhHanh();
        echo "---- Hình bình hành ---- \n";
        $hbh->setDai(readline("Nhập cạnh đáy:"));
        $hbh->setRong(readline("Nhập cạnh bên:"));
        $hbh->setCao(readline("Nhập chiều cao:"));
        echo "Chu vi: " . $hbh->chuVi() . "\n";
        echo "Diện tích: " . $hbh->dienTich() . "\n";

        $hcn = new HinhChuNhat();
        echo "---- Hình chữ nhật ----\n";
        $hcn->setDai(readline("Nhập chiều dài:"));
        $hcn->setRong(readline("Nhập chiều rộng:"));
        echo "Chu vi: " . $hcn->chuVi() . "\n";
        echo "Diện tích: " . $hcn->dienTich() . "\n";

        $hv = new HinhVuong();
        echo "---- Hình vuông ----\n";
        $hv->setDai(readline("Nhập cạnh:"));
        echo "Chu vi: " . $hv->chuVi() . "\n";
        echo "Diện tích: " . $hv->dienTich() . "\n";
    }
}

$obj = new Program;
$obj->main();

//expect:
// ---- Hình bình hành ----
// Nhập cạnh đáy:4
// Nhập cạnh bên:3
// Nhập chiều cao:2
// Chu vi: 14
// Diện tích: 8
// ---- Hình chữ nhật ----
// Nhập chiều dài:3
// Nhập chiều rộng:4
// Chu vi: 14
// Diện tích: 12
// ---- Hình vuông ----
// Nhập cạnh:3
// Chu vi: 12
// Diện tích: 9