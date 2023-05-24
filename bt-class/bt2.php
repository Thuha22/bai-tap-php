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
        $this->name = $_POST['name'];
        $this->age = $_POST['age'];
        $this->adress = $_POST['adress'];
        $this->salary = $_POST['salary'];
        $this->hours = $_POST['hours'];
    }

    function printInfo()
    {
        echo "Tên: " . $this->name . "<br>";
        echo "Tuổi: " . $this->age . "<br>";
        echo "Địa chỉ: " . $this->adress . "<br>";
        echo "Tiền lương: " . number_format($this->salary, '0', '', '.') . "<br>";
        echo "Tổng số giờ làm: " . $this->hours . "<br>";
        echo "Tiền thưởng: " . number_format($this->bonus(), '0', '', '.') . "<br>";
        echo "<hr>";
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
        return $bonus;
    }
}
if (isset($_POST['name']) && isset($_POST['age'])) {
    $data = new NhanVien();
    $data->inputInfo();
    $data->printInfo();
    $data->bonus();
}

?>

<section>
    <form method="post">
        <section><label> Tên: </label><input type="text" name="name"></section>
        <section><label> Tuổi : </label><input type="number" name="age"></section>
        <section><label> Địa chỉ: </label><input type="text" name="adress"></section>
        <section><label> Tiền lương: </label><input type="number" name="salary"></section>
        <section><label> Tổng số giờ làm: </label><input type="number" name="hours"></section>
        <input type="submit" value="Submit">
    </form>
</section>