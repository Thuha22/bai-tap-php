<?php

/**
 * Mô phỏng sự hoạt dộng của một chiếc đèn pin. Với hai nhóm đối tượng cơ bản là Đèn (FlashLamp) và Pin (Battery). Đối tượng pin mang trong mình thông tin về trạng thái năng lượng, đối tượng đèn sữ sử dụng một đối tượng pin để cung cấp năng lượng cho hoạt động chiếu sáng.
 * Mô tả chi tiết lớp các đối tượng pin và đèn như sau:
 * Đối tượng Đèn (FlashLamp):
 * - status: thuộc tính thể hiện trạng thái của đèn (bật hay tắt)
 * - battery: thuộc tính thể hiện pin của đèn
 * + FlashLamp(): hàm tạo
 * + setBattery(Battery): lắp pin cho đèn
 * + getBatteryInfo(): lấy thông tin pin của đèn
 * + turnOn(): bật đèn
 * + turnOff(): tắt đèn
 * Đối tượng Pin (Battery):
 * - energy: thuộc tính thể hiện năng lượng của pin
 * + Battery(): hàm tạo
 * + setEnergy(): phương thức sạc pin
 * + getEnergy(): phương thức lấy năng lượng pin
 * + decreaseEnergy(): phương thức tiêu hao năng lượng pin
 * 1. Xây dựng lớp Pin (Battery) với các thuộc tính và các phương thức đã cho như trong sơ đồ trên. Trong đó:
 * - Thuộc tính energy: thể hiện năng lượng của Pin.
 * - Hàm tạo Battery(): khởi tạo mặc định giá trị năng lượng Pin (energy) là 10
 * - Các phương thức:
 * + setEnergy(energy): Thiết đặt lại giá trị mới cho pin (thực hiện việc sạc pin)
 * + getEnergy(): Trả về thông tin năng lượng pin đang có
 * + decreaseEnergy(): mỗi lần Pin được sử dụng, năng lượng của Pin sẽ giảm đi 2 đơn vị.
 * 2. Xây dựng lớp FlashLamp với các thuộc tính và phương thức như trong sơ đồ trên. Trong đó:
 * - Các thuộc tính:
 * + status: trạng thái của đèn, nếu status = true tức đèn được bật, ngược lại đèn tắt.
 * + battery: đối tượng của Battery() là pin của đèn
 * - Hàm tạo:
 * FlashLamp(): khởi tạo trạng thái đèn tắt và chưa có pin.
 * - Các phương thức:
 * + setBattery(b): nạp pin cho đèn, với b là đối tượng của lớp Battery()
 * + getBatteryInfo(): lấy về năng lượng Pin của đèn
 * + turnOn(): Chuyển trạng thái đèn là true. In ra thông tin đèn có sáng hay không (năng lượng > 0 là sáng)
 * + turnOff(): Chuyển trạng thái đèn là false. In ra thông tin: Đèn tắt.
 * 3. Xây dựng lớp TestFlashLamp chứa phương thức main() với kịch bản như sau:
 * - Tạo một đối tượng Battery
 * - Tạo một đối tượng FlashLamp
 * - Lắp pin cho đèn
 * - Bật và tắt đèn pin 10 lần
 * - Hiển thị ra màn hình mức năng lượng còn lại trong pin.
 */
class Battery
{
    private $energy;
    public function __construct($energy)
    {
        $this->energy = $energy;
    }
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function decreaseEnergy()
    {
        $this->energy = $this->energy - 2;
    }
}

class FlashLamp
{
    private $status;
    private $battery;
    public function __construct()
    {
        $this->status = false;
        $this->battery = null;
    }
    public function setBattery($battery)
    {
        $this->battery = $battery;
    }
    public function getBatteryInfo()
    {
        return $this->battery->getEnergy();
    }
    public function turnOn()
    {
        if ($this->battery->getEnergy() > 0) {
            $this->status = true;
            $this->battery->decreaseEnergy();
            echo "Đèn sáng \n";
        } else {
            echo "Hết pin \n";
        }
    }
    public function turnOff()
    {
        $this->status = false;
        echo "Đèn tắt \n";
    }
}

class TestFlashLamp
{
    public function main()
    {
        $battery = new Battery(10);
        $flashlamp = new FlashLamp();
        $flashlamp->setBattery($battery);
        for ($i = 1; $i <= 5; $i++) {
            $flashlamp->turnOn();
            $flashlamp->turnOff();
        }
        echo "Năng lượng còn lại trong pin: " . $flashlamp->getBatteryInfo();
    }
}

$data = new TestFlashLamp();
$data->main();

// expect:
// Đèn sáng
// Đèn tắt
// Đèn sáng
// Đèn tắt
// Đèn sáng
// Đèn tắt
// Đèn sáng
// Đèn tắt
// Đèn sáng
// Đèn tắt
// Năng lượng còn lại trong pin: 0
