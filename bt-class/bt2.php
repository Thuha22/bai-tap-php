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
    private $name;
    private $age;
    private $adress;
    private $salary;
    private $hours;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAdress()
    {
        return $this->adress;
    }
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getHours()
    {
        return $this->hours;
    }
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    function bonus(): int
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
        return $bonus;
    }
}

$data = new NhanVien();
$data->setName(readline("Tên: "));
$data->setAge(readline("Tuổi: "));
$data->setAdress(readline("Địa chỉ: "));
$data->setSalary(readline("Tiền lương: "));
$data->setHours(readline("Tổng số giờ làm: "));

echo "========================================\n";
echo "Tên: " . $data->getName() . "\n";
echo "Tuổi: " . $data->getAge() . "\n";
echo "Địa chỉ: " . $data->getAdress() . "\n";
echo "Tiền lương: " . number_format($data->getSalary(), '0', '', '.') . "\n";
echo "Tổng số giờ làm: " . $data->getHours() . "\n";
echo "Tiền thưởng: " . number_format($data->bonus(), '0', '', '.');

// expect:
// Tên: ha
// Tuổi: 23
// Địa chỉ: ha noi
// Tiền lương: 15000000
// Tổng số giờ làm: 140
// ========================================
// Tên: ha
// Tuổi: 23
// Địa chỉ: ha noi
// Tiền lương: 15.000.000
// Tổng số giờ làm: 140
// Tiền thưởng: 1.500.000
