<?php
// Viết chương trình tính giá trị của đa thức Pn = anxn + an-1xn-1 + … + a1x1 + a0

//https://expressmagazine.net/development/4550/vct-tinh-p-xn-1-xn-1-a1-x-a0


function tinhGTDT($n, $x)
{
    global $a;
    $x_mu_i = 1;
    $kq = $a[0];
    for ($i = 1; $i < $n; $i++) {
        $x_mu_i *= $x;
        $kq += $a[$i] * $x_mu_i;
    }
    return $kq;
}

for ($i = 1; $i < $n; $i++) {
    $a[$i] = $_POST["$i"];
    var_dump($a[$i]);
}
$x = $_POST['x'];
$n = $_POST['n'];

?>

<form action="#" method="post">
    <input type="number" name="n" value="" placeholder="Nhập n:"><br>
    <?php
    for ($i = 1; $i < $n; $i++) {
    ?>
        <input type="number" name="<?= $i ?>" value="" placeholder="Nhập a<?= $i ?>:"><br>
    <?php
    }

    ?>
    <input type="number" name="x" value="" placeholder="Nhập x:">

    <input type="submit" value="Tính">
</form>

<?php
echo tinhGTDT($x, $n);
?>