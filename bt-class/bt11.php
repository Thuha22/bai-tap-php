<?php
//Xây dựng lớp đa thức (polylomial) và các phép toán trên đa thức. Thực hiện nhập vào 2 đa thức và tính tổng, tích của nó.

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

    public function mul(DaThuc $dt2): DaThuc
    {
        $kq = new DaThuc();
        $kq->bac = 0;
        $kq->heso = [];
        for ($i = 0; $i <= $this->bac; $i++) {
            $temp = new DaThuc();
            $temp->bac = $i + $dt2->bac;
            for ($j = 0; $j <= $dt2->bac; $j++) {
                $temp->heso[$i + $j] = $this->heso[$i] * $dt2->heso[$j];
            }
            $kq = $kq->add($temp);
        }
        return $kq;
    }
}

class Program
{
    public function show(DaThuc $dt1): string
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

        // Nhập dữ liệu
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
        print("Đa thức 1: ");
        echo $this->show($dt1) . "\n";
        print("Đa thức 2: ");
        echo $this->show($dt2) . "\n";
        print("Tổng 2 đa thức: ");
        echo $this->show($dt1->add($dt2)) . "\n";
        print("Tích 2 đa thức: ");
        echo $this->show($dt1->mul($dt2)) . "\n";
    }
}

$data = new Program;
$data->main();

/**
 * expect:
 *   ------------ NHẬP ĐA THỨC 1 ------------
 * Nhập bậc của đa thức: 1
 * Nhập các hệ số của đa thức:
 * a[0]=-3
 * a[1]=4
 *   ------------ NHẬP ĐA THỨC 2 ------------
 * Nhập bậc của đa thức: 2
 * Nhập các hệ số của đa thức:
 * a[0]=6
 * a[1]=-5
 * a[2]=2
 * Đa thức 1: -3 + 4*x
 * Đa thức 2: 6 - 5*x + 2*x^2
 * Tổng 2 đa thức: 3 - 1*x + 2*x^2
 * Tích 2 đa thức: -18 + 39*x - 26*x^2 + 8*x^3
 */
