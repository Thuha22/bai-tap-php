<?php
// tính giai thừa của một số nguyên dương

$n = $_POST['son'];
function GiaiThua($n)
{
    $tich = 1;
    for ($i = 2; $i <= $n; $i++) {
        $tich = $tich * $i;
    }
    return $tich;
}
?>

<form action="" method="post">
    <input type="number" name="son" value="" placeholder="Nhập n:">
    <input type="submit" value="Kết quả">
</form>

<?php
echo "Giai thừa của $n là:" . GiaiThua($n);
?>