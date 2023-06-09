<?php
//Xây dựng lớp đa thức (polylomial) và các phép toán trên đa thức. Thực hiện nhập vào 2 đa thức và tính tổng, tích của nó.

use Program as GlobalProgram;

class DaThuc
{
    private $bac;
    private $heso;


    public function getBac()
    {
        return $this->bac;
    }
    public function setBac($bac)
    {
        $this->bac = $bac;
    }
    public function getHeSo()
    {
        return $this->heso;
    }
    public function setHeSo($heso)
    {
        $this->heso = $heso;
    }

    public function add(DaThuc $dt2): DaThuc
    {
        $kq = new DaThuc();
        $max = $this->bac > $dt2->bac ? $this->bac : $dt2->bac;
        $min = $this->bac < $dt2->bac ? $this->bac : $dt2->bac;
        $kq->bac = $max;
        for ($i = 0; $i <= $min; $i++) {
            $kq->heso[$i] = $this->heso[$i] + $dt2->heso[$i];
        }
        if ($max == $this->bac) {
            for ($i = $min + 1; $i <= $max; $i++) {
                $kq->heso[$i] = $this->heso[$i];
            }
        } else {
            for ($i = $min + 1; $i <= $max; $i++) {
                $kq->heso[$i] = $dt2->heso[$i];
            }
        }
        return $kq;
    }

    public function mul($dt2)
    {
        $kq = new DaThuc();
        $kq->bac = 0;
        $kq->heso = [];
        var_dump($kq);
        for ($i = 0; $i <= $this->bac; $i++) {
            $temp = new DaThuc();
            $temp->$i + $dt2->bac;
            for ($j = 0; $j <= $dt2->bac; $j++) {
                $temp->heso[$i + $j] = $this->heso[$i] * $dt2->heso[$j];
            }
            var_dump($temp);
            $kq = $kq->add($temp);
            var_dump($kq);
        }
        return $kq;
    }
}

class Program
{
    public function show(DaThuc $dt1)
    {
        $str = $dt1->getHeSo()[0];
        if ($dt1->getHeSo()[1] < 0) {
            $str = $str . " - " . $dt1->getHeSo()[1] * -1 . "*x";
        } else {
            $str = $str . " + " . $dt1->getHeSo()[1] . "*x";
        }
        for ($i = 2; $i <= $dt1->getBac(); $i++) {
            if ($dt1->getHeSo()[$i] < 0) {
                $str = $str . " - " . $dt1->getHeSo()[$i] * -1 . "*x^" . $i;
            } else {
                $str = $str . " + " . $dt1->getHeSo()[$i] . "*x^" . $i;
            }
        }

        return $str;
    }

    public function main()
    {
        $dt1 = new DaThuc;
        $dt2 = new DaThuc;

        printf("\t------------ NHẬP ĐA THỨC 1 ------------\t\n");
        $dt1->setBac(readline("Nhập bậc của đa thức: "));
        print("Nhập các hệ số của đa thức: \n");
        for ($i = 0; $i <= $dt1->getBac(); $i++) {
            $a[$i] = readline("a[$i]=");
        }
        $dt1->setHeSo($a);

        printf("\t------------ NHẬP ĐA THỨC 2 ------------\t\n");
        $dt2->setBac(readline("Nhập bậc của đa thức: "));
        print("Nhập các hệ số của đa thức: \n");
        for ($i = 0; $i <= $dt2->getBac(); $i++) {
            $a[$i] = readline("a[$i]=");
        }
        $dt2->setHeSo($a);

        //Hiển thị
        print("Đa thức 1: \n");
        echo $this->show($dt1) . "\n";
        print("Đa thức 2: \n");
        echo $this->show($dt2) . "\n";
        print("Tổng 2 đa thức: \n");
        echo $this->show($dt1->add($dt2)) . "\n";

        echo $this->show($dt1->mul($dt2)) . "\n";
    }
}

$data = new Program;
$data->main();
