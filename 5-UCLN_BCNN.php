<?php
// tìm ước số chung lớn nhất (USCLN) và bội số chung nhỏ nhất (BSCNN) của hai số nguyên dương a và b.

$a = $_POST['soa'];
$b = $_POST['sob'];

function UCLN($a, $b)
{
    for ($i = 2; $i <= $a && $i <= $b; $i++) {
        if (($a % $i) == 0 && ($b % $i) == 0) {
            return $i;
        } else {
            return false;
        }
    }
}

function BCNN($a, $b)
{
    if (UCLN($a, $b) == false) {
        return ($a * $b);
    } else {
        return ($a * $b) /  UCLN($a, $b);
    }
}
?>

<form action="" method="post">
    <input type="number" name="soa" value="" placeholder="Nhập a:">
    <input type="number" name="sob" value="" placeholder="Nhập b:">
    <input type="submit" placeholder="Kết quả">
</form>


<?php
echo "Ước chung lớn nhất của $a và $b là: " . UCLN($a, $b)  . "<br> Bội chung nhỏ nhất của $a và $b là: " . BCNN($a, $b);
?>