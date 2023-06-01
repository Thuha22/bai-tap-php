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

use Program as GlobalProgram;

class Student
{
    private $code;
    private $score;
    private $age;
    private $class;

    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        $this->code = $code;
    }
    public function getScore()
    {
        return $this->score;
    }
    public function setScore($score)
    {
        $this->score = $score;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function setClass($class)
    {
        $this->class = $class;
    }

    // Check điều kiện học sinh đạt học bổng 
    function hocBong(): bool
    {
        $score = $this->score;
        if ($score >= 8.0) {
            return True;
        }
        return false;
    }
}

class Program
{
    function main()
    {
        // check điểu kiện thông tin nhập vào
        $data = new Student();
        do {
            $data->setCode(readline("Mã số sinh viên:"));
        } while (strlen($data->getCode()) != 8);
        do {
            $data->setScore(readline("Điểm trung bình:"));
        } while ($data->getScore() < 0.0 || $data->getScore() > 10.0);
        do {
            $data->setAge(readline("Tuổi:"));
        } while ($data->getAge() < 18);
        do {
            $data->setClass(readline("Lớp:"));
        } while (($data->getClass())[0] != "A" && ($data->getClass())[0] != "C");

        //Hiển thị thông tin
        echo "========================================\n";
        echo "Mã số sinh viên: " . $data->getCode() . "\n";
        echo "Điểm trung bình: " . $data->getScore() . "\n";
        echo "Tuổi: " . $data->getAge() . "\n";
        echo "Lớp " . $data->getClass() . "\n";
        echo "Học bổng:" . ($data->hocBong() ? 'Có' : 'Không');
    }
}

$obj = new Program;
$obj->main();
