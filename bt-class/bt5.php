<?php
class SoNguyenTo
{
    private $a;
    public function getA()
    {
        return $this->a;
    }
    public function setA($a)
    {
        $this->a = $a;
    }
    public function __construct($x)
    {
        if ($this->isSNT($x) == 1) {
            $this->a = $x;
            $this->nextSNT();
        } else {
            echo "x không phải số nguyên tố, không lưu trữ";
        }
    }
    public function isSNT($x)
    {
        $laSNT = 1;
        if ($x < 2) {
            $laSNT = 0;
        }
        for ($i = 2; $i <= sqrt($x); $i++) {
            if ($x % $i == 0) {
                $laSNT = 0;
                break;
            }
        }
        return $laSNT = 1;
    }

    public function nextSNT()
    {
        $next = $this->a + 1;
        while ($this->isSNT($next) != 1) {
            $next++;
        }
        echo "Số nguyên tố tiếp theo sau $this->a là: $next";
    }
}

$obj = new SoNguyenTo(5);
echo  $obj->getA();
