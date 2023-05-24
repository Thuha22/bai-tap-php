<!--
Tạo lớp Student, lưu trữ các thông tin một sinh viên:
- Mã sinh viên: chứa 8 kí tự
- Điểm trung bình: từ 0.0 – 10.0
- Tuổi: Phải lớn hơn hoặc bằng 18
- Lớp: Phải bắt đầu bởi kí tự ‘A’ hoặc kí tự ‘C’
a. Phương thức tạo
b. Phương thức inputInfo(), nhập thông tin Student từ bàn phím
c. Phương thức showInfo(), hiển thị tất cả thông tin Student
d. Viết phương thức xét xem Student có được học bổng không? Điểm trung bình trên 8.0 là được học bổng
-->
<?php
class Student
{
    var $code;
    var $score;
    var $age;
    var $class;
    function inputInfo()
    {
        $this->code = $_POST['code'];
        $this->score = $_POST['score'];
        $this->age = $_POST['age'];
        $this->class = $_POST['class'];
    }

    function showInfo()
    {
        echo "Mã số sinh viên: " . $this->code . "<br>";
        echo "Điểm trung bình: " . $this->score . "<br>";
        echo "Tuổi: " . $this->age . "<br>";
        echo "Lớp " . $this->class . "<br>";
        echo "Học bổng: " . ($this->hocBong() ? 'Có' : 'Không') . "<br>";
        echo "<hr>";
    }
    function hocBong()
    {
        $score = $this->score;
        if ($score >= 8.0) {
            return true;
        }
        return false;
    }
}
if (isset($_POST['code'])) {
    $data = new Student();
    $data->inputInfo();
    $data->showInfo();
    $data->hocBong();
}
?>

<section>
    <form method="post">
        <section><label> Mã số sinh viên: </label><input type="text" name="code" maxlength="8" minlength="8"></section>
        <section><label> Điểm trung bình: </label><input type="number" step="0.1" name="score" max=10.0 min=0.0></section>
        <section><label> Tuổi : </label><input type="number" name="age" min="18"></section>
        <section><label> Lớp: </label><input type="text" name="class" pattern="[\+A|C]\d{1,10}"></section>
        <input type="submit" value="Submit">
    </form>
</section>