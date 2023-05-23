<!--
    Tạo class có tên SoHoc gồm có các thuộc tính và phương thức sau:
    + Thuộc tính: number1, number2
    + Phương thức:
    - Phương thức tạo __construct()
    - Các phương thức get, set cho tất cả các thuộc tính
    - inputInfo(): dùng để nhập 2 số number1, number2
    - printInfo(): dùng để hiển thị number1, number2
    - addition(): dùng để cộng number1, number2
    - subtract(): trừ number1, number2
    - multi(): dùng để nhân number1, number2
    - division(): dùng để chia number1, number2.
-->

<?php
class SoHoc
{
    var $number1;
    var $number2;
    function inputInfo()
    {
        $this->number1 = $_POST['number1'];
        $this->number2 = $_POST['number2'];
    }

    function printInfo()
    {
        echo "Số thứ nhất: " . $this->number1 . "<br>";
        echo "Số thứ 2: " . $this->number2 . "<br>";
        echo "Tổng: " . $this->addition() . "<br>";
        echo "Hiệu: " . $this->subtract() . "<br>";
        echo "Tích: " . $this->multi() . "<br>";
        echo "Thương: " . $this->division() . "<br>";
        echo "<hr>";
    }
    function addition()
    {
        return $this->number1 + $this->number2;
    }
    function subtract()
    {
        return $this->number1 - $this->number2;
    }
    function multi()
    {
        return $this->number1 * $this->number2;
    }
    function division()
    {
        return $this->number1 / $this->number2;
    }
}
if (isset($_POST['number1']) && isset($_POST['number1'])) {
    $data = new SoHoc();
    $data->inputInfo();
    $data->printInfo();
}

?>

<section>
    <form method="post">
        <section><label> Number 1: </label><input type="number" name="number1"></section>
        <section><label> Number 2: </label><input type="number" name="number2"></section>
        <input type="submit" value="Submit">
    </form>
</section>