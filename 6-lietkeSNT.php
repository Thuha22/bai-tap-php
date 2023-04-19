<?php

// liệt kê tất cả các số nguyên tố nhỏ hơn n.
$n = $_POST['son'];

function LietKeSNT($n)
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
    <input type="submit" placeholder="Kết quả">
</form>

<?php
for ($i = 2; $i < $n; $i++) {
    if (LietKeSNT($i)) {
        echo $i . "  ";
    }
}
?>