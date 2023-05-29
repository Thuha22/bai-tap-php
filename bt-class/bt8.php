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
    // public function __construct($tu, $mau)
    // {
    //     $this->tu = $tu;
    //     $this->mau = $mau;
    // }

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

    function printInfo()
    {
        // echo "Phân số thứ nhất: " . $this->tu . '/' . $this->mau . "\n";
        // echo "Phân số thứ nhất rút gọn: " . $this->rutGon() . "\n";
        // echo "Phân số thứ nhất nghịch đảo: " . $this->nghichDao() . "\n";
        // echo "Tổng:" . $this->add() . "\n";
        // echo "Hiệu:" . $this->sub() . "\n";
        // echo "Tích:" . $this->mul() . "\n";
        // echo "Thương:" . $this->div() . "\n";
        var_dump($this);
        echo $this->tu . '/' . $this->mau . "\n";
    }

    function rutGon()
    {
        $tu = $this->tu;
        $mau = $this->mau;

        while ($mau != 0) {
            $sochia = $mau;
            $mau = $tu % $mau;
            $tu = $sochia;
        }
        $tu = $this->tu;
        $mau = $this->mau;
        return ($tu / $sochia) . '/' . ($mau / $sochia);
    }

    function nghichDao()
    {
        $tu = $this->tu;
        $mau = $this->mau;
        $temp = $tu;
        $tu = $mau;
        $mau = $temp;
        return $tu . '/' . $mau;
    }

    function add($ps1, $ps2)
    {
        $kq = new Fraction();
        // $tu = $this->tu;
        // $mau = $this->mau;
        $kq->tu = $ps1->tu * $ps2->mau + $ps2->tu * $ps1->mau;
        $kq->mau = $ps1->mau * $ps2->mau;
        // var_dump($kq);
        return $kq;
        // $tu2 = $this->tu2;
        // $mau2 = $this->mau2;
        // return (($tu * $mau2) + ($tu2 * $mau)) . '/' . ($mau * $mau2);
    }
    // function sub()
    // {
    //     $tu = $this->tu;
    //     $mau = $this->mau;
    //     // $tu2 = $this->tu2;
    //     // $mau2 = $this->mau2;
    //     return (($tu * $mau2) - ($tu2 * $mau)) . '/' . ($mau * $mau2);
    // }
    // function mul()
    // {
    //     $tu = $this->tu;
    //     $mau = $this->mau;
    //     // $tu2 = $this->tu2;
    //     // $mau2 = $this->mau2;
    //     return ($tu * $tu2) . '/' . ($mau * $mau2);
    // }
    // function div()
    // {
    //     $tu = $this->tu;
    //     $mau = $this->mau;
    //     // $tu2 = $this->tu2;
    //     // $mau2 = $this->mau2;
    //     return ($tu * $mau2) . '/' . ($mau * $tu2);
    // }
}


// $data = new Fraction();
// $data->inputInfo();
class Program
{
    function main()
    {
        $ps1 = new Fraction();
        $ps2 = new Fraction();
        $tong = new Fraction();

        printf("Nhập dữ liệu phân số 1: \n");
        $ps1->inputInfo();
        printf("Nhập dữ liệu phân số 2: \n");
        $ps2->inputInfo();
        printf("Phân số 1 vừa nhập là: ");
        $ps1->printInfo();
        printf("Phân số 2 vừa nhập là: ");
        $ps2->printInfo();
        $tong->add($ps1, $ps2);
        $tong->printInfo();
    }
}

$data = new Program();
$data->main();
