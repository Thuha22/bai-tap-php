<?php

/**
 * Câu hỏi 1:
 * Một lớp gọi là MyPoint, thể hiện một mô hình điểm hai chiều (2D) gồm hai tọa độ x và y, được thiết kế theo dạng sơ đồ lớp. Lớp MyPoint bao gồm:
 * - Hai thuộc tính x và y.
 * - Hàm tạo dùng để khởi tạo một điểm có tọa độ (0,0).
 * - Các phương thức getter và setter cho các biến thể hiện x và y.
 * - Một phương thức setXY() để set giá trị cho cả x và y.
 * - Phương thức toString() trả về mộ mô tả chuỗi theo định dạng "(x, y)".
 * - Một phương thức gọi là distance(x, y) trả về khoảng cách từ điểm này tới điểm khác tại các tọa độ (x, y) đã cho.
 * - Một phương thức tải chồng distance(point1) trả về khoảng cách từ điểm hiện thời tới điểm point1, với point1 là đối tượng của lớp MyPoint.
 * Yêu cầu dành cho bạn: Viết mã lệnh xây dựng lớp MyPoint ở trên. Rồi viết một lớp có tên TestMyPoint để kiểm thử chương trình của bạn.
 */

/**
 * Câu hỏi 2:
 * Một lớp gọi là MyCircle, nó miêu tả một hình tròn có tâm là (x,y) và một bán kính. Lớp MyCircle sử dụng một thể hiện của lớp MyPoint (đã tạo ở câu 1) làm tâm của nó. Lớp MyCircle bao gồm:
 * - Hai thuộc tính: tâm (một thể hiện của MyPoint) và bán kính.
 * - Một hàm tạo.
 * - Các phương thức getter và setter.
 * - Phương thức toString() trả về một chuỗi mô tả hình tròn hiện thời theo dạng "Hình tròn @ (x,y) bán kính=r".
 * - Phương thức getArea() trả về diện tích của hình tròn.
 * Bạn hãy xây dựng lớp MyCircle. Ngoài ra, bạn viết lớp TestMyCircle để kiểm thử chương trình của bạn.
 */

// Câu hỏi 1:
class MyPoint
{
    protected $x;
    protected $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString()
    {
        return "($this->x,$this->y)";
    }
    function distance(int $x, int $y): float
    {
        $xKq = $this->x - $x;
        $yKq = $this->y - $y;
        $kq = sqrt($xKq * $xKq + $yKq * $yKq);
        return $kq;
    }

    function distance2(MyPoint $point): float
    {
        $xKq = $this->x - $point->x;
        $yKq = $this->y - $point->y;
        $kq = sqrt($xKq * $xKq + $yKq * $yKq);
        return $kq;
    }
}

class TestMyPoint
{
    public function main()
    {
        $p1 = new MyPoint(1, 2);
        $p2 = new MyPoint(3, 4);
        echo $p1->distance(5, 6) . "\n";
        echo $p1->distance2($p2) . "\n";
    }
}

$data = new TestMyPoint;
$data->main();
// expect:
// 5.6568542494924
// 2.8284271247462

//Câu hỏi 2:
class MyCircle extends MyPoint
{
    private $bankinh;
    public function __construct($x, $y, $bankinh)
    {
        $this->x = $x;
        $this->y = $y;
        $this->bankinh = $bankinh;
    }
    public function setBanKinh($bankinh)
    {
        $this->bankinh = $bankinh;
    }
    public function getBanKinh()
    {
        return $this->bankinh;
    }
    public function __toString()
    {
        return "Hình tròn o($this->x,$this->y) bán kính = $this->bankinh";
    }
    public function getArea(): float
    {
        $s = pi() * $this->bankinh * $this->bankinh;
        return $s;
    }
}


class TestMyCircle
{
    public function main()
    {
        $ht = new MyCircle(1, 2, 3);
        echo $ht->__toString() . "\n";
        echo "Diện tích: " . $ht->getArea();
    }
}
$data2 = new TestMyCircle();
$data2->main();
// expect: 
// Hình tròn o(1,2) bán kính = 3
// Diện tích:28.274333882308
