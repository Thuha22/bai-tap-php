<?php

// Liệt kê n số nguyên tố đầu tiên trong PHP

$n = $_POST['son'];
function nSNTDauTien($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
?>

<form action="" method="post">
    <input type="number" name="son" value="" placeholder="Nhập n:">
    <input type="submit" value="Kết quả">
</form>

<?php
// $n = 20;
$count = 0;
$i = 2;
while ($count < $n) {
    if (nSNTDauTien($i)) {
        echo $i . " ";
        $count++;
    }
    $i++;
}
?>