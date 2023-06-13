<?php
//Xây dựng lớp tam giác, lớp tam giác vuông, tam giác cân thừa kế từ lớp tam giác. Lớp tam giác đều thừa kế từ lớp tam giác cân.

class TamGiac
{
    protected $a;
    protected $b;
    protected $c;

    public function setA($a)
    {
        $this->a = $a;
    }
    public function setB($b)
    {
        $this->b = $b;
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
}

class TamGiacVuong extends TamGiac
{
    function isTamGiacVuong(): bool
    {
        $a = $this->a * $this->a;
        $b = $this->b * $this->b;
        $c = $this->c * $this->c;

        if ($this->isTamGiac() && (($a + $b) == $c || ($a + $c) == $b || ($b + $c) == $a)) {
            return true;
        } else {
            return false;
        }
    }
}

class TamGiacCan extends TamGiac
{
    function isTamGiacCan(): bool
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;

        if ($this->isTamGiac() && ($a == $c || $a == $b ||  $c == $b)) {
            return true;
        } else {
            return false;
        }
    }
}

class TamGiacDeu extends TamGiacCan
{
    function isTamGiacDeu(): bool
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        if ($this->isTamGiacCan() && ($a == $b && $b == $c)) {
            return true;
        } else {
            return false;
        }
    }
}

$obj = new TamGiacCan();
$obj->setA(readline("Cạnh a:"));
$obj->setB(readline("Cạnh b:"));
$obj->setC(readline("Cạnh c:"));
echo ($obj->isTamGiacCan()) ? "TRUE" : "FALSE";
