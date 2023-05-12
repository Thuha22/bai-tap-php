<?php

/**
 * Vừa gà vừa chó
 * Bó lại cho tròn
 * Ba mươi sáu con
 * Một trăm chân chẵn
 * Hỏi có bao nhiêu con gà, bao nhiêu con chó?
 */

/**
 * Tính số gà($x), chó($y)
 * @param int $animal, $foot
 * @return string
 */
function giaiToan(int $animal, int $foot): string
{
    $str = "";
    for ($x = 1; $x <= $animal; $x++) {
        for ($y = 1; $y <= $animal; $y++) {
            if ($x + $y == $animal && 2 * $x + 4 * $y == $foot) {
                $str .= "($x,$y) ";
            }
        }
    }
    return $str;
}

?>
<form action="" method="post">
    <input type="number" name="con" value="" placeholder="Nhập tổng số gà và chó:">
    <input type="number" name="chan" value="" placeholder="Nhập tổng số chân:">
    <input type="submit">
</form>

<?php
if (isset($_POST['con']) && isset($_POST['chan'])) {
    $animal = $_POST['con'];
    $foot = $_POST['chan'];
    echo "Số gà và chó lần lượt là " . giaiToan($animal, $foot);
}
?>