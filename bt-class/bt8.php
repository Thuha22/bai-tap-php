<!--
    Xây dựng lớp Phân số (Fraction) có các thành phần sau:
    * Các thuộc tính: Tử số, mẫu số.
    * Phương thức tạo để khởi tạo giá trị cho tử số và mẫu số.
    * Các phương thức setter và getter.
    * Các phương thức:
    - Nhập phân số
    - In Phân số
    - Rút gọn phân số
    - Nghịch đảo phân số
    - add(), sub(), mul(), div() tương ứng để thực hiện cộng, trừ, nhân, chia hai phân số cho nhau.
-->
<?php
class Fraction
{
    public $tu;
    public $mau;

    public function getTu()
    {
        return $this->tu;
    }
    public function setTu($tu)
    {
        $this->tu = $tu;
    }
    public function getMau()
    {
        return $this->mau;
    }
    public function setMau($mau)
    {
        $this->mau = $mau;
    }

    public function inputInfo()
    {
        $this->tu = readline("Nhập tử phân số thứ nhất:");
        $this->mau = readline("Nhập mẫu phân số thứ nhất:");
    }

    public function printInfo()
    {
        if ($this->tu == $this->mau) {
            echo 1 . "\n";
        } elseif ($this->tu == 0) {
            echo 0 . "\n";
        } else {
            echo $this->tu . '/' . $this->mau . "\n";
        }
    }

    public function timUCLN(int $a, int $b)
    {
        if ($b == 0) {
            return $a;
        }
        while ($b != 0) {
            $sochia = $b;
            $b = $a % $b;
            $a = $sochia;
        }
        return $a;
    }
    public function rutGon($ps1)
    {
        $kq = new Fraction();
        $uc = $ps1->timUCLN($ps1->tu, $ps1->mau);
        $kq->tu = $ps1->tu / $uc;
        $kq->mau = $ps1->mau / $uc;
        return $kq;
    }

    public function nghichDao($ps1)
    {
        $kq = new Fraction();
        $kq->tu = $ps1->mau;
        $kq->mau = $ps1->tu;
        return $kq;
    }

    public function add($ps2)
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu * $ps2->mau + $ps2->tu * $mau;
        $kq->mau = $mau * $ps2->mau;
        return $kq->rutGon($kq);
    }
    public function sub($ps2)
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu * $ps2->mau - $ps2->tu * $mau;
        $kq->mau = $mau * $ps2->mau;
        return $kq->rutGon($kq);
    }
    public function mul($ps2)
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu *  $ps2->tu;
        $kq->mau = $mau * $ps2->mau;
        return $kq->rutGon($kq);
    }
    public function div($ps2)
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu *  $ps2->mau;
        $kq->mau = $mau * $ps2->tu;
        // return $kq;
        return $kq->rutGon($kq);
    }
}


class Program
{
    public function main()
    {
        $ps1 = new Fraction();
        $ps2 = new Fraction();
        $tong = new Fraction();

        //Nhập dữ liệu
        printf("Nhập dữ liệu phân số 1: \n");
        $ps1->inputInfo();
        printf("Nhập dữ liệu phân số 2: \n");
        $ps2->inputInfo();

        $tong = $ps1->add($ps2);
        $hieu = $ps1->sub($ps2);
        $tich = $ps1->mul($ps2);
        $thuong = $ps1->div($ps2);

        //Hiển thị
        printf("Phân số 1 vừa nhập là: ");
        $ps1->printInfo();
        printf("Phân số 2 vừa nhập là: ");
        $ps2->printInfo();
        printf("Tổng 2 phân số: ");
        $tong->printInfo();
        printf("Hiệu 2 phân số: ");
        $hieu->printInfo();
        printf("Tích 2 phân số: ");
        $tich->printInfo();
        printf("Thương 2 phân số: ");
        $thuong->printInfo();
    }
}

$data = new Program();
$data->main();
// Nhập dữ liệu phân số 1:
// Nhập tử phân số thứ nhất:2
// Nhập mẫu phân số thứ nhất:5
// Nhập dữ liệu phân số 2:
// Nhập tử phân số thứ nhất:3
// Nhập mẫu phân số thứ nhất:4
// Phân số 1 vừa nhập là: 2/5
// Phân số 2 vừa nhập là: 3/4
// Tổng 2 phân số: 23/20
// Hiệu 2 phân số: 7/-20
// Tích 2 phân số: 3/10
// Thương 2 phân số: 8/15