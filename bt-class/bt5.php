<!--
    Tạo class SoNguyenTo gồm:
    Thuộc tính a lưu trữ 1 số nguyên tố.
    Constructor 1 tham số: __construct__(x). Nếu x là số nguyên tố thì lưu x vào biến a. Nếu không thì in ra màn hình: x không phải là số nguyên tố, không lưu trữ.
    Phương thức isSoNguyenTo(x) kiểm tra số x có phải số nguyên tố không.
    Phương thức timSoNguyenToTiepTheo() tìm và trả về số nguyên tố liền sau số nguyên tố a.
    Các phương thức get/set biến a. Nếu tham số truyền vào phương thức set là 1 số nguyên tố thì mới lưu vào thuộc tính a. Nếu không thì hiển thị thông báo: Không set.
    Khai báo 1 đối tượng thuộc class SoNguyenTo và test các phương thức đã viết.
-->
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
        $this->a = $x;
    }
    public function isSoNguyenTo($x)
    {
        if ($x < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($x); $i++) {
            if ($x % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

class SoNguyenToTiep extends SoNguyenTo
{
    public function timSoNguyenToTiepTheo()
    {
        $next = $this->getA() + 1;
        while ($this->isSoNguyenTo($next) == false) {
            $next++;
        }
        return $next;
    }
}
class Show
{
    function main()
    {
        $x = 5;
        $snt = new SoNguyenTo($x);
        $nextsnt = new SoNguyenToTiep($x);
        if ($snt->isSoNguyenTo($x)) {
            $snt->__construct($x);
            echo "Số nguyên tố tiếp theo sau " . $snt->getA() . " là: " . $nextsnt->timSoNguyenToTiepTheo();
        } else {
            echo "x không phải số nguyên tố, không lưu trữ";
        }
    }
}

$obj = new Show();
$obj->main();

//expect: Số nguyên tố tiếp theo sau 5 là: 7 
