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
    public function getKhoa()
    {
        return $this->khoaHoc;
    }
    public function setKhoa($khoaHoc)
    {
        $this->khoaHoc = $khoaHoc;
    }
    public function getDiem()
    {
        return $this->diem;
    }
    public function setDiem($diem)
    {
        $this->diem = $diem;
    }
    public function getViPham()
    {
        return $this->viPham;
    }
    public function setViPham($viPham)
    {
        $this->viPham = $viPham;
    }
    public function getLanThi()
    {
        return $this->lanThi;
    }
    public function setLanThi($lanThi)
    {
        $this->lanThi = $lanThi;
    }

    function hocBong(): bool
    {
        $khoaHoc = $this->khoaHoc;
        $diem = $this->diem;
        $viPham = $this->viPham;
        $lanThi = $this->lanThi;
        if ($khoaHoc == "HDSE" && $diem >= 75 && $viPham == "KHONG" && $lanThi == 1) {
            return true;
        }
        return false;
    }
}

$data = new HocVien();

//Nhập dữ liệu
$data->setKhoa(strtoupper(readline("Học viên khóa học:")));
$data->setDiem(readline("Điểm tổng kết:"));
$data->setViPham(strtoupper(readline("Vi phạm:")));
$data->setLanThi(readline("Thi lần:"));

//Hiển thị
echo "========================================\n";
echo "Học viên khóa học: " . $data->getKhoa() . "\n";
echo "Điểm tổng kết: " . $data->getDiem() . "\n";
echo "Vi phạm: " . $data->getViPham() . "\n";
echo "Thi lần: " . $data->getLanThi() . "\n";
echo $data->hocBong() ? "Được học bổng" : "Không được học bổng";
?>