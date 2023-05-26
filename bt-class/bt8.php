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
phpinfo();
class Fraction
{
    var $tu;
    var $mau;
    var $tu2;
    var $mau2;
    public function __construct()
    {
        $this->inputInfo();
        $this->printInfo();
        $this->rutGon();
    }
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

    function inputInfo()
    {
        // $this->tu = $_POST['tu'];
        // $this->mau = $_POST['mau'];
        $this->tu = readline("Nhập tử phân số thứ nhất:");
        $this->mau = readline("Nhập mẫuphân số thứ nhất:");
        $this->tu2 = readline("Nhập tử số phân số thứ 2:");
        $this->mau2 = readline("Nhập mẫu số phân số thứ 2:");
    }

    function printInfo()
    {
        echo "Phân số thứ nhất: " . $this->tu . '/' . $this->mau . "\n";
        echo "Phân số thứ 2: " . $this->tu2 . '/' . $this->mau2 . "\n";
        echo "Phân số thứ nhất rút gọn: " . $this->rutGon() . "\n";
        echo "Phân số thứ nhất nghịch đảo: " . $this->nghichDao() . "\n";
        echo "Tổng:" . $this->add() . "\n";
        echo "Hiệu:" . $this->sub() . "\n";
        echo "Tích:" . $this->mul() . "\n";
        echo "Thương:" . $this->div() . "\n";
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
    function add()
    {
        $tu = $this->tu;
        $mau = $this->mau;
        $tu2 = $this->tu2;
        $mau2 = $this->mau2;
        return (($tu * $mau2) + ($tu2 * $mau)) . '/' . ($mau * $mau2);
    }
    function sub()
    {
        $tu = $this->tu;
        $mau = $this->mau;
        $tu2 = $this->tu2;
        $mau2 = $this->mau2;
        return (($tu * $mau2) - ($tu2 * $mau)) . '/' . ($mau * $mau2);
    }
    function mul()
    {
        $tu = $this->tu;
        $mau = $this->mau;
        $tu2 = $this->tu2;
        $mau2 = $this->mau2;
        return ($tu * $tu2) . '/' . ($mau * $mau2);
    }
    function div()
    {
        $tu = $this->tu;
        $mau = $this->mau;
        $tu2 = $this->tu2;
        $mau2 = $this->mau2;
        return ($tu * $mau2) . '/' . ($mau * $tu2);
    }
}
$data = new Fraction();
