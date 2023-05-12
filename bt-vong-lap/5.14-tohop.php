<?php
// Viết chương trình tính tổ hợp N chập K (với K <= N): C=((N-k+1) * (N-k+2)*…N)/1*2*3*…*k

/**
 * Tính giai thừa của n 
 * @param int $n 
 * @return int
 */
function tinhGiaiThua(int $n): int
{
    $t = 1;
    for ($i = 1; $i <= $n; $i++) {
        $t *= $i;
    }
    return $t;
}

/**
 * Tính tổ hợp chập k của N
 * @param int $k,$n
 * @return int 
 */
function tinhToHop(int $k, int $n): int
{
    $c = tinhGiaiThua($n) / (tinhGiaiThua($k) * tinhGiaiThua($n - $k));
    return $c;
}

?>
<form action="" method="post">
    <input type="number" name="k" value="" placeholder="Nhập k:">
    <input type="number" name="n" value="" placeholder="Nhập n:">
    <input type="submit">
</form>

<?php
if (isset($_POST['k']) && isset($_POST['n'])) {
    $k = $_POST['k'];
    $n = $_POST['n'];
    echo "Tổ hợp chập $k của $n là " . tinhToHop($k, $n);
}
?>