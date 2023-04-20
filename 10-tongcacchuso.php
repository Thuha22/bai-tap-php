<?php

// tính tổng các chữ số của một số nguyên n
$n = $_POST['son'];
function tong($n)
{
    $sum = array_sum(str_split($n));
    return $sum;
}
?>

<form action="" method="post">
    <input type="number" name="son" value="" placeholder="Nhập n:">
    <input type="submit" value="Kết quả">
</form>

<?php
echo tong($n);
?>