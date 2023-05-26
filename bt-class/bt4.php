<!--
    Học viện V1Study thực hiện trao học bổng cho các học viên xuất sắc và đáp ứng đủ các yêu cầu sau:
    a. Là học viên đăng ký khóa học HDSE
    b. Có điểm tổng kết >= 75%
    c. Không vi phạm nội quy của trung tâm
    d. Các kì thi chỉ thi lần đầu tiên
    Các dữ liệu a b c d của 1 học viên được nhập từ bàn phím.
    Viết chương trình xem học viên đó có được học bổng không.
-->
<?php
class HocVien
{
    var $khoaHoc;
    var $diem;
    var $viPham;
    var $lanThi;
    function inputInfo()
    {
        $this->khoaHoc =  strtoupper(readline("Học viên khóa học:"));
        $this->diem = readline("Điểm tổng kết:");
        $this->viPham =  strtoupper(readline("Vi phạm:"));
        $this->lanThi = readline("Thi lần:");
    }

    function showInfo()
    {
        echo "========================================\n";
        echo "Học viên khóa học: " . $this->khoaHoc . "\n";
        echo "Điểm tổng kết: " . $this->diem . "\n";
        echo "Vi phạm: " . $this->viPham  . "\n";
        echo "Thi lần: " . $this->lanThi . "\n";
    }
    function hocBong()
    {
        $khoaHoc = $this->khoaHoc;
        $diem = $this->diem;
        $viPham = $this->viPham;
        $lanThi = $this->lanThi;
        if ($khoaHoc == "HDSE" && $diem >= 75 && $viPham == "KHONG" && $lanThi == 1) {
            return "Được học bổng";
        }
        return "Không được học bổng";
    }
}

$data = new HocVien();
$data->inputInfo();
$data->showInfo();
echo $data->hocBong();
?>