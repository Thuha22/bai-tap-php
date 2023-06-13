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
        if ($this->isSoNguyenTo($a) == false) {
            throw new Exception("Không set");
        }
        $this->a = $a;
    }
    public function __construct($x)
    {
        if ($this->isSoNguyenTo($x) == false) {
            throw new Exception("x không phải là số nguyên tố, không lưu trữ");
        }
        $this->a = $x;
    }
    private function isSoNguyenTo(int $x): bool
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

    public function timSoNguyenToTiepTheo()
    {
        $next = $this->a + 1;
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
        echo "Số nguyên tố tiếp theo sau " . $snt->getA() . " là: " . $snt->timSoNguyenToTiepTheo();
    }
}

$obj = new Show();
echo $obj->main();

//expect: Số nguyên tố tiếp theo sau 5 là: 7 
