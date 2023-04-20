<?php

// phân tích số nguyên n thành các thừa số nguyên tố
$n = $_POST['son'];

function phanTichSNT($n)
{
    $i = 2;
    $number = array();
    $count = 0;

    while ($n > 1) {
        if ($n % $i == 0) {
            $n = $n / $i;
            $number[$count] = $i;
            $count = $count + 1;
        } else {
            $i++;
        }
    }
    return $number;
} ?>

<form action="" method="post">
    <input type="number" name="son" value="" placeholder="Nhập n:">
    <input type="submit" value="Kết quả">
</form>

<?php
$number = phanTichSNT($n);
echo ("$n = ");
for ($i = 0; $i < count($number); $i++) {
    echo "$number[$i] x ";
}
?>