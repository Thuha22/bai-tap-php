<?php
// Xây dựng lớp ma trận và các phép toán trên ma trận. Thực hiện nhập vào 2 ma trận và tính tổng, tích của nó.

class MaTran
{
    private $hang;
    private $cot;
    private $heso;

    public function getHang()
    {
        return $this->hang;
    }
    public function setHang($hang)
    {
        $this->hang = $hang;
    }
    public function getCot()
    {
        return $this->cot;
    }
    public function setCot($cot)
    {
        $this->cot = $cot;
    }
    public function getHeSo()
    {
        return $this->heso;
    }
    public function setHeSo($heso)
    {
        $this->heso = $heso;
    }

    // Cộng 2 ma trận
    public function add(MaTran $mt2): MaTran
    {
        $kq = new MaTran();
        if ($this->hang == $mt2->hang && $this->cot == $mt2->cot) {
            $kq->hang = $this->hang;
            $kq->cot = $this->cot;
            for ($i = 0; $i < $kq->hang; $i++) {
                for ($j = 0; $j < $kq->cot; $j++) {
                    $kq->heso[$i][$j] = $this->heso[$i][$j] + $mt2->heso[$i][$j];
                }
            }
        }
        return $kq;
    }

    // Nhân 2 ma trận
    public function mul(MaTran $mt2): MaTran
    {
        $kq = new MaTran();
        if ($this->cot == $mt2->hang) {
            $kq->hang = $this->hang;
            $kq->cot = $mt2->cot;
            for ($i = 0; $i < $this->hang; $i++) {
                for ($j = 0; $j < $mt2->cot; $j++) {
                    $kq->heso[$i][$j] = 0;
                    for ($k = 0; $k < $this->cot; $k++) {
                        $kq->heso[$i][$j] += $this->heso[$i][$k] * $mt2->heso[$k][$j];
                    }
                }
            }
        }
        return $kq;
    }
}

class Program
{
    function output(MaTran $mt1)
    {
        for ($i = 0; $i < $mt1->getHang(); $i++) {
            for ($j = 0; $j < $mt1->getCot(); $j++) {
                echo $mt1->getHeSo()[$i][$j] . "\t";
            }
            echo "\n";
        }
    }

    public function main()
    {
        $mt1 = new MaTran;
        $mt2 = new MaTran;

        // Nhập dữ liệu
        printf("\t------------ NHẬP DỮ LIỆU MA TRẬN 1 ------------\t\n");
        $mt1->setHang(readline("Nhập số hàng: "));
        $mt1->setCot(readline("Nhập số cột: "));
        print("Nhập các hệ số của đa thức: \n");
        for ($i = 0; $i < $mt1->getHang(); $i++) {
            for ($j = 0; $j < $mt1->getCot(); $j++) {
                $a[$i][$j] = readline("a[$i][$j]=");
            }
        }
        $mt1->setHeSo($a);

        printf("\t------------ NHẬP DỮ LIỆU MA TRẬN 2 ------------\t\n");
        $mt2->setHang(readline("Nhập số hàng: "));
        $mt2->setCot(readline("Nhập số cột: "));
        print("Nhập các hệ số của đa thức: \n");
        for ($i = 0; $i < $mt2->getHang(); $i++) {
            for ($j = 0; $j < $mt2->getCot(); $j++) {
                $a[$i][$j] = readline("a[$i][$j]=");
            }
        }
        $mt2->setHeSo($a);

        // Hiển thị
        print("Ma trận 1: \n");
        echo $this->output($mt1);
        print("Ma trận 2: \n");
        echo $this->output($mt2);


        if (($mt1->add($mt2))->getHeSo() != Null) {
            print("Tổng 2 đa thức: \n");
            echo $this->output($mt1->add($mt2)) . "\n";
        } else {
            echo  "Không thể thực hiện cộng 2 ma trận vì số hàng và số cột 2 ma trận không bằng nhau \n";
        }

        if (($mt1->add($mt2))->getHeSo() != Null) {
            print("Tích 2 đa thức: \n");
            echo $this->output($mt1->mul($mt2)) . "\n";
        } else {
            echo  "Không thể thực hiện nhân 2 ma trận vì số hàng ở ma trận 1 không bằng số cột ở ma trận 2";
        }
    }
}

$data = new Program;
$data->main();

//expect:
// ------------ NHẬP DỮ LIỆU MA TRẬN 1 ------------
// Nhập số hàng: 2
// Nhập số cột: 2
// Nhập các hệ số của đa thức:
// a[0][0]=1
// a[0][1]=2
// a[1][0]=3
// a[1][1]=4
//         ------------ NHẬP DỮ LIỆU MA TRẬN 2 ------------
// Nhập số hàng: 2
// Nhập số cột: 2
// Nhập các hệ số của đa thức:
// a[0][0]=3
// a[0][1]=4
// a[1][0]=2
// a[1][1]=1
// Ma trận 1:
// 1       2
// 3       4
// Ma trận 2:
// 3       4
// 2       1
// Tổng 2 đa thức:
// 4       6
// 5       5

// Tích 2 đa thức:
// 7       6
// 17      16
