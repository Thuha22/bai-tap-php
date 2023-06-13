<?php

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

class FlashLamp extends Battery
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
        return $this->battery;
    }
    public function turnOn()
    {
        $this->status = true;
        $this->decreaseEnergy();
    }
    public function turnOff()
    {
        $this->status = false;
    }
}

class TestFlashLamp
{
    public function main()
    {
        $battery = new Battery(10);
        $flashlamp = new FlashLamp();
        $flashlamp->turnOn();
        echo $battery->getEnergy();
    }
}

$data = new TestFlashLamp();
$data->main();
