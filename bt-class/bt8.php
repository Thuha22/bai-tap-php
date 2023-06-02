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
    private $tu;
    private $mau;

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


    // Tìm ước chung lớn nhất của 2 số
    public function timUCLN(int $a, int $b): int
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

    //Tối giản phân số
    public function rutGon(Fraction $ps1): Fraction
    {
        $kq = new Fraction();
        $uc = $ps1->timUCLN($ps1->tu, $ps1->mau);
        $kq->tu = $ps1->tu / $uc;
        $kq->mau = $ps1->mau / $uc;
        return $kq;
    }

    //Tìm phân số nghịch đảo 
    public function nghichDao(Fraction $ps1): Fraction
    {
        $kq = new Fraction();
        $kq->tu = $ps1->mau;
        $kq->mau = $ps1->tu;
        return $kq;
    }

    // Cộng hai phân số
    public function add(Fraction $ps2): Fraction
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu * $ps2->mau + $ps2->tu * $mau;
        $kq->mau = $mau * $ps2->mau;
        return $kq->rutGon($kq);
    }

    //Trừ hai phân số
    public function sub(Fraction $ps2): Fraction
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu * $ps2->mau - $ps2->tu * $mau;
        $kq->mau = $mau * $ps2->mau;
        return $kq->rutGon($kq);
    }

    //Nhân hai phân số
    public function mul(Fraction $ps2): Fraction
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu *  $ps2->tu;
        $kq->mau = $mau * $ps2->mau;
        return $kq->rutGon($kq);
    }

    // chia hai phân số
    public function div(Fraction $ps2): Fraction
    {
        $kq = new Fraction();
        $tu = $this->tu;
        $mau = $this->mau;
        $kq->tu = $tu *  $ps2->mau;
        $kq->mau = $mau * $ps2->tu;
        return $kq->rutGon($kq);
    }
}


class Program
{
    public function main()
    {
        $ps1 = new Fraction();
        $ps2 = new Fraction();

        //Nhập dữ liệu
        printf("Nhập dữ liệu phân số 1: \n");
        $ps1->setTu(readline("Nhập tử số :"));
        $ps1->setMau(readline("Nhập mẫu số :"));
        printf("Nhập dữ liệu phân số 2: \n");
        $ps2->setTu(readline("Nhập tử số :"));
        $ps2->setMau(readline("Nhập mẫu số :"));

        $tong = $ps1->add($ps2);
        $hieu = $ps1->sub($ps2);
        $tich = $ps1->mul($ps2);
        $thuong = $ps1->div($ps2);

        //Hiển thị
        printf("Phân số 1 vừa nhập là: ");
        echo $ps1->getTu() . '/' . $ps1->getMau();
        printf("\nPhân số 2 vừa nhập là: ");
        echo $ps2->getTu() . '/' . $ps2->getMau();
        printf("\nTổng 2 phân số: ");
        echo $tong->getTu() . '/' . $tong->getMau();
        printf("\nHiệu 2 phân số: ");
        echo $hieu->getTu() . '/' . $hieu->getMau();
        printf("\nTích 2 phân số: ");
        echo $tich->getTu() . '/' . $tich->getMau();
        printf("\nThương 2 phân số: ");
        echo $thuong->getTu() . '/' . $thuong->getMau();
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