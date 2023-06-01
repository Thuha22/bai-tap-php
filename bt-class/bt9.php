<!--
    Xây dựng lớp số phức có các thành phần sau:
        + Các thuộc tính:
            - Phần thực
            - Phần ảo
        + Các hàm thành phần:
            - Cộng hai số phức
            - Trừ hai số phức
            - Nhân hai số phức
            - Chia hai số phức
    Nhập vào 2 số phức và thực hiện các phép toán trên hai số phức đó.
-->

<?php
class SoPhuc
{
    private $thuc;
    private $ao;
    public function getThuc()
    {
        return $this->thuc;
    }
    public function setThuc($thuc)
    {
        $this->thuc = $thuc;
    }
    public function getAo()
    {
        return $this->ao;
    }
    public function setAo($ao)
    {
        $this->ao = $ao;
    }

    public function add(object $so2): object
    {
        $kq = new SoPhuc();
        $kq->thuc = $this->thuc + $so2->thuc;
        $kq->ao = $this->ao + $so2->ao;
        return $kq;
    }
    public function sub(object $so2): object
    {
        $kq = new SoPhuc();
        $kq->thuc = $this->thuc - $so2->thuc;
        $kq->ao = $this->ao - $so2->ao;
        return $kq;
    }
    public function mul(object $so2): object
    {
        $kq = new SoPhuc();
        $kq->thuc = $this->thuc * $so2->thuc - $this->ao * $so2->ao;
        $kq->ao = $this->thuc * $so2->ao + $this->ao * $so2->thuc;
        return $kq;
    }
    public function div(object $so2): object
    {
        $kq = new SoPhuc();
        $t1 = $this->thuc;
        $a1 = $this->ao;
        $t2 = $so2->thuc;
        $a2 = $so2->ao;
        $kq->thuc = ($t1 * $t2 + $a1 * $a2) / ($t2 * $t2 + $a2 * $a2);
        $kq->ao = ($t2 * $a1 - $t1 * $a2) / ($t2 * $t2 + $a2 * $a2);
        return $kq;
    }
}

class Program
{
    // Hiển thị số phức 1
    public function show(object $so1)
    {
        echo $so1->getThuc();
        if ($so1->getAo() >= 0) {
            echo '+' . $so1->getAo() . 'i';
        } else {
            echo  $so1->getAo() . 'i';
        }
    }
    public function main()
    {
        $so1 = new SoPhuc();
        $so2 = new SoPhuc();

        //Nhập dữ liệu
        printf("Nhập dữ liệu số 1: \n");
        $so1->setThuc(readline("Nhập phần thực: "));
        $so1->setAo(readline("Nhập phần ảo: "));
        printf("Nhập dữ liệu số 2: \n");
        $so2->setThuc(readline("Nhập phần thực: "));
        $so2->setAo(readline("Nhập phần ảo: "));

        $tong = $so1->add($so2);
        $hieu = $so1->sub($so2);
        $tich = $so1->mul($so2);
        $thuong = $so1->div($so2);

        //Hiển thị
        printf("Số phức 1 là: ");
        $this->show($so1);
        printf("\nSố phức 2 là: ");
        $this->show($so2);
        printf("\nTổng 2 số: ");
        $this->show($tong);
        printf("\nHiệu 2 số: ");
        $this->show($hieu);
        printf("\nTích 2 số: ");
        $this->show($tich);
        printf("\nThương 2 số: ");
        $this->show($thuong);
    }
}

$data = new Program();
$data->main();
// expect:
// Nhập dữ liệu số 1:
// Nhập phần thực: 2
// Nhập phần ảo: 3
// Nhập dữ liệu số 2:
// Nhập phần thực: 3
// Nhập phần ảo: 4
// Số phức 1 là: 2+3i
// Số phức 2 là: 3+4i
// Tổng 2 số: 5+7i
// Hiệu 2 số: -1-1i
// Tích 2 số: -6+17i
// Thương 2 số: 0.72+0.04i
