<?php
//Xây dựng lớp điểm, lớp elip thừa kế từ lớp điểm, lớp đường tròn thừa kế từ lớp elip. Nhập vào các thuộc tính cần thiết của elip và tính diện tích.
class Diem
{
    protected $tungdo;
    protected $hoanhdo;
    public function nhapDiem()
    {
        $this->tungdo = readline("Nhập tung độ: ");
        $this->hoanhdo = readline("Nhập hoanh độ: ");
    }
    public function xuatDiem()
    {
        echo "O($this->hoanhdo;$this->tungdo)";
    }

    public function getTungDo()
    {
        return $this->tungdo;
    }
    public function setTungDo($tungdo)
    {
        $this->tungdo = $tungdo;
    }
    public function getHoanhDo()
    {
        return $this->hoanhdo;
    }
    public function setHoanhDo($hoanhdo)
    {
        $this->hoanhdo = $hoanhdo;
    }
}
class Elip extends Diem
{
    protected $r1;
    protected $r2;
    public function nhapTruc()
    {
        $this->r1 = readline("Nhập độ dài trục lớn: ");
        $this->r2 = readline("Nhập độ dài trục nhỏ: ");
    }
    public function tinhDT()
    {
        $s = pi() * ($this->r1 / 2) * ($this->r2 / 2);
        return $s;
    }
}

class DTron extends Elip
{
    public function nhapTruc()
    {
        $this->r1 = readline("Nhập đường kính: ");
        $this->r2 = $this->r1;
    }
}

echo "\t ---- Hình elip---- \n ";
$obj = new Elip;
$obj->nhapDiem();
$obj->nhapTruc();
echo "Elip tâm ";
echo $obj->xuatDiem() . " có diện tích: " . $obj->tinhDT() . "\n";

echo "\t ---- Đường tròn---- \n ";
$obj2 = new DTron;
$obj2->nhapDiem();
$obj2->nhapTruc();
echo "Đường tròn tâm ";
echo $obj2->xuatDiem() . " có diện tích: " . $obj2->tinhDT();


// ---- Hình elip----
// Nhập tung độ: 1
// Nhập hoanh độ: 2
// Nhập độ dài trục lớn: 4
// Nhập độ dài trục nhỏ: 6
// Elip tâm O(2;1) có diện tích: 18.849555921539
//         ---- Đường tròn----
// Nhập tung độ: 2
// Nhập hoanh độ: 3
// Nhập đường kính: 4
// Đường tròn tâm O(3;2) có diện tích: 12.566370614359