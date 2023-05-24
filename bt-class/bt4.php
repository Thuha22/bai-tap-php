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
class V1Study
{
    var $khoaHoc;
    var $diem;
    var $viPham;
    var $lanThi;
    function inputInfo()
    {
        $this->khoaHoc = $_POST['khoahoc'];
        $this->diem = $_POST['diem'];
        $this->viPham = $_POST['vipham'];
        $this->lanThi = $_POST['lanthi'];
    }

    function showInfo()
    {
        echo "Học viên khóa học HDSE: " . ($this->khoaHoc ? 'Có' : 'Không') . "<br>";
        echo "Điểm tổng kết: " . $this->diem . "<br>";
        echo "Vi phạm: " . ($this->viPham ? 'Có' : 'Không') . "<br>";
        echo "Thi lần: " . $this->lanThi . "<br>";
        echo "Học bổng: " . ($this->hocBong() ? 'Có' : 'Không') . "<br>";
        echo "<hr>";
    }
    function hocBong()
    {
        $khoaHoc = $this->khoaHoc;
        $diem = $this->diem;
        $viPham = $this->viPham;
        $lanThi = $this->lanThi;
        if ($khoaHoc == "true" && $diem >= 75 && $viPham == "false" && $lanThi == 1) {
            return true;
        }
        return false;
    }
}
if (isset($_POST['khoahoc'])) {
    $data = new V1Study();
    $data->inputInfo();
    $data->showInfo();
    $data->hocBong();
}
?>

<section>
    <form method="post">
        <section>
            <label> Học viên khóa học HDSE: </label>
            <input type="radio" name="khoahoc" value="true">Có
            <input type="radio" name="khoahoc" value="false">Không
        </section>
        <section><label> Điểm tổng kết(%): </label><input type="number" name="diem" max=100 min=0></section>
        <section>
            <label> Vi phạm: </label>
            <input type="radio" name="vipham" value="true">Có
            <input type="radio" name="vipham" value="false">Không
        </section>
        <section><label> Thi lần: </label><input type="number" name="lanthi" min=1></section>
        <input type="submit" value="Submit">
    </form>
</section>