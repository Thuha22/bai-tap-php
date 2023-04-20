<?php
// giải phương trình bậc 2

$a = $_POST['soa'];
$b = $_POST['sob'];
$c = $_POST['soc'];

function GiaiPT($a, $b, $c)
{
    if ($a == 0 && $b == 0) {
        echo "Phương trình vô nghiệm";
    } elseif ($a == 0 && $b != 0) {
        echo "Phương trình có một nghiệm x=" . -$c / $b;
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            echo "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "Phương trình có một nghiệm kép x1 = x2 =" . $x;
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Phương trình có hai nghiệm x1= " . $x1 . " , x2= " . $x2;
        }
    }
}
?>

<form action="" method="post">
    <input type="number" name="soa" value="" placeholder="Nhập a:">
    <input type="number" name="sob" value="" placeholder="Nhập b:">
    <input type="number" name="soc" value="" placeholder="Nhập c:">
    <input type="submit" value="Kết quả">
</form>

<?php
echo GiaiPT($a, $b, $c);
?>