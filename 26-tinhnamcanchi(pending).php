<?php
class Year
{
    public $can = array("Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ",);
    public $chi = array("Thân", "Dậu", "Tuất", "Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tị", "Ngọ", "Mùi");
    public function tinhNamAmLich($n)
    {
        $can = $this->can;
        $chi = $this->chi;
        $lastdigit = substr($n, -1);
        $du = $n % 12;
        $result = $can[$lastdigit] . ' ' . $chi[$du];
        return $result;
    }


    public function tinhMenhSinh($n)
    {
        $lastdigit = $this->lastdigit;
        switch ($lastdigit) {
            case 0:
                $giatrican = 1;
        }
        return $result;
    }
}

$test = new Year;
// echo $test->tinhMenhSinh(2019);
echo $test->tinhNamAmLich(2019);
