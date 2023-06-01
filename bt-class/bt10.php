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
    /**
     * $hddau,$tddau,$hdcuoi,$tdcuoi
     */
    public function tinhDoDai(object $vt1)
    {
        $x1 = ($vt1->hdcuoi) - ($vt1->hddau);
        $y1 = ($vt1->tdcuoi) - ($vt1->tddau);
        $v = sqrt($x1 * $x1 + $y1 * $y1);
        return $v;
    }
    public function checkCungPhuong(object $vt2)
    {
        $x1 = ($this->hdcuoi) - ($this->hddau);
        $y1 = ($this->tdcuoi) - ($this->tddau);
        $x2 = ($vt2->hdcuoi) - ($vt2->hddau);
        $y2 = ($vt2->tdcuoi) - ($vt2->tddau);
        var_dump($x1);
        var_dump($y1);
        var_dump($x2);
        var_dump($y2);

        if ($x1 / $x2 == $y1 / $y2) {
            return true;
        }
        return false;
    }

    public function checkBangNhau()
    {
        $vt2 = new Vecto();
        if ($this->checkCungPhuong($vt2) && $this->tinhDoDai($this) == $this->tinhDoDai($vt2)) {
            return true;
        }
        return false;
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

echo ($vt1->checkCungPhuong($vt2) ? 'Hai vecto có trùng phương' : 'Hai vecto không trùng phương');
echo $vt1->tinhDoDai($vt1);
echo $vt1->checkBangNhau();
