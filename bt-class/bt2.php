<!--
    Viết class NhanVien gồm các thuộc tính: Tên, Tuổi, Địa chỉ, Tiền lương, tổng số giờ làm
    Và các phương thức:
    - Phương thức tạo 
    - inputInfo() : Nhập các thông tin cho nhân viên từ bàn phím
    - printInfo() : In ra tất cả các thông tin của nhân viên
    - tinhThuong(): Tính toán và trả về số tiền thưởng của nhân viên theo công thức sau:
    Nếu tổng số giờ làm của nhân viên >=200 thì thưởng = lương * 20%
    Nếu tổng số giờ làm của nhân viên <200 và >=100 thì thưởng = lương * 10%
    Nếu tổng số giờ làm của nhân viên <100 thì thưởng = 0
-->

<?php
class NhanVien
{
    var $name;
    var $age;
    var $adress;
    var $salary;
    var $hours;
    function inputInfo()
    {
        $this->name = readline("Tên: ");
        $this->age = readline("Tuổi: ");
        $this->adress = readline("Địa chỉ: ");
        $this->salary = readline("Tiền lương: ");
        $this->hours = readline("Tổng số giờ làm: ");
    }

    function printInfo()
    {
        echo "========================================\n";
        echo "Tên: " . $this->name . "\n";
        echo "Tuổi: " . $this->age . "\n";
        echo "Địa chỉ: " . $this->adress . "\n";
        echo "Tiền lương: " . number_format($this->salary, '0', '', '.') . "\n";
        echo "Tổng số giờ làm: " . $this->hours . "\n";
    }
    function bonus()
    {
        $hours = $this->hours;
        $salary = $this->salary;
        if ($hours >= 200) {
            $bonus = $salary * 0.2;
        } elseif ($hours < 200 && $hours >= 100) {
            $bonus = $salary * 0.1;
        } else {
            $bonus = 0;
        }
        return "Tiền thưởng: " . number_format($bonus, '0', '', '.');
    }
}

$data = new NhanVien();
$data->inputInfo();
$data->printInfo();
echo $data->bonus();
