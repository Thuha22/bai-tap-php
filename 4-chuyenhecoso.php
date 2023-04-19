<?php
// chuyển số nguyên n từ hệ thập phân sang hệ cơ số b


$n = $_POST['son'];
$b = $_POST['sob'];

function HeCoSo($n, $b)
{
    if ($n < 0 || $b < 2 || $b > 16) {
        return false;
    }

    $kq = "";
    $sodu = 0;
    $thuong = $n;
    while ($thuong > 0) {
        if ($b > 10) {
            $sodu = $thuong % $b;
            if ($sodu >= 10) {
                $kq =  $kq . chr(55 + $sodu);
            } else {
                $kq = $kq . $sodu;
            }
        } else {
            $kq = $kq . ($thuong % $b);
        }
        $thuong = floor($thuong / $b);
    }
    return strrev($kq);
}
?>


<form action="" method="post">
    <input type="number" name="son" value="" placeholder="Nhập n:">
    <input type="number" name="sob" value="" placeholder="Nhập b:">
    <input type="submit" placeholder="Kết quả">
</form>

<?php
echo " Số $n chuyển sang hệ số $b = " . HeCoSo($n, $b);

?>