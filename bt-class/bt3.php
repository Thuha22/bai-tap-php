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
        do {
            $this->code = readline("Mã số sinh viên:");
        } while (strlen($this->code) != 8);
        do {
            $this->score = readline("Điểm trung bình:");
        } while ($this->score < 0.0 || $this->score > 10.0);
        do {
            $this->age = readline("Tuổi:");
        } while ($this->age < 18);
        do {
            $this->class = readline("Lớp:");
        } while (($this->class)[0] != "A" && ($this->class)[0] != "C");
    }

    function showInfo()
    {
        echo "========================================\n";
        echo "Mã số sinh viên: " . $this->code . "\n";
        echo "Điểm trung bình: " . $this->score . "\n";
        echo "Tuổi: " . $this->age . "\n";
        echo "Lớp " . $this->class . "\n";
    }
    function hocBong()
    {
        $score = $this->score;
        if ($score >= 8.0) {
            return "Học bổng: Có";
        }
        return "Học bổng: Không";
    }
}

$data = new Student();
$data->inputInfo();
$data->showInfo();
echo $data->hocBong();
