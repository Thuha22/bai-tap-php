<!--Sử dụng dấu * để vẽ tam trong PHP-->

<?php
$a = $_POST['soa'];
?>

<form action="" method="post">
    <input type="number" name="soa" value="" placeholder="Nhập a:">
    <input type="submit" value="vẽ">
</form>

<?php
for ($n = 0; $n < $a; $n++) {
    for ($i = ($a - $n); $i <= $a; $i++) {
        echo "*";
    }
    echo "<br>";
}
?>