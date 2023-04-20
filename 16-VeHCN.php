<!--Sử dụng dấu * để vẽ hình chữ nhật trong PHP-->

<?php
$a = $_POST['soa'];
$b = $_POST['sob'];
?>

<form action="" method="post">
    <input type="number" name="soa" value="" placeholder="Nhập a:">
    <input type="number" name="sob" value="" placeholder="Nhập b:">
    <input type="submit" value="vẽ">
</form>

<?php
for ($n = 1; $n <= $a; $n++) {
    for ($i = 1; $i <= $b; $i++) {
        echo "*";
    }
    echo "<br>";
}
?>