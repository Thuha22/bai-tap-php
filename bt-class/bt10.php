<!--
Xây dựng lớp Vectơ có các thành phần sau:
+ Các thuộc tính:
    - Hoành độ đầu
    - Tung độ đầu
    - Hoành đô cuối
    - Tung độ cuối
+ Các phương thức:
    - Kiểm tra hai vectơ có bằng nhau không?
    - Tính góc giữa 2 vectơ
    - Tính module của 2 vectơ
    - Kiểm tra hai vectơ có cùng phương không?
    - Cộng hai vectơ
    - Trư hai vectơ
    - Nhân hai vectơ
Nhập vào 2 vectơ và thực hiện các phép toán trên hai vectơ đó.
-->

<?php
class Vecto
{
    private $hddau;
    private $tddau;
    private $hdcuoi;
    private $tdcuoi;

    public function getHDDau()
    {
        return $this->hddau;
    }
    public function setHDDau($hddau)
    {
        $this->hddau = $hddau;
    }
    public function getHDCuoi()
    {
        return $this->hdcuoi;
    }
    public function setHDCuoi($hdcuoi)
    {
        $this->hdcuoi = $hdcuoi;
    }
    public function getTDDau()
    {
        return $this->tddau;
    }
    public function setTDDau($tddau)
    {
        $this->tddau = $tddau;
    }
    public function getTDCuoi()
    {
        return $this->tdcuoi;
    }
    public function setTDCuoi($tdcuoi)
    {
        $this->tdcuoi = $tdcuoi;
    }

    // Tính module của vecto 1
    public function tinhModule(Vecto $vt1): float
    {
        $x1 = ($vt1->hdcuoi) - ($vt1->hddau);
        $y1 = ($vt1->tdcuoi) - ($vt1->tddau);
        $v = sqrt($x1 * $x1 + $y1 * $y1);
        return $v;
    }

    // Kiểm tra Vecto 1 và Vecto 2 có cùng phương không
    public function checkCungPhuong(Vecto $vt2): bool
    {
        $x1 = ($this->hdcuoi) - ($this->hddau);
        $y1 = ($this->tdcuoi) - ($this->tddau);
        $x2 = ($vt2->hdcuoi) - ($vt2->hddau);
        $y2 = ($vt2->tdcuoi) - ($vt2->tddau);
        if ($x1 / $x2 == $y1 / $y2) {
            return true;
        }
        return false;
    }

    // Kiểm tra Vecto 1 và Vecto 2 có bằng nhau không
    public function checkBangNhau(Vecto $vt2): bool
    {
        if ($this->checkCungPhuong($vt2) && $this->tinhModule($this) == $this->tinhModule($vt2)) {
            return true;
        }
        return false;
    }

    // Tính góc giữa 2 vecto 1 và vecto 2
    public function tinhGoc(Vecto $vt2): float
    {
        $x1 = ($this->hdcuoi) - ($this->hddau);
        $y1 = ($this->tdcuoi) - ($this->tddau);
        $x2 = ($vt2->hdcuoi) - ($vt2->hddau);
        $y2 = ($vt2->tdcuoi) - ($vt2->tddau);
        $cos = ($x1 * $x2 + $y1 * $y2) / ($this->tinhModule($this) * $this->tinhModule($vt2));
        $goc = (acos($cos) / pi()) * 180;
        return $goc;
    }

    // Cộng 2 vecto 
    public function congVecto(Vecto $vt2): String
    {
        $x1 = ($this->hdcuoi) - ($this->hddau);
        $y1 = ($this->tdcuoi) - ($this->tddau);
        $x2 = ($vt2->hdcuoi) - ($vt2->hddau);
        $y2 = ($vt2->tdcuoi) - ($vt2->tddau);
        $hdtong = $x1 + $x2;
        $tdtong = $y1 + $y2;
        return "($hdtong , $tdtong)";
    }

    //Trừ 2 vecto
    public function truVecto(Vecto $vt2): string
    {
        $x1 = ($this->hdcuoi) - ($this->hddau);
        $y1 = ($this->tdcuoi) - ($this->tddau);
        $x2 = ($vt2->hdcuoi) - ($vt2->hddau);
        $y2 = ($vt2->tdcuoi) - ($vt2->tddau);
        $hdtong = $x1 - $x2;
        $tdtong = $y1 - $y2;
        return "($hdtong , $tdtong)";
    }

    //Nhân 2 vecto
    public function nhanVecto(Vecto $vt2): float
    {
        $x1 = ($this->hdcuoi) - ($this->hddau);
        $y1 = ($this->tdcuoi) - ($this->tddau);
        $x2 = ($vt2->hdcuoi) - ($vt2->hddau);
        $y2 = ($vt2->tdcuoi) - ($vt2->tddau);
        $tich = $x1 * $x2 + $y1 * $y2;
        return $tich;
    }
}

$vt1 = new Vecto();
$vt2 = new Vecto();

//Nhập dữ liệu
printf("Nhập dữ liệu Vecto 1: \n");
$vt1->setHDDau(readline("Nhập hoành độ đầu:"));
$vt1->setTDDau(readline("Nhập tung độ đầu:"));
$vt1->setHDCuoi(readline("Nhập hoành độ cuối:"));
$vt1->setTDCuoi(readline("Nhập tung độ cuối:"));
printf("Nhập dữ liệu Vecto 2: \n");
$vt2->setHDDau(readline("Nhập hoành độ đầu:"));
$vt2->setTDDau(readline("Nhập tung độ đầu:"));
$vt2->setHDCuoi(readline("Nhập hoành độ cuối:"));
$vt2->setTDCuoi(readline("Nhập tung độ cuối:"));

echo "\n" . ($vt1->checkCungPhuong($vt2) ? 'Hai vecto có trùng phương' : 'Hai vecto không trùng phương');
echo "\nModule của veto 1 bằng: " . $vt1->tinhModule($vt1);
echo "\nModule của veto 2 bằng: " . $vt1->tinhModule($vt2);
echo "\n" . ($vt1->checkBangNhau($vt2) ? 'Hai vecto bằng nhau' : 'Hai vecto không bằng nhau');
echo "\nGóc giữa 2 vecto bằng: " . $vt1->tinhGoc($vt2) . "(độ)";
echo "\nTổng 2 vecto bằng: " . $vt1->congVecto($vt2);
echo "\nHiệu 2 vecto bằng: " . $vt1->truVecto($vt2);
echo "\nTích vô hướng 2 vecto bằng: " . $vt1->nhanVecto($vt2);

//expect:
// Nhập dữ liệu Vecto 1:
// Nhập hoành độ đầu:1
// Nhập tung độ đầu:2
// Nhập hoành độ cuối:4
// Nhập tung độ cuối:4
// Nhập dữ liệu Vecto 2:
// Nhập hoành độ đầu:2
// Nhập tung độ đầu:1
// Nhập hoành độ cuối:7
// Nhập tung độ cuối:0

// Hai vecto không trùng phương
// Module của veto bằng: 3.605551275464
// Module của veto 2 bằng: 5.0990195135928
// Hai vecto không bằng nhau
// Góc giữa 2 vecto bằng: 45(độ)
// Tổng 2 vecto bằng: (8 , 1)
// Hiệu 2 vecto bằng: (-2 , 3)
// Tích vô hướng 2 vecto bằng: 13