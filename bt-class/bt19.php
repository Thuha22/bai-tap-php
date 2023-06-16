<?php

class BankAcount
{
    private $accountNumber;
    private $accountName;
    private $balance;
    public function bankAccount($accountName, $accountNumber)
    {
        $this->accountName = $accountName;
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }
    public function getAccountName()
    {
        return $this->accountName;
    }
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($money)
    {
        $this->balance = $this->balance + $money;
    }
    public function withdraw($money)
    {
        if ($money <= $this->balance) {
            $this->balance = $this->balance - $money;
            return true;
        }
        return false;
    }
}
class Bank
{
    private $listBankAccount;
    public function search($accountNumber)
    {
        $listacc = $this->listBankAccount;
        if ($listacc != null) {
            for ($i = 0; $i < count($listacc); $i++) {
                if ($listacc[$i][1] == $accountNumber) {
                    return $i;
                }
            }
        }
        return -1;
    }

    public function getTotal()
    {
        if ($this->listBankAccount != null) {
            return count($this->listBankAccount);
        } else {
            return 0;
        }
    }

    public function getItem($accountNumber)
    {
        $listacc = $this->listBankAccount;
        for ($i = 0; $i < count($listacc); $i++) {
            if ($listacc[$i][1] == $accountNumber) {
                return $listacc[$i];
            }
        }
        return null;
    }

    public function addAccount($accountName, $accountNumber, &$a)
    {
        $tk = new BankAcount;
        $tk->bankAccount($accountName, $accountNumber);

        $i = count($a);
        $a[$i][0] = $tk->getAccountName();
        if ($this->search($accountNumber) >= 0) {
            return false;
        } else {
            $a[$i][1] = $tk->getAccountNumber();
        }
        $a[$i][2] = $tk->getBalance();

        $this->listBankAccount = $a;
        // var_dump($this->listBankAccount);
        return true;
    }

    public function desopitMoney($accountNumber, $money, &$a): bool
    {
        // var_dump($this->listBankAccount);
        if ($this->search($accountNumber) >= 0) {
            $a[$this->search($accountNumber)][2] += $money;
            $this->listBankAccount = $a;
            // var_dump($this->listBankAccount);
            return true;
        }

        return false;
    }

    public function withdrawMoney($accountNumber, $money, &$a)
    {
        // for ($i = 0; $i < count($a); $i++) {
        var_dump($this->listBankAccount);
        if ($this->search($accountNumber) >= 0 && $a[$this->search($accountNumber)][2] > $money) {
            $a[$this->search($accountNumber)][2] -= $money;
            $this->listBankAccount = $a;
            var_dump($this->listBankAccount);
            return true;
        }

        var_dump($this->listBankAccount);
        return false;
    }
    public function removeAccount($accountNumber, &$a)
    {
        // var_dump($this->listBankAccount);
        // echo "<br>";
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i][1] == $accountNumber) {
                for ($j = $i; $j < count($a) - 1; $j++) {
                    $a[$j] = $a[$j + 1];
                }
                array_pop($a);
                $this->listBankAccount = $a;
                var_dump($this->listBankAccount);
                return true;
            }
        }
        var_dump($this->listBankAccount);
        return false;
    }
}

class Program
{
    public function show(BankAcount $acc)
    {
        echo "Chủ tài khoản: " . $acc->getAccountName();
        echo "Số tài khoản: " . $acc->getAccountNumber();
        echo "Số dư: " . $acc->getBalance();
    }
    public function main()
    {
        $obj = new Bank();
        $a = [];
        $chon = 1;
        while ($chon != 0) {
            $chon = readline("Mời bạn chọn một mục(1-5):");
            switch ($chon) {
                case 1:
                    $accountName = readline("Nhập tên tài khoản: ");
                    $accountNumber = readline("Nhập số tài khoản: ");
                    if ($obj->addAccount($accountName, $accountNumber, $a)) {
                        echo "Thêm sản phẩm thành công! \n";
                    } else {
                    }
                    break;
                    // case 2:
                    //     $obj->removeProduct($a);
                    //     echo "Xóa sản phẩm thành công! \n";
                    //     break;
                    // case 3:
                    //     $list = $obj->getProductList();
                    //     $obj->iterateProductList($list);
                    //     break;
                    // case 4:
                    //     echo $obj->searchProduct();
                    //     break;
                    // case 5:
                    //     echo $obj->sortProduct();
                    //     break;
                case 6:
                    return 0;
                default:
                    echo "Hành động không hợp lệ! \n";
                    $chon = 1;
            }
        }
    }
}
// $obj = new Bank();
// $a = [];
// $obj->addAccount("NGUYEN VAN A", "1050008854", $a);
// $obj->addAccount("NGUYEN VAN B", "1050008855", $a);
// echo $obj->desopitMoney("1050008854", 500, $a) ? 'TRUE' : 'FALSE';
// echo "<br>";
// echo $obj->withdrawMoney("1050008854", 300, $a) ? 'TRUE' : 'FALSE';
// echo "<br>";
// // $obj->removeAccount("1050008856", $a);
// // echo $obj->search("1050008855");
// // echo $obj->getTotal();

// echo $obj->getItem("1050008854");
